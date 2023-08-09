<?php
header("Content-Type:text/html; charset:utf-8");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function Filtrele($Deger){
    $Islembir   =   trim($Deger);
    $Islemiki   =   strip_tags($Islembir);
    $IslemUC    =   htmlspecialchars($Islemiki, ENT_QUOTES);
    $Sonuc      =   $IslemUC;
    return $Sonuc;
}


$GelenAdiSoyadi      =   Filtrele($_POST["adisoyadi"]);
$GelenTelefon        =   Filtrele($_POST["telefon"]);
$GelenEmail          =   Filtrele($_POST["email"]);
$GelenKonu           =   Filtrele($_POST["konu"]);
$GelenMesaj          =   Filtrele($_POST["mesaj"]);



$mail   =   new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->CharSet   = 'UTF-8';
    $mail->Username   = 'mailhesabiniz@gmail.com';
    $mail->Password   = 'sifreniz'; 
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->SMTPOptions = array(
        'ssl' => [
            'verify_peer' => false,
            'verify_depth' => false,
            'allow_self_signed' => true,

        ],
    );
    $mail->setFrom('mailhesabiniz@gmail.com', 'Gene Mallandınız');
    $mail->addAddress('mailhesabiniz@gmail.com', 'Gene Mallandınız');
    $mail->addReplyTo($GelenEmail, $GelenAdiSoyadi);
    $mail->isHTML(true);
    $mail->Subject = $GelenKonu;
    $mail->MsgHTML($GelenMesaj);
    $mail->send();
    echo 'Mail gönderildi';
} catch (Exception $e) {
    echo "Mail gönderim hatası <br /> Hata açıklaması: " . $mail->ErrorInfo;
}
?>