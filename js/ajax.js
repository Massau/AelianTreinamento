$(document).ready(function() {
    
});

$(function removeResposta() {
   $('.table').on('click', '.btn-remover', function(remover) {
    
     $.ajax({
            type: 'GET',
            dataType: 'html',
            url: 'remove-resposta.php?id='+remover.id,
            
            async: true,
            sucess: function() {
                alert('Resposta Removida');
            }
        });
    });
});