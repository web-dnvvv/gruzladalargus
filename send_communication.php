<meta charset="utf-8">

<?php 
$name = $_POST['name'];
$letter = $_POST['letter'];
$email = $_POST['email'];

/*преоборазование нежелательных знаков*/
$name = htmlspecialchars($name);
$letter = htmlspecialchars($letter);
$email = htmlspecialchars($email);

/*декодируем url если пользователь  добавил адрес*/
$name = urldecode($name);
$letter = urldecode($letter);
$email = urldecode($email);

/*удаляем пробелы в начале и в конце*/
$name = trim($name);
$letter = trim($letter);
$email = trim($email);

/*реквизиты адресата*/
$address = "web-dnvvv@yandex.ru";
$subject = "новая заявка с сайта";
$messege = "Сообщение разрабочикам сайта от - ".$name."\n Сообшение: ".$letter."\n email: ".$email."";


/*echo $start, $finish;*/

mail($address,$subject,$messege,"Content-type:text/plain; Charset=UTF-8\r\n");

?>

<!--Сообщение об отправки заявки-->
<script>alert('Ваше сообщение успешно отправлено разработчикам сайта!')</script>;


<?php

echo "<html><head>
				<meta http-equiv='Refresh' content='0; URL=index.php'>
			</head></html>";


?>