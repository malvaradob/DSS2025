$(document).ready(function () {
    // Función de Login
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();
        var email = $('#emailLogin').val();
        var password = $('#passwordLogin').val();

        $.ajax({
            url: 'login.php',
            type: 'POST',
            data: { email: email, password: password },
            dataType: 'json',
            success: function (response) {
                if (response.status == 'success') {
                    $('#loginResult').html('<div class="alert alert-success">' + response.message + '</div>');
                } else {
                    $('#loginResult').html('<div class="alert alert-danger">' + response.message + '</div>');
                }
            },
            error: function () {
                $('#loginResult').html('<div class="alert alert-danger">Hubo un error al procesar la solicitud.</div>');
            }
        });
    });

    // Función de Registro
    $('#registroForm').on('submit', function (e) {
        e.preventDefault();
        var nombre = $('#nombre').val();
        var email = $('#email').val();
        var password = $('#password').val();

        $.ajax({
            url: 'registro.php',
            type: 'POST',
            data: { nombre: nombre, email: email, password: password },
            dataType: 'json',
            success: function (response) {
                if (response.status == 'success') {
                    $('#registroResult').html('<div class="alert alert-success">' + response.message + '</div>');
                } else {
                    $('#registroResult').html('<div class="alert alert-danger">' + response.message + '</div>');
                }
            },
            error: function () {
                $('#registroResult').html('<div class="alert alert-danger">Hubo un error al procesar la solicitud.</div>');
            }
        });
    });
});
