<?php
$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars($_POST['phone']));
$info = stripslashes(htmlspecialchars($_POST['info']));
$message = "Телефон: {$phone}%0A{$info}"; 
$chat_id = "-1002178646676"; // id чата 
$sendToTelegram = fopen("https://api.telegram.org/bot6962137833:AAEFYiC6zg78FB543kZKBgByqbqc2WNJRt8/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}","r");
exit;
?>

