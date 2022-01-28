<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/Exception.php";

    $mail = new PHPMailer(true);
    $mail->Charset = "UTF-8";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $body = $name . ' ' . $email . ' ' . $phone . ' ' . $message;
    $theme = "[Заявка с streamservice]";
    $mail->addAddress("dudkaleks14@gmail.com");

    $mail->Subject = $theme;
    $mail->Body = $body;

    $mail->send();

