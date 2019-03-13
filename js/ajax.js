$(document).ready(function() {
    
    function insereResposta() {    
        $('.submit').click(function() {
        $.ajax({
            type: 'POST',
            url: 'banco-respostas.php',
            data: {
                insereResposta: 'true',
            },
            success: function(data){
                for(var i = 0; data.length > i; i++){
                    $('.table').append('<tr><td>' + data[i].idrole + '</td><td>' + data[i].nmrole + '</td></tr>');  
                };
            }
        });
    }
    
});
  
$(function removeResposta() {
    $('.table').on('click', '.btn-remover', function(remover) {
    
        $.ajax({
            type: 'POST',
            dataType: 'html',
            url: 'remove-resposta.php',
            async: true,
            sucess: function() {
                $("td").remove();
                $("td").show();  
                $("td").append(data);
            }
        });
    });
});