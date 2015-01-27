<?
$title='Тианде XXXX suhfskjf hksjf ';
 
?>
<!DOCTYPE html>
<html>
  <head>
    <title><? print $title; ?></title>
	<meta name="description" content="На нашем сайте вы можете сделать заказ на аренду плазменных панелей и сопутствующего оборудования. Все плазменные панели новые и от ведущих производителей, доставка и монтаж по Москве бесплатно." />
	<meta name="keywords" content="аренда плазмы, аренда плазменных панелей Москва, аренда плазменных панелей" />

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">

    <link rel="icon" type="image/png" href="favicon.png">    
    <link rel="shortcut icon" href="favicon.png" type="image/png" /> 
   
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,300,400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

  </head>
<body>
  <? include "modals.php"; ?>

<!-- First screen -->
<div class="big_bg">
<!-- Header -->
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-3" align="center">
        <a href=""><img src="img/logo.jpg" class="img-responsive" alt="Аренда плазменных панелей" title="Аренда плазменных панелей"></a>
        <!-- Магазин тренажеров -->
      </div>
      <div class="col-md-3 col-md-offset-6" align="center">
        <div class="phone myfont">+7 495 760-98-07</div>
        <a data-toggle="modal" href="#Backcall">Оставьте номер</a> и мы вам перезвоним!
      </div>
    </div>
  </div>
  <h1 align="center" style="margin-top:110px;">Аренда плазменных<br> панелей</h1>    
</header>
<!-- end of header -->
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="action">
          <h2><strong>Акция</strong> до <span style="text-decoration:underline;">25 февраля</span> <img src="img/2plz.png" width="150"></h2>
          <div class="row">
            <div class="b1">
              <span style="font-size:60px; line-height: 0px; top: 8px; position: relative;">2</span> плазменных панели Samsung 51" по цене <span style="font-size:55px; line-height: 0px; top: 8px; position: relative;">1</span>
            </div>
            <div class="b2">
            </div>
            <div class="b3">
              <div style="font-size: 50px; line-height: 40px;">4000</div>
              руб./сутки
              <button type="button" class="btn btn-success btn-lg myfont" data-toggle="modal" style="margin-top: 10px;" href="#zayavka">Заказать <span style="font-size:0.7em;" class="glyphicon glyphicon-play"></span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

   
  </div>

</div>
<!-- end of First screen -->

<div class="block2">
  <div class="container">
    <h2>Арендуйте плазменную панель у нас!</h2>
    <div class="row">
      <div class="col-sm-3">
        <figure class="thumbnails"><i class="fa fa-star"></i></figure>
        <h3>Только новые панели от ведущих производителей</h3>
      </div>    
      <div class="col-sm-3">
        <figure class="thumbnails">
          <img src="img/full_hd.png" style="margin-top:35px;">
        </figure>
        <h3>Поддержка формата Full HD</h3>
      </div>
      <div class="col-sm-3">
        <figure class="thumbnails"><i class="fa fa-sitemap"></i></figure>
        <h3>Решение сложных технических задач</h3>
      </div>
      <div class="col-sm-3">
        <figure class="thumbnails"><i class="fa fa-truck"></i></figure>
        <h3>Бесплатная доставка и установка в пределах МКАД</h3>
      </div>
      <div class="col-sm-3">
        <figure class="thumbnails"><i class="fa fa-thumbs-up"></i></figure>
        <h3>Отличный внешний вид</h3>
      </div>
    </div>
  </div>
</div>
<div class="block3">
  <div class="container">
    <h2>Цены на аренду плазмы</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Услуга</th>
          <th>1 день</th>
          <th>2 дня</th>
          <th>3 дня</th>
          <th>4-5 дней</th>           
        </tr>
      </thead>
      <tr><td><strong>Аренда плазменной панели 51" Full HD</strong></td> <td>4000 р.</td> <td>6500 р.</td> <td>10000 р.</td> <td>Звоните</td> </tr>
      <tr><td><strong>Аренда плазменной панели 60" Full HD</strong></td> <td>6000 р.</td> <td>9000 р.</td> <td>12000 р.</td> <td>Звоните</td> </tr>
      <tr><td>Аренда напольной стойки 1,7 м для плазменной панели вместе с плазменной панелью</td> <td>500 р.</td> <td>700 р.</td> <td>1000 р.</td> <td>Звоните</td> </tr>
      <tr><td>Аренда напольной стойки 2,0 м для плазменной панели вместе с плазменной панелью</td> <td>700 р.</td> <td>900 р.</td> <td>1200 р.</td> <td>Звоните</td> </tr>
      <tr><td>Аренда любой напольной стойки без плазменной панели</td> <td>2000 р.</td> <td>2500 р.</td> <td>3000 р.</td> <td>Звоните</td> </tr>
      <tr><td>Кабель HDMI 5-10 м</td> <td>500 р.</td> <td>700 р.</td> <td>1000 р.</td> <td>Звоните</td> </tr>
      <tr><td>Разветвлитель (распределитель) сигнала HDMI</td> <td>1000 р.</td> <td>1500 р.</td> <td>2000 р.</td> <td>Звоните</td> </tr>
      <tr><td>Ноутбук</td> <td>700 р.</td> <td>1000 р.</td> <td>1200 р.</td> <td>Звоните</td> </tr>
      <tr><td>Техник для работы с видео контентом 5-6 часов</td> <td>3000 р.</td> <td>5000 р.</td> <td>7000 р.</td> <td>Звоните</td> </tr>
    </table>
    <center><button type="button" class="btn btn-success btn-lg myfont" data-toggle="modal" href="#zayavka">Сделать заказ <span style="font-size:0.7em;" class="glyphicon glyphicon-play"></span></button></center>
  </div>
