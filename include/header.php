<?php
include __DIR__.'/../PHPMailer/Exception.php';
include __DIR__.'/../PHPMailer/PHPMailer.php';
include __DIR__.'/../PHPMailer/SMTP.php';
$phone_submit_ok = '';
$phone_submit_error = '';
$form_submit_ok = '';
$form_submit_error = '';

// Обработка отправки формы
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['phone_submit'])) {
    if(isset($_POST['phone']) && $_POST['phone'] != '') {
        $subject = "Поступила заявка с сайта";
        
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->CharSet = 'UTF-8'; 

        // Настройки SMTP
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
 
        $mail->Host = 'ssl://smtp.yandex.ru';
        $mail->Port = 465;
        $mail->Username = 'printdiz@yandex.ru';
        $mail->Password = 'vaa238350pmb';
 
        // От кого
        $mail->setFrom('printdiz@yandex.ru', 'Принт-Дизайн');
        
        // Кому
        $mail->addAddress('printdiz@yandex.ru', 'Принт-Дизайн');
        $mail->addAddress('printdiz@mail.ru', 'Принт-Дизайн');
        $mail->addAddress('dimatverweb@yandex.ru', 'Принт-Дизайн');
 
        // Тема письма
        $mail->Subject = $subject;
 
        // Тело письма
        $body = "<p>".$_POST['phone']."</p>";
        $mail->msgHTML($body);
 
        // Приложение
        //$mail->addAttachment(__DIR__ . '/image.jpg');
 
        $mail_result = $mail->send();
        
        if($mail_result) {
            $phone_submit_ok = 'Телефон отправлен';
        }
        else {
            $phone_submit_error = 'Ошибка при отправке телефона';
        }
    }
    else {
        $phone_submit_error = 'Не указан телефон';
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['order-submit'])) {
    $form_subject = "Поступила заявка с сайта";
    
    $form_mail = new PHPMailer\PHPMailer\PHPMailer();
    $form_mail->CharSet = 'UTF-8';
    
    // Настройки SMTP
    $form_mail->isSMTP();
    $form_mail->SMTPAuth = true;
    $form_mail->SMTPDebug = 0;
    
    $form_mail->Host = 'ssl://smtp.yandex.ru';
    $form_mail->Port = 465;
    $form_mail->Username = 'printdiz@yandex.ru';
    $form_mail->Password = 'vaa238350pmb';
    
    // От кого
    $form_mail->setFrom('printdiz@yandex.ru', 'Принт-Дизайн');
        
    // Кому
    $form_mail->addAddress('printdiz@yandex.ru', 'Принт-Дизайн');
    $form_mail->addAddress('printdiz@mail.ru', 'Принт-Дизайн');
    $form_mail->addAddress('dimatverweb@yandex.ru', 'Принт-Дизайн');
 
    // Тема письма
    $form_mail->Subject = $form_subject;
 
    // Тело письма
    $form_body = "<p><strong>Продукция:</strong> ".$_POST['order-product']."</p>";
    $form_body .= "<p><strong>ФИО:</strong> ".$_POST['order-name']."</p>";
    $form_body .= "<p><strong>Телефон:</strong> ".$_POST['order-phone']."</p>";
    $form_body .= "<p><strong>E-mail:</strong> ".$_POST['order-email']."</p>";
    $form_mail->msgHTML($form_body);
 
    // Приложение
    //$form_mail->addAttachment(__DIR__ . '/image.jpg');
 
    $form_result = $form_mail->send();
        
    if($form_result) {
        $form_submit_ok = 'Наш менеджер свяжется с Вами в ближайшее время.';
    }
    else {
        $form_submit_error = 'Ошибка при отправке запроса.';
    }
}
?>
<header>
    <div class="d-md-flex justify-content-md-between mb-md-auto" id="topmost">
        <div class="p-md-1">
            <a href="<?=APPLICATION ?>/"><img src="<?=APPLICATION ?>/images/logo.svg" title="Принт-Дизайн" id="logo" />&nbsp;</a>
        </div>
        <div class="p-md-1 small text-info">Работаем по всей России</div>
        <div class="p-md-1"></div>
        <div class="p-md-1"></div>
        <div class="p-md-1">
            <form class="form-inline" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Ваш телефон" id="phone" name="phone" required="required" />
                    <div class="input-group-append">
                        <button type="submit" class="form-control" id="phone_submit" name="phone_submit">OK</button>
                    </div>
                </div>
            </form>
            <?php
            if($phone_submit_error != '') {
                echo "<div class='alert-danger'>$phone_submit_error</div>";
            }
            
            if($phone_submit_ok != '') {
                echo "<div class='alert-info'>$phone_submit_ok</div>";
            }
            ?>
        </div>
        <div class="p-md-1 d-none d-md-block">
            <p style="white-space: nowrap;">г. Тверь, ул. Учительская, д. 54, 8:00 &ndash; 18:00</p>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <p class="text-nowrap pr-md-2"><a href="tel:+74822608515">+7 (4822) 60-85-15</a></p>
                </div>
                <div class="col-12 col-lg-6">
                    <p><a href="mailto:printdiz@mail.ru">printdiz@mail.ru</a></p>
                    <p><a href="mailto:printdiz@yandex.ru">printdiz@yandex.ru</a></p>
                </div>
            </div>
        </div>
    </div>
    <a href="#topmost">
        <div class="link-to-top">
            <span class="font-awesome">&#xf062;</span>
        </div>
    </a>
</header>
<div class="left-freeze-buttons" id="to_feedback">
    <a href="#feedback_submit" class="btn btn-primary" title="Связаться с отделом продаж">Связаться с отделом продаж</a>
</div>
<!-- The Modal -->
<div class="modal fade" id="orderModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Заказ продукта</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="order-product">Продукт</label>
                        <input type="text" id="order-product" name="order-product" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="order-name">Ваше имя</label>
                        <input type="text" id="order-name" name="order-name" class="form-control"/>
                    </div>
                    <div class="form-group" style="position: relative;">
                        <label for="order-phone">Ваш телефон</label>
                        <input type="tel" id="order-phone" name="order-phone" class="form-control" required="required"/><div class="text-danger" style="position: absolute; bottom: 2px; right: -8px;">*</div>
                    </div>
                    <div class="form-group">
                        <label for="order-email">Ваш e-mail</label>
                        <input type="email" id="order-email" name="order-email" class="form-control"/>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal">Отмена</button>
                    <button class="btn btn-primary" id="order-submit" name="order-submit">Заказать</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="okModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Запрос отправлен</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <h1 class="text-success">Спасибо за Ваш заказ</h1>
                    <p><?=$form_submit_ok ?></p>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal">OK</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php if (isset($form_submit_error) && $form_submit_error != ''): ?>
<div class='alert alert-danger'><?=$form_submit_error ?></div>
<?php endif; ?>