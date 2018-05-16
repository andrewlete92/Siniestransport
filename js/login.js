//Inicia verificación Login
jQuery(document).on('submit','#formlg',function(event){
	event.preventDefault();

	jQuery.ajax({
		url: '../Db_Admin/Login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('#btnlg').val("VALIDANDO..."); //Sustituir por un cargando
		}
	})
	.done(function(respuesta) {
		console.log(respuesta);
		if (!respuesta.error) {
			if(respuesta.type=='Admin'){
			$('#btnlg').val("INGRESAR");
			location.href='../App/Managment.html';
			} else if (respuesta.type=='User'){
			$('#btnlg').val("INGRESAR");
			//location.href='';
			//location.href='../Users_views/User_panel.html';
			}
		}else {
			$('#btnlg').val("INGRESAR");
			$("#modal").load('Modals/Error_Login.html');
			setTimeout(function(){
			$(".modalpopup").modal();
			},500);
		}
	})
	.fail(function(resp) {
		console.log(resp);
	})
	.always(function(){
		console.log("Complete");
	});
});
//Finaliza verificación login

function signin(){
	window.location = "SignIn.php";
}

function logout(){
	window.location = "../Comun/Index.php";
}