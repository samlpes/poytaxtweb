<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($_POST['email'])){
  if (isset($_POST['email'])) {
    if (!empty($_POST['email'])){
  $email = strip_tags($_POST['email']);
  $emailFieldset = "Адрес отправителя: ";
    }
  }
}
if (!empty($_POST['phone'])){
  if (isset($_POST['phone'])) {
    if (!empty($_POST['phone'])){
  $phone = strip_tags($_POST['phone']);
  $phoneFieldset = "Контакт: ";
    }
  }
}
if (!empty($_POST['name'])){
  if (isset($_POST['name'])) {
    if (!empty($_POST['name'])){
  $name = strip_tags($_POST['name']);
  $nameFieldset = "Имя отправителя: ";
    }
  }
}
if (!empty($_POST['content'])){
  if (isset($_POST['content'])) {
    if (!empty($_POST['content'])){
  $content = strip_tags($_POST['content']);
  $contentFieldset = "Содержание: ";
    }
  }
}



$token = "5123724217:AAGHqT7Nr-AESkP2_D8hCIU_gpn_URsRFaY";
$chat_id = "-622872987";
$arr = array(
  $emailFieldset => $email,
  $phoneFieldset => $phone,
  $nameFieldset => $name,
  $contentFieldset => $content
);
$txt = '';
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
header('Location: /?route=contact');
}
?>