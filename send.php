<meta charset="utf-8">

<?php 
$start = $_POST['start'];
$finish = $_POST['finish'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

/*преоборазование нежелательных знаков*/
$start = htmlspecialchars($start);
$finish = htmlspecialchars($finish);
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$comment = htmlspecialchars($comment);

/*декодируем url если пользователь  добавил адрес*/
$start = urldecode($start);
$finish = urldecode($finish);
$name = urldecode($name);
$phone = urldecode($phone);
$comment = urldecode($comment);

/*удаляем пробелы в начале и в конце*/
$start = trim($start);
$finish = trim($finish);
$name = trim($name);
$phone = trim($phone);
$comment = trim($comment);

/*реквизиты адресата*/
$address = "web-dnvvv@yandex.ru, pavloveduard7@gmail.com";
$subject = "новая заявка с сайта";
$messege = "Заявка от заказчика  - ".$name."\n Откуда: ".$start."\n Куда: ".$finish."\nКомментарий: ".$comment."\n Телефон ".$phone."";


/*echo $start, $finish;*/

mail($address,$subject,$messege,"Content-type:text/plain; charset=UTF-8\r\n");

?>

<!--Сообщение об отправки заявки-->
<script>alert('Ваше заявка успешно отправлена! \n Вам перезвонят в течении 30 минут.')</script>;


<?php

echo "<html><head>
				<meta http-equiv='Refresh' content='0; URL=index.php'>
			</head></html>";


?>