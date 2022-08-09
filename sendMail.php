<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$messageContent = $_POST['content'];

if (!empty($fullName) || !empty($email) || !empty($messageContent)) {
    
    mb_language("uni");
    mb_internal_encoding("UTF-8");

mb_send_mail()
}

?>