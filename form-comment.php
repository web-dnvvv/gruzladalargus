<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Страница для обратной связи с разработчиками сайта">
<meta name="keywords" content="грузоперевозки, связь, сообщение, Пермь, Лада, Ларгус">
<meta http-equiv="content-language" content="ru"> <!--язык-->

<title>Обращение к разработчикам сайта</title>


<link href="style.css" media="screen" rel="stylesheet" type="text/css">
<link href="mobile.css" media="handheld, (max-width:600px)" rel="stylesheet" type="text/css"> <!--для мобильных и шириной менее 480 px другая таблица стилей (адаптивный дизайн)-->

</head>
<body class="body">
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(56079886, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56079886" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<div class="container-form">
<form action="send_communication.php" method="post" name="comment" class="form-comment">
<a href="index.php"><p>Вернуться на сайт</p></a>
        	<h2 class="form-comment-title">Здесь можно отправить сообщение разработчикам сайта</h2>        
            <label>Введите ваше имя:</label> 
            <input name="name" type="text"  pattern="\s*[А-Я,а-я,A-Z,a-z]{2,15}\s*[А-Я,а-я,A-Z,a-z]*" required class="form-comment-input"  maxlength="40"></<br>
           <label>Текст сообщения</label>
           <textarea class="form-comment-letter" name="letter" cols="40" rows="10"  required maxlength="1000"></textarea><br>
            <label>Ваш email:</label> <input name="email" type="email" class="form-comment-input" required  maxlength="50"><br>
            <input name="submit" type="submit" class="button_submit" value="Отправить">
  
       </form>

</div>       
<script  src="js/nav.js"></script>

</body>
