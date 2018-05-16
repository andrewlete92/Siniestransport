$("#btnRegistrarse").on('click', function(event){
	event.preventDefault();
	var val = validarllave();
	if(val!=0){
		if($('#email').val()==$('#email2').val() && $('#pass').val()==$('#pass2').val()){
		registrar(val);
		} else {
			$("#ModalAlert").load('../Comun/Modals/Error_Campos.html');
				setTimeout(function(){
				$(".modalpopup").modal();
			},500);
		}
	} else {
		$("#ModalAlert").load('../Comun/Modals/Error_Key.html');
			setTimeout(function(){
			$(".modalpopup").modal();
		},500);
	}
	
}

function registrar(val){
	jQuery.ajax({
		url: '../Db_Admin/Registrarse.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formRegistro').serialize()+ "&action=" + 'insert' + "&idCliente=" + val,
	})
	.done(function(data){
		console.log("success");
		console.log(data);
		if(!data.answ){
			$("#ModalAlert").load('../Comun/Modals/Success_Save.html');
			setTimeout(function(){
			$(".modalpopup").modal();
			},500);
		}
		limpiar();
	})
	.fail(function(fail) {
		console.log(fail);
		$("#ModalAlert").load('../Comun/Modals/Error_Save.html');
			setTimeout(function(){
			$(".modalpopup").modal();
			},500);
	})
	.always(function() {
		console.log("complete");
	});
}

function validarllave(){
	var idcliente = 0;
	var key = $('#nvalidacion').val();
	jQuery.ajax({
		url: '../Db_Admin/Registrarse.php',
		type: 'POST',
		dataType: 'json',
		data: "&action=" + 'validar' + "&key=" + key,
	})
	.done(function(data) {
		//console.log("success");
		console.log(data);
		if(data !=null){
			idcliente = data[0].idcliente;
		}
	});
	return idcliente;
}

function limpiar(){
	document.getElementById("formRegistro").reset();
}