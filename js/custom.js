;
(function($) {
    "use strict"
    var nav_offset_top = $('header').height() + 50;

    function navbarFixed() {
        if ($('.header_area').length) {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= nav_offset_top) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();
})(jQuery)


$( document ).ready(function() {
    $("#form1_enquiry").validationEngine();

        $("#form1_submit").click(function (e) {
            var valid = $("#form1_enquiry").validationEngine('validate');
         
            if (valid == true) {
				e.preventDefault();
				$('#form1_submit').prop('disabled',true);
				//return true;
            } 
        });
});