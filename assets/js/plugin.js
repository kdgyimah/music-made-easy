$(document).ready(function() {
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.tabs').tabs();
    $('.slider').slider();

    $("#deletebtn").click(function(){
        $("#deletediv").remove();
    });
});