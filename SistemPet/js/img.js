function carregar() {
    var login = $('#login1').val(); // Obtém o valor do campo de login
    $.ajax({
        type: "POST",
        url: "backend/carrega_dados.php",
        data: { login: login }, // Substitua "nome_do_usuario" pelo login real do usuário
        dataType: "json",
        success: function(response) {
            // Exibir a imagem na tag <img>
            $('#load').attr('src', response.imagem);
            console.log(response)
        },
        error: function(xhr, status, error) {
            console.log("Erro ao obter os dados do usuário:", error);
        }
    });
}