</div>
<div class="block4" align="center">
  <h2>Как мы работаем?</h2>
  <div class="container">
    <img src="img/steps.png">
    <div class="row">
      <strong style="font-size:20px;">
      <div class="col-sm-3">1. Вы отправляете заявку с сайта</div>
      <div class="col-sm-3">2. Мы перезваниваем, чтобы подтвердить заказ и уточнить детали</div>
      <div class="col-sm-3">3. В день заказа мы производим полную установку за 2 часа до начала</div>
      <div class="col-sm-3">4. Все настроено и работает на вашем мероприятии!</div>
      </strong>
    </div>

    <div class="row" style="margin-top:30px;">
      <div class="col-sm-6 col-sm-offset-3">
        <? get_form(); ?>
      </div>
    </div>
  </div>
</div>
<div class="block3">
  <h2>Отзывы клиентов</h2>
  <div class="container">
    <div class="row">
      <div class="col-sm-2">
        <img src="img/r2.jpg" class="img-circle img-responsive">
      </div>
      <div class="col-sm-10">
        <h3>Дмитрий Ребиков <small>Директор по развитию компании «Lumex Pro»</small></h3>
        <p>«Ежегодно представляем на московской выставке свою организацию. Для иллюстрации своих товаров каждый раз заказываем плазменные панели в компании arenda-plazma.ru Приятно сотрудничать, потому что всегда все четко и вовремя.  Техника и сотрудники не подводят, ну конечно, всегда отличное качество картинки!! Спасибо, ребята!»</p>
      </div>
    </div>
    <div class="row" style="margin-top:20px; margin-bottom:20px;">
      <div class="col-sm-2">
        <img src="img/r1.jpg" class="img-circle img-responsive">
      </div>
      <div class="col-sm-10">
        <h3>Елена Самочкова <small>Event-менеджер</small></h3>
        <p>«Заказываю ТВ-плазмы на все свои мероприятия! Люблю наблюдать как заботливо перед работой техники их натирают специальными салфетками! Как женщину меня это очень впечатляет! »</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-2">
        <img src="img/r3.jpg" class="img-circle img-responsive">
      </div>
      <div class="col-sm-10">
        <h3>Владимир Ткаченко <small>Организатор курса «Быстрый английский»</small></h3>
        <p>«Позвонил заказать в arenda-plazma.ru заказать проектор и экран для своих занятий, предложили попробовать плазменные панели! Остался очень доволен, так как все выглядит эффектно, весь материал всем виден,  мне удобнее вести занятия,  в качестве бонуса предоставили ноутбук! Надеюсь, что и за этот отзыв получу скидку! ;)»</p>
      </div>
    </div>
  </div>
</div>

<div class="block4">
  
  <div class="container">
    <h2 align="center">Интересные факты о плазменных панелях</h2>
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnails_sm">1</div>
        <h4>Мнения о том, что ионизированные газы внутри плазмы необходимо периодически пополнять, или о том, что их вообще можно пополнить является откровенной ложью! Проще заменить панель!</h4></div>
      <div class="col-sm-4">
        <div class="thumbnails_sm">2</div>
        <h4>На большинстве плазменных панелей срок работы равен 30 000 часам! Мало?  Это равно 10 годам, при условии ежедневного восьми часового просмотра.</h4></div>
      <div class="col-sm-4">
        <div class="thumbnails_sm">3</div>
        <h4>Для того, чтобы сохранить яркость Тв-панели как можно дольше,  рекомендуется не оставляют статичное изображение на экране дольше чем на час.</h4></div>
    </div>
    <h3 align="center">Чтобы узнать более подробную информацию позвоните нам
<div style="font-size:1.5em;">+7 495 760-98-07</div>
 или <a data-toggle="modal" href="#Backcall">закажите обратный звонок</a>.</h3>    
    
    

  </div>
</div>

<div class="block3">
  <div class="container" align="center">
     <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="" style="margin:80px 0px;">
          <figure class="thumbnails"><i class="fa fa-heart"></i></figure>
          <h2 style="margin:0px;">Скидки и бонусы</h2>
          <h3>Постоянным клиентам мы делаем скидки и зачастую бесплатно предоставляем тв плазмы с большей диагональю.</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <? get_form(); ?>
      </div>
    </div>


  <!-- BUY button  -->
  <!-- <button type="button" class="btn btn-success btn-lg myfont" data-toggle="modal" href="#Backcall">Обратный звонок <span style="font-size:0.7em;" class="glyphicon glyphicon-play"></span></button> -->
  
</div>
</div>

<!-- Footer -->
<footer>
  <div style="float:right;"><a href="http://rbdi.ru" target="_blank">Создание сайта</a> - <strong>RBDI</strong></div>
  <? print date("Y"); ?> &copy; Аренда плазменных панелей<br>+7 495 760-98-07 <br>
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t16.2;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
//--></script><!--/LiveInternet-->



<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23699191 = new Ya.Metrika({id:23699191,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23699191" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js.js"></script>

  </body>
</html>	