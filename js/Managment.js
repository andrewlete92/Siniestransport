$(document).ready(function()
{
    $(".submenu").on("click", function(event)
    {
        event.preventDefault();            
       //Cargamos el contenido del enlace
        $('#content').load(this.href);
    });
    $("#report").on("click", function(event){
    	event.preventDefault();
    	$("#modal").load('../Comun/Modals/Reportar.html');
        setTimeout(function(){
        $(".modalpopup").modal();
        },500);    	
    })
});

$('#ModalRegistro').on('submit',".form-horizontal",function(){
    alert("Prueba OK");
})
