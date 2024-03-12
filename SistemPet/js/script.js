$(document).ready(function() {
    $("#cpf").mask("000.000.000-00");
    $("#cep").mask("00.000-000");
    $("input#celular").mask("(00)00000-0000");
    $('.dropdown').click(function(){
        $(this).toggleClass('active');
    });
    
});
