$(function () {

    $(window).scroll(function () {

        //console.log("scrollTop: " + $(window).scrollTop());
        //console.log("Altura do Documento: " + $(document).height());

        if($(window).scrollTop() >= $(document).height() - $(window).height() - 10){
            console.log('Carregar mais conteúdo');

            $('.content').append("<p>Carregou mais um artigo!</p>");
        }

    });
});