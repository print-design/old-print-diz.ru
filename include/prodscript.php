<script>
    var windowHeight = $(window).height();
    var topmostHeight = $('#topmost').outerHeight();
    var navbarHeight = $('#navbar').outerHeight();
    var leftmenuHeight = $('.left-freeze-menu').outerHeight();
    
    $(".layers ol li svg").mouseover(function(){
        $(this).next().css('font-weight', 'bold');
    });
    
    $(".layers ol li svg").mouseout(function(){
        $(this).next().css('font-weight', 'normal');
    });
    
    $(window).on('resize', function(){
        windowHeight = $(window).height();
    });
    
    $(window).scroll(function(){
        // Удержание левого меню в вверхней части экрана
        var navbarPosition = topmostHeight - $(window).scrollTop();
              
        if((leftmenuHeight + topmostHeight + navbarHeight) < windowHeight) {
            if(navbarPosition < 0) {
                $('#left-freeze-menu').removeClass('menufloat');
                $('#left-freeze-menu').removeClass('menufixed-bottom');
                $('#left-freeze-menu').addClass('menufixed-top');
            }
            else {
                $('#left-freeze-menu').removeClass('menufixed-top');
                $('#left-freeze-menu').removeClass('menufixed-bottom');
                $('#left-freeze-menu').addClass('menufloat');
            }
        }
        else {
            if((navbarPosition + navbarHeight + leftmenuHeight) < windowHeight) {
                $('#left-freeze-menu').removeClass('menufloat');
                $('#left-freeze-menu').removeClass('menufixed-top');
                $('#left-freeze-menu').addClass('menufixed-bottom');
            }
            else {
                $('#left-freeze-menu').removeClass('menufixed-top');
                $('#left-freeze-menu').removeClass('menufixed-bottom');
                $('#left-freeze-menu').addClass('menufloat');
            }
        }
        
        // Удержание верхнего меню в верхней части экрана
        if(navbarPosition < 0) {
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
    
    /*** СЛАЙД-ШОУ ***/
    var slideIndex = 1;
    showSlides(slideIndex);
    
    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    
    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slideshow-mySlides");
        var dots = document.getElementsByClassName("slideshow-dot");
        var demos = document.getElementsByClassName("slideshow-demo");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" slideshow-active", "");
        }
        for (i = 0; i < demos.length; i++) {
            demos[i].className = demos[i].className.replace(" slideshow-active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " slideshow-active";
        demos[slideIndex-1].className += " slideshow-active";
    }
</script>