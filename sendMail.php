<?php
require_once('class.phpmailer.php');    //dodanie klasy phpmailer
require_once('class.smtp.php');    //dodanie klasy smtp
$mail = new PHPMailer();    //utworzenie nowej klasy phpmailer

$from = $_POST['email'];
$fullName = $_POST['fullName'];
$contentMessage = $_POST['content'];


$mail->From = "j.nowak@webio.pl";    //adres e-mail użyty do wysyłania wiadomości
$mail->FromName = $fullName;    //imię i nazwisko lub nazwa użyta do wysyłania wiadomości
$mail->AddReplyTo($email); //adres e-mail nadawcy oraz jego nazwa
                                             //w polu "Odpowiedz do"  
$mail->Host = "smtp.webio.pl";    //adres serwera SMTP wysyłającego e-mail
$mail->Mailer = "smtp";    //do wysłania zostanie użyty serwer SMTP
$mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
$mail->Username = "j.nowak@webio.pl";    //nazwa użytkownika do skrzynki e-mail
$mail->Password = "hasło";    //hasło użytkownika do skrzynki e-mail
$mail->Port = 587; //port serwera SMTP zależny od konfiguracji dostawcy usługi poczty
$mail->Subject = "Formularz kontaktowy";    //Temat wiadomości, można stosować zmienne i znaczniki HTML
$mail->Body = $contentMessage;    //Treść wiadomości, można stosować zmienne i znaczniki HTML     
$mail->AddAddress ("biuro@webio.pl","Biuro Webio");    //adres skrzynki e-mail oraz nazwa
                          //adresata, do którego trafi wiadomość
 if($mail->Send())    //sprawdzenie wysłania, jeśli wiadomość została pomyślnie wysłana
    {                      
    echo 'E-mail został wysłany'; //wyświetl ten komunikat
    }            
else    //w przeciwnym wypadku
    {           
    echo 'E-mail nie mógł zostać wysłany';    //wyświetl następujący
    }
?>