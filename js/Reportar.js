$("#btnAction").on('click', function(event){
      event.preventDefault();
      insertReport();
})

function insertReport(){
	jQuery.ajax({
		url: '../db_admin/Reporte.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formReport').serialize() + "&action=" + 'insert',
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
	})
	.fail(function(fail) {
		console.log('fail');
		$("#modal").load('../Comun/Modals/Error_Save.html');
		setTimeout(function(){
		$(".modalpopup").modal();
		},500);
	})
	.always(function() {
		console.log("complete");
		limpiar();
	});	
}

function limpiar(){
	document.getElementById("formReport").reset();
}