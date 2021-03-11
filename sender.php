<?php

    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $adress = $_POST['adress'];
    $flat = $_POST['flat'];
    $text = $_POST['text'];
    $order = $_POST['order'];

    $to = "jamilyakudaibergenova94@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$subject = "Заявка c сайта";
	
	$msg="
    Имя: $name /n
    Телефон: $phone /n
    Адрес: $adress /n
    Квартира: $flat /n
    Текст: $text /n
    Заказ: $order";
    mail($to, $subject, $msg, "From: $to ");

    $token = "1505957051:AAFMYDGArf1A173Wzr6llk9gbWuI3_o6jhc";
    $chat_id = "-430231403";
    $arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
    'Адрес: ' => $adress,
    'Квартира/Этаж: ' => $flat,
    'Примечания: ' => $text,
    'Заказ: ' => $order,
    );
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
      };
      $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>

<div class="mail__done">Ваш заказ принят</p>
