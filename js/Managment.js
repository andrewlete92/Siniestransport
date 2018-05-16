$(document).ready(function()
{
   cargar();
});

function cargar(){
    $('#slide').load('../Comun/Slides.html');
}

jQuery(document).on('click','.submenu',function(event)
{
    event.preventDefault();
    $('#slide').attr('hidden', 'true');            
    $('#content').load(this.href);

});

jQuery(document).on('click','#report',function(event)
{
//$("#report").on("click", function(event){
    event.preventDefault();
    $("#modal").load('../Comun/Modals/Reportar.html');
    setTimeout(function(){
    $(".modalpopup").modal();
    },500);     
})