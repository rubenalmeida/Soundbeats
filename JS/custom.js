$(document).ready(function(){
    
    $('form[name="form_login"]').submit(function(){
        var botao = $(this).find(':button');
        botao.attr('disabled', true);
        botao.html('Entrando...');
    });
    
    
    
    
});