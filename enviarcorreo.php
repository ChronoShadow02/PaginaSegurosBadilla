<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php/PHPMailer/Exception.php';
require 'php/PHPMailer/PHPMailer.php';
require 'php/PHPMailer/SMTP.php';
        
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $NombreCompleto = htmlspecialchars($_POST['pnombre'], ENT_QUOTES, 'UTF-8');
    $Correo = htmlspecialchars($_POST['pcorreo'], ENT_QUOTES, 'UTF-8');
    $Telefono = htmlspecialchars($_POST['ptelefono'], ENT_QUOTES, 'UTF-8');
    $OpcionSeguro = htmlspecialchars($_POST['popcionSeguro'], ENT_QUOTES, 'UTF-8');
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'angelandresvc007@gmail.com';           // SMTP username
    $mail->Password   = 'Irenebae30';                           // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('angelandresvc007@gmail.com', 'Seguros Badilla CR');
    $mail->addAddress($Correo, $NombreCompleto);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Informacion sobre seguros';
    $mail->Body    = '<!DOCTYPE html>
                            <html lang="es">
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Mensaje</title>
                            </head>
                            <body>
                                <div style="margin: 0 auto; width: 700px;">
                                <figure style="text-align: center;">
                                    <img src="https://i.ibb.co/b22wwGS/logo.png">
                                </figure>
                                <h1 style="text-align: center; font-size: 2em;">Información de seguros</h1>
                                <h2></h2>
                                <h3>Nombre:' .$NombreCompleto .'</h3>
                                <h3>Correo:' .$Correo .'</h3>
                                <h3>Teléfono:'.$Telefono . ' </h3>
                                <h3>Seguro:' . $OpcionSeguro . ' </h3>
                                </div>
                            </body>
                            </html>
                            ';
    $mail->send();
    echo 1;
} catch (Exception $e) {
    echo 0;
}
?>

