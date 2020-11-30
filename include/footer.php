<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2 bigtext">
                &COPY;&nbsp;<a href="<?=APPLICATION ?>/" class="bigtext">Принт-Дизайн</a>
            </div>
            <div class="col-md-2 smalltext">
                <p class="text-nowrap"><a href="tel:+74822608515">+7 (4822) 60-85-15</a></p>
            </div>
            <div class="col-md-2 smalltext">
                <p><a href="<?=APPLICATION ?>/">О компании</a></p>
            </div>
            <div class="col-md-2 smalltext">
                <p><a href="<?=APPLICATION ?>/manufacture/">Производство</a></p>
            </div>
            <div class="col-md-2 smalltext">
                <p><a href="<?=APPLICATION ?>/package/">Гибкая упаковка</a></p>
                <p><a href="<?=APPLICATION ?>/label/">Этикетка</a></p>
            </div>
            <div class="col-md-2 smalltext">
                <p><a href="<?=APPLICATION ?>/contact/">Контакты</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="<?=APPLICATION ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?=APPLICATION ?>/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        <?php if (isset($form_submit_ok) && $form_submit_ok != ''): ?>
        $('#okModal').modal('show');
        <?php endif; ?>
        
        $("a").on('click', function(event) {
            if (this.hash !== "" && this.hash !== "#myCarousel") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').filter(':not(:animated)').animate({
                    scrollTop: $(hash).offset().top
                }, 1200, function(){
                    window.location.hash = hash;
                });
            }
        });
    });
    
    $('.order-product').click(function(){
        $('#order-product').val($(this).attr('data-text'));
    });
    
    function Shake(halfheight, rightpos) {
        var interval = 100;
        var distance = 10;
        var times = 6;
        
        for (var i = 0; i < (times + 1); i++) {
            $('#to_feedback').animate({
                bottom:(i % 2 == 0 ? distance + halfheight : (distance * -1) + halfheight)
            }, interval);
        }
        $('#to_feedback').animate({
            right: rightpos,
            bottom: halfheight
        }, interval);
    }
    
    var to_feedback_bottom = 100;
    var to_feedback_right = 90;

    $('#to_feedback').css('bottom', to_feedback_bottom);
    $('#to_feedback').css('right', to_feedback_right);
    setInterval(Shake, 5000, to_feedback_bottom, to_feedback_right);
</script>
<link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
<script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=e818304101bb00cd42474edffbef6e65" charset="UTF-8" async></script>