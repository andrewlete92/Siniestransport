$("#btnAction").on('click', function(event){
      event.preventDefault();
      if($('#Placa').val().length!=0 && $('#Conductor').val().length!=0 && $('#testimonio').val().length!=0){
      	insertReport();
      } else {
      	$("#ModalAlert").load('../Comun/Modals/Error_Data.html');
			setTimeout(function(){
			$(".modalpopup").modal();
		},500);
      }
      
})

function insertReport()
{
	var Placa = $('#Placa').val();
	var idCondicion = $('#CondiAmbientales').val();
	var idDesperfecto = $('#Desperfectos').val();
	var idSitCarretera = $('#SCarreteras').val();
	var idCausa_Peaton = $('#CausaPeaton').val();
	var idCaract_Avenidas = $('#C_Avenidas').val();
	var idCausa_Conductor = $('#CausaConductor').val();
	var TipoVehiculo = $('#TipoVehiculo').val();
	var heridos = $('#Heridos').val();
	var muertos = $('#Muertos').val();
	var Conductor = $('#Conductor').val();
	var testimonio = $('#testimonio').val();
	jQuery.ajax({
		url: '../Db_Admin/Report.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formReport').serialize() + "&action=" + 'insert' +
		"&placa=" + Placa +
		"&idCondicion=" + idCondicion +
		"&idDesperfecto=" + idDesperfecto +
		"&idSitCarretera=" + idSitCarretera +
		"&idCausa_Peaton=" + idCausa_Peaton +
		"&idCaract_Avenidas=" + idCaract_Avenidas +
		"&idCausa_Conductor=" + idCausa_Conductor +
		"&TipoVehiculo=" + TipoVehiculo +
		"&heridos=" + heridos +
		"&muertos=" + muertos +
		"&Conductor=" + Conductor +
		"&testimonio=" + testimonio,
	})
	.done(function(data){
		console.log("success");
		console.log(data);
		if(!data.answ){
			$("#modal").load('../Comun/Modals/Success_Save.html');
			setTimeout(function(){
			$(".modalpopup").modal();
			},500);
		}
		$("#modal").modal('hide');
		$("#ModalAlert").modal('hide');
		/*if(!data.answ){
			$("#modal").load('../Comun/Modals/Success_Save.html');
			setTimeout(function(){
			$(".modalpopup").modal();
			},500);*/
		//}
		//limpiar();
	})
	.fail(function(fail) {
		console.log('fail');
		$("#ModalAlert").load('../Comun/Modals/Error_Data.html');
			setTimeout(function(){
			$(".modalpopup").modal();
		},500);
	})
	.always(function() {
		console.log("complete");
	});
}

function limpiar(){
	document.getElementById("formReport").reset();
}