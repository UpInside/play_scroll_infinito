$(function () {

    $(window).scroll(function () {

        if ($(window).scrollTop() >= $(document).height() - $(window).height() - 10) {

            $.post('controller.php', {action: 'more_articles', offsetCount: $('.card').length}, function (data) {

                if (data.content) {
                    $('.content').append(data.content);
                } else {

                    if (!$('.load_more').length) {
                        $('.content').append("<div class='load_more'>" +
                            "            <p>Acabou os registros!</p>" +
                            "        </div>");
                    }
                }

            }, 'json');

        }

    });
});