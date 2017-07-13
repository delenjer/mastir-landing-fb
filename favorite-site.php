<?php

 

  $sendto = "shumlianskiia@gmail.com";

  $userlink = $_POST['userLink'];

  $usertel = $_POST['userTel'];

  $useremail = $_POST['userEmail'];

  $text = $_POST['text'];



// Формирование заголовка письма

  $subject = "Хочу сайт лучше ML";

  $headers = "From: " . strip_tags($sendto) . "\r\n";

  $headers .= "Reply-To: ". strip_tags($sendto) . "\r\n";

  $headers .= "MIME-Version: 1.0\r\n";

  $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

 

// Формирование тела письма

  $msg = "<html><body style='font-family:Arial,sans-serif;'><h1>Заполнена контактная форма ".$title." с RUS версии сайта</h1>\r\n";

  $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";

  $msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";

  $msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";

  $msg .= "<p><strong>Почьта:</strong> ".$useremail."</p>\r\n";

  $msg .= "<p><strong>Ссылка на желаемый сайт:</strong> ".$userlink."</p>\r\n";

  $msg .= "</body></html>";

 

// отправка сообщения

  if(@mail($sendto, $subject, $msg, $headers)) {

  echo '<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <title>Спасибо!</title>

  <link href="css/thx.css" rel="stylesheet">

</head>



<body style="padding: 50px;">

  <h1 style="text-align: center; font-size: 48px; color: #2f4f4f;">Спасибо, форма отправлена!<br>В ближайшее время мы свяжемся с Вами!</h1>

</body>

</html>';

  } else {

  echo '<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <title>Спасибо!</title>

</head>

<body style="padding: 50px;">

  <h1 style="text-align: center; font-size: 48px; color: #2f4f4f;">К сожалению форма не была отправлена.<br>Пожалуйста, попробуйте еще раз!</h1>

</body>

</html>';

  }

 

?>



    <script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script>
    <script src="https://connect.facebook.net/signals/config/1698004623777008?v=2.7.18" async=""></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-34046714-2', 'auto');
      ga('send', 'pageview');
    </script>

    <!-- VK -->
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=AmiqdxzF5sYDOJMBz1GN1ygriqqNl/CKF6hq7goS8TE*ZmMdh*bfx2hbODzX2XaxcHTYIgdg2lVZGp7CFzdM7HQS6D/mFwc6s1FIJN6dR6nYa88HjSGrJKTOyz6QQTxu4/U*QH9Mv/X4nUmqYqudWIwpk71tOGPeGW9CBrUHmMU-&pixel_id=1000096152';
    </script>
    
    <!-- Facebook -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1698004623777008'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <noscript>&lt;img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1698004623777008&amp;ev=PageView&amp;noscript=1"
        /&gt;
    </noscript>