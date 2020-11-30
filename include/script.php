<script>
    var topmostHeight = $('#topmost').outerHeight();
    var navbarHeight = $('#navbar').outerHeight();
    
    $(window).scroll(function(){
        var navbarPosition = topmostHeight - $(window).scrollTop();
        
        // Удержание верхнего меню в верхней части экрана
        if(navbarPosition < 7) {
            $('#navbar').addClass('fixed-top');
            $('#navbarPlaceholder').css('margin-top', navbarHeight + 'px');
            $('.link-to-top').show();
        }
        else {
            $('#navbar').removeClass('fixed-top');
            $('#navbarPlaceholder').css('margin-top', '0px');
            $('.link-to-top').hide();
        }
    });
</script>