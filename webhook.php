<?php
$input = file_get_contents('php://input');
$data = json_decode($input);
$chat_id = $data->message->chat->id;
$text = $data->message->text;
$text = $text . " Webhook Reply";
$token = '8144540315:AAEobssoOo_knAb4_EVn1eImVPA_xLFbGCc';
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text);
file_get_contents($url);
?>
