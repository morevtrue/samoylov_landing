<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__ . '/core/vendor/autoload.php'; // путь к PHPMailer

$mail = new PHPMailer(true);

try {
    // SMTP настройки
    $mail->isSMTP();
    $mail->Host = 'smtp.yandex.ru';
    $mail->SMTPAuth = true;
    $mail->Username = 'sla2324@yandex.ru';
    $mail->Password = 'zdtzorppzskhmupr'; // пароль приложения
    $mail->SMTPSecure = 'tls'; // или 'ssl' для порта 465
    $mail->Port = 587;

    // От кого
    $mail->setFrom('sla2324@yandex.ru', 'Новая заявка с сайта!');
    $mail->addAddress('stelve01@yandex.ru');

    $mail->isHTML(true);
    $mail->Subject = 'Тестовая отправка из контейнера';
    $mail->Body    = '<p>Это тестовое письмо, отправленное из PHP внутри Docker-контейнера EVO CMS.</p>';

    $mail->send();
    echo 'Письмо отправлено успешно';
} catch (Exception $e) {
    echo "Ошибка при отправке: {$mail->ErrorInfo}";
}
