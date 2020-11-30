<?php
$feedback_submit_ok = '';
$feedback_submit_error = '';

// Обработка отправки формы
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['feedback_submit'])) {
    if((isset($_POST['phone']) && $_POST['phone'] != '') || (isset($_POST['email']) && $_POST['email'] != '')) {
        $subject = "Поступила заявка с сайта";
        
        $feedback_mail = new PHPMailer\PHPMailer\PHPMailer();
        $feedback_mail->CharSet = 'UTF-8'; 

        // Настройки SMTP
        $feedback_mail->isSMTP();
        $feedback_mail->SMTPAuth = true;
        $feedback_mail->SMTPDebug = 0;
 
        $feedback_mail->Host = 'ssl://smtp.yandex.ru';
        $feedback_mail->Port = 465;
        $feedback_mail->Username = 'printdiz@yandex.ru';
        $feedback_mail->Password = 'vaa238350pmb';
 
        // От кого
        $feedback_mail->setFrom('printdiz@yandex.ru', 'Принт-Дизайн');
        
        // Кому
        $feedback_mail->addAddress('printdiz@yandex.ru', 'Принт-Дизайн');
        $feedback_mail->addAddress('printdiz@mail.ru', 'Принт-Дизайн');
        $feedback_mail->addAddress('dimatverweb@yandex.ru', 'Принт-Дизайн');
 
        // Тема письма
        $feedback_mail->Subject = $subject;
 
        // Тело письма
        $body = "<p><strong>ФИО:</strong> ".$_POST['person']."</p>";
        $body .= "<p><strong>Телефон:</strong> ".$_POST['phone']."</p>";
        $body .= "<p><strong>E-mail:</strong> ".$_POST['email']."</p>";
        $feedback_mail->msgHTML($body);
 
        // Приложение
        //$mail->addAttachment(__DIR__ . '/image.jpg');
 
        $feedback_result = $feedback_mail->send();
        
        if($feedback_result) {
            $feedback_submit_ok = 'Запрос отправлен';
        }
        else {
            $feedback_submit_error = 'Ошибка при отправке запроса';
        }
    }
    else {
        $feedback_submit_error = 'Не указан ни телефон, ни email';
    }
}
?>
<hr class="float-none" />
<h2>Остались вопросы?</h2>
<p>Наш менеджер свяжется с Вами.</p>
<form class="form-inline" method="post" action="#feedback_submit">
    <div class="d-md-flex justify-content-md-start mb-md-4">
        <div class="p-md-1">
            <div class="form-group">
                <input type="text" id="person" name="person" class="form-control" placeholder="ФИО" />
            </div>
        </div>
        <div class="p-md-1">
            <div class="form-group" style="position: relative;">
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Телефон" /><div class="text-danger" style="position: absolute; top: 0px; right: -7px;">*</div>
            </div>
        </div>
        <div class="p-md-1">
            <div class="form-group">
                <input type="text" id="email" name="email" class="form-control" placeholder="E-mail" />
            </div>
        </div>
        <div class="p-md-1">
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control" id="feedback_submit" name="feedback_submit">Отправить</button>
            </div>
        </div>
    </div>
</form>
<?php
if($feedback_submit_error != '') {
    echo "<div class='alert-danger'>$feedback_submit_error</div>";
}

if($feedback_submit_ok != '') {
    echo "<div class='alert-info'>$feedback_submit_ok</div>";
}
?>
<br/>