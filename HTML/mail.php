<?php session_start(); ?>
<!doctype html>
<html lang="ru" style="height:100%;">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Спасибо! Данные отправлены</title>
</head>
<body style="font-family:Tahoma; height:100%; font-size:30px;">
<div style="border:10px solid #ced8cc; background:rgba(255,255,255,0.7); max-width:600px; margin: 0 auto; padding: 20px; margin-top: 40px; text-align:center;"><b style="font-size:40px;">Спасибо за заявку!</b> <br>В скором времени мы свяжемся с Вами!</div>
</body>
</html>	
<?php
if (isset($_POST["time_spend"])){
	
$phone = trim($_POST["phone"]);
$name = trim($_POST["name"]);
$forma = trim($_POST["forma"]);
$order_type = trim($_POST["order_type"]);
$email = trim($_POST["email"]);
$time_spend = trim($_POST["time_spend"]);


require './PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$mail->setFrom('info@media-group.biz','Lego Mindstorm');
//$mail->addAddress('novoshickiy@gmail.com', 'Роман'); 
$mail->addAddress('css@media-group.biz');  
$mail->addAddress('z-7mark@mail.ru', 'Иван'); 
//$mail->addAddress('affcontext@mail.ru'); 
$mail->addAddress('tiunow@alcom55.ru');

$mail->Subject = 'Заявка с сайта Lego Mindstorm ('.$forma.')'; // тема письма
$mail->isHTML(true);

for($ct=0;$ct<count($_FILES['userfile']['tmp_name']);$ct++)
{
    $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['userfile']['name'][$ct]));
    $filename =$_FILES['userfile']['name'][$ct];
    if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
        $mail->addAttachment($uploadfile, $filename);
    }
}


$message = "<table>";
$amo_message = '';



$comment[] = "";
if(isset($_POST['name'])){
$message .= '<tr><td>Имя:</td><td>'.trim($_POST['name']).'</td></tr>';
$amo_message .='Имя: '.trim($_POST['name']).PHP_EOL;
}
if(isset($_POST['phone'])){
$message .= '<tr><td>Имя:</td><td>'.trim($_POST['phone']).'</td></tr>';
$amo_message .='Телефон: '.trim($_POST['phone']).PHP_EOL;
}
if(isset($_POST['email'])){
$message .= '<tr><td>Имя:</td><td>'.trim($_POST['email']).'</td></tr>';
$amo_message .='E-mail: '.trim($_POST['email']).PHP_EOL;
}
if(isset($_POST['question'])){
$message .= '<tr><td>Вопрос:</td><td>'.trim($_POST['question']).'</td></tr>';
$amo_message .='Вопрос: '.trim($_POST['question']).PHP_EOL;
}
if(isset($_POST['forma'])){
$message .= '<tr><td>Форма:</td><td>'.trim($_POST['forma']).'</td></tr>';
$amo_message .='Форма: '.trim($_POST['forma']).PHP_EOL;
}
if(isset($_POST['time_spend'])){
$message .= '<tr><td>Время на сайте:</td><td>'.trim($_POST['time_spend']).'</td></tr>';
$amo_message .='Время на сайте: '.trim($_POST['time_spend']).PHP_EOL;
}
$message .= "<tr><td colspan='2'>UTM метки</tr>";

if((isset($_POST['utm_source'])) && (trim($_POST['utm_source']) !== '')){
$message .= '<tr><td>utm_source:</td><td>'.trim($_POST['utm_source']).'</td></tr>';
$amo_message .='utm_source: '.trim($_POST['utm_source']).PHP_EOL;
}
if((isset($_POST['utm_medium'])) && (trim($_POST['utm_medium']) !== '')){
$message .= '<tr><td>utm_medium:</td><td>'.trim($_POST['utm_medium']).'</td></tr>';
$amo_message .='utm_medium: '.trim($_POST['utm_medium']).PHP_EOL;
}
if((isset($_POST['utm_campaign'])) && (trim($_POST['utm_campaign']) !== '')){
$message .= '<tr><td>utm_campaign:</td><td>'.trim($_POST['utm_campaign']).'</td></tr>';
$amo_message .='utm_campaign: '.trim($_POST['utm_campaign']).PHP_EOL;
}
if((isset($_POST['utm_term'])) && (trim($_POST['utm_term']) !== '')){
$message .= '<tr><td>utm_term:</td><td>'.trim($_POST['utm_term']).'</td></tr>';
$amo_message .='utm_term: '.trim($_POST['utm_term']).PHP_EOL;
}
if((isset($_POST['utm_placement'])) && (trim($_POST['utm_placement']) !== '')){
$message .= '<tr><td>utm_placement:</td><td>'.trim($_POST['utm_placement']).'</td></tr>';
$amo_message .='utm_placement: '.trim($_POST['utm_placement']).PHP_EOL;
}
if((isset($_POST['utm_creative'])) && (trim($_POST['utm_creative']) !== '')){
$message .= '<tr><td>utm_creative:</td><td>'.trim($_POST['utm_creative']).'</td></tr>';
$amo_message .='utm_creative: '.trim($_POST['utm_creative']).PHP_EOL;
}
if((isset($_POST['utm_content'])) && (trim($_POST['utm_content']) !== '')){
$message .= '<tr><td>utm_content:</td><td>'.trim($_POST['utm_content']).'</td></tr>';
$amo_message .='utm_content: '.trim($_POST['utm_content']).PHP_EOL;
}

if(isset($_POST['mobile'])){
if($_POST['mobile'] == "true")
{
	$message .= '<tr><td>Мобильный телефон:</td><td>Да</td></tr>';
	$amo_message .='Мобильный телефон: Да'.PHP_EOL;;
}
else
{
	$message .= '<tr><td>Мобильный телефон:</td><td>Нет</td></tr>';
	$amo_message .='Мобильный телефон: Нет'.PHP_EOL;;
}
}

if(isset($_SESSION['referer'])){
$message .= '<tr><td>Реферальный хвост:</td><td>'.$_SESSION['referer'].'</td></tr>';
$amo_message .='Реферальный хвост: '.$_SESSION['referer'].PHP_EOL;

try {
  $parsed = parse_url($_SESSION['referer']);
  $query = array_map(function($el){return explode('=', $el);}, explode('&', $parsed['query']));
  $object = array();
  foreach($query as $el){
	$object[$el[0]] = $el[1];
  }
  if ($parsed['host'] == 'yandex.ru') {
	$search_string = urldecode($object['text']);
	$message .= '<tr><td>Точный запрос из Яндекса:</td><td>'.$search_string.'</td></tr>';
	$amo_message .='Точный запрос из Яндекса: '.$search_string.PHP_EOL;
  }
} catch(Exception $e) {}
}

try {
if ($_SERVER['REMOTE_ADDR']) {
  require_once './sxgeo/SxGeo.php';
  $geo = new SxGeo('./sxgeo/SxGeoCity.dat');
  $city = $geo->getCity($_SERVER['REMOTE_ADDR']);
  $message .= "<tr><td>Город: </td><td>{$city['city']}</td></tr>";
  $amo_message .='Город: '.$city['city'].PHP_EOL;
}
} catch(Exception $e){}

$message .= "</table>";

$mail->Body = $message;

if ($time_spend  > 7){
	$mail->send();
	require "amo.php";
}

}?>