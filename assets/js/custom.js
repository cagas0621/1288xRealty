(function ($) {
    'use strict';

    $(".blog-post-thumbnail1").hover(
        function () {
            $(this).find(".hover-image1").attr("src", template_url + '/assets/img/sage-img/2.jpg').css("transform", "scale(1.1)");
        },
        function () {
            $(this).find(".hover-image1").attr("src", template_url + '/assets/img/sage-img/1.jpg').css("transform", "scale(1)");
        }
    );
    $(".blog-post-thumbnail2").hover(
        function () {
            $(this).find(".hover-image2").attr("src", template_url + '/assets/img/ivy-img/2.jpg').css("transform", "scale(1.1)");
        },
        function () {
            $(this).find(".hover-image2").attr("src", template_url + '/assets/img/ivy-img/1.jpg').css("transform", "scale(1)");
        }
    );
    $(".blog-post-thumbnail3").hover(
        function () {
            $(this).find(".hover-image3").attr("src", template_url + '/assets/img/stella-img/2.jpg').css("transform", "scale(1.1)");
        },
        function () {
            $(this).find(".hover-image3").attr("src", template_url + '/assets/img/stella-img/1.jpg').css("transform", "scale(1)");
        }
    );
    $(".blog-post-thumbnail4").hover(
        function () {
            $(this).find(".hover-image4").attr("src", template_url + '/assets/img/harper-img/2.jpg').css("transform", "scale(1.1)");
        },
        function () {
            $(this).find(".hover-image4").attr("src", template_url + '/assets/img/harper-img/1.jpg').css("transform", "scale(1)");
        }
    );
})(jQuery);