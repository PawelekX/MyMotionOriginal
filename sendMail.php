<?php
require_once('class.phpmailer.php');    //dodanie klasy phpmailer
require_once('class.smtp.php');    //dodanie klasy smtp
$mail = new PHPMailer();    //utworzenie nowej klasy phpmailer
$mail->CharSet = 'ISO-8859-1';

$from = $_POST['email'];
$fullName = $_POST['fullName'];
$contentMessage = $_POST['content'];

$mail->From = "no-reply@kobyone.com";    //adres e-mail użyty do wysyłania wiadomości
$mail->FromName = $fullName;    //imię i nazwisko lub nazwa użyta do wysyłania wiadomości
$mail->AddReplyTo($from); //adres e-mail nadawcy oraz jego nazwa
                                             //w polu "Odpowiedz do"  
$mail->Host = "kobyone.com";    //adres serwera SMTP wysyłającego e-mail
$mail->Mailer = "smtp";    //do wysłania zostanie użyty serwer SMTP
$mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
$mail->Username = "no-reply@kobyone.com";    //nazwa użytkownika do skrzynki e-mail
$mail->Password = "Kl83tZfk2o9x%Sfsm";    //hasło użytkownika do skrzynki e-mail
$mail->SMTPSecure = "ssl";
$mail->Port = 465; //port serwera SMTP zależny od konfiguracji dostawcy usługi poczty
$mail->Subject = "Formularz kontaktowy";    //Temat wiadomości, można stosować zmienne i znaczniki HTML
$mail->Body = $contentMessage;    //Treść wiadomości, można stosować zmienne i znaczniki HTML     
$mail->AddAddress("pawel.pater@nanospacelab.com","test");    //adres skrzynki e-mail oraz nazwa
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