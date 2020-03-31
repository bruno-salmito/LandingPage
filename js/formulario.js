/**
 * Script para controle envio/recebimento do post e ajax
 * Autor: Bruno Salmito
 * Versão: 0.0.1
 */
$(function () {

    $('body').on('submit', 'form', function () {
        var form = $(this);
        var include_path = 'http://localhost/curso/Front_End/Projetos/landingPage/';
        $.ajax({
            beforeSend: function () {
                $('.loader').fadeIn();
            },
            url: 'ajax/formulario.php',
            method: 'post',
            dataType: 'json',
            data: form.serialize()
        }).done(function (data) {
            if (data.sucesso) {
                $('.loader').fadeOut();
                $('.msgSucesso').fadeIn(1000);
                setTimeout(() => {
                    $('.msgSucesso').fadeOut();
                }, 3000);

            } else {
                $('.loader').fadeOut();
                $('.msgErro').fadeIn();
                setTimeout(() => {
                    $('.msgErro').fadeOut();
                }, 3000);

            }
        });

        return false;
    })

})