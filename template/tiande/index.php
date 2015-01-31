<!DOCTYPE html>
<html>
  <head>
    <title><? print $l_title; ?></title>
	<meta name="description" content="На нашем сайте вы можете сделать заказ на аренду плазменных панелей и сопутствующего оборудования. Все плазменные панели новые и от ведущих производителей, доставка и монтаж по Москве бесплатно." />
	<meta name="keywords" content="аренда плазмы, аренда плазменных панелей Москва, аренда плазменных панелей" />

    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="/css/font-awesome.css" rel="stylesheet" media="screen">
    <link href="<? print $t_path; ?>/css/style.css" rel="stylesheet" media="screen">

    <!-- <link rel="icon" type="image/png" href="favicon.png">    
    <link rel="shortcut icon" href="favicon.png" type="image/png" />  -->
    <link rel="shortcut icon" href="images/favicon.ico"/>
   
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,300,400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

  </head>
<body>
  <? include "modals.php"; ?>


<!-- Header -->
<? next_block(); ?>
<div class="block1" style="background-image:url(/simg/block1_background_.jpg)">
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-2 logo" align="center">
        <a href=""><img src="<? print get_block_image();  ?>" class="img-responsive"></a>
        <? get_block_title(); ?>
      </div>
      <div class="col-md-7 sc myfont" align="center">
        <? get_block_text(); ?>
      </div>
      <div class="col-md-3" align="center">
        <div class="phone myfont"><? print $l_phone; ?></div>
        <!-- <a data-toggle="modal" href="#Backcall">Оставьте номер</a> и мы вам перезвоним! -->
        <a data-toggle="modal" href="#Backcall" class="btn btn-success myfont"><i class="fa fa-phone"></i> Заказать обратный звонок</a>
      </div>
    </div>
  </div>
  
  
</header>
<!-- end of header -->

<!-- First screen -->
<? next_block(); ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h1><? get_block_title(); ?></h1>
        <div class="row">
          <? next_block(get_block_id()); ?>
          <div class="col-sm-7 col-sm-offset-2">
            <img src="<? print get_block_image(get_block_id());  ?>" class="img-responsive">
            <p class="subh"><? get_block_title(get_block_id()); ?></p>
          </div>
          <? next_block(get_block_id()); ?>
          <!-- <div class="col-sm-6 arr" style="background-image:url(<? print get_block_image(get_block_id());  ?>)"><h3><? get_block_title(get_block_id()); ?></h3></div> -->
           <div class="col-sm-3 arr" style="background-image:url(/simg/arr2.png);  ?>)"></div>
        </div>
        
        <!-- <h3><? get_block_text(); ?></h3> -->
      </div>
      <div class="col-sm-4">
        <? get_form(); ?>
      </div>      
    </div>      
  </div>
</div>
<!-- end of First screen -->

<? next_block(); ?>
<div class="block2">
  <div class="container">
    <h2><? get_block_title(); ?></h2>
    <p class="info"><? get_block_text(); ?></p>

    <div class="row adress">
      <? next_block(get_block_id()); ?>
      <div class="col-sm-6">
        <h3><? get_block_title(get_block_id()); ?></h3>        
        
        <div class="row">
          <div class="col-sm-8">
            <p><? get_block_text(get_block_id()); ?></p>
            <div class="metro"> 50 метров от <img src="/simg/spb_metro_logo.svg"></div>
          </div>
          <div class="col-sm-4">
            <? get_catch(get_block_id()); ?>
          </div>
        </div>  
      </div>
      <div class="col-sm-6">                
        <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=8pxL4RLveNUTirSd7vskIOpGZ4afjqU4&width=100%&height=200"></script>
      </div>
    </div>
    <div class="row adress">
      <? next_block(get_block_id()); ?>
      <div class="col-sm-6">
        <h3><? get_block_title(get_block_id()); ?></h3>
        
        <div class="row">
          <div class="col-sm-8">
            <p><? get_block_text(get_block_id()); ?></p>
            <div class="metro"> 100 метров от <img src="/simg/spb_metro_logo.svg"></div>
          </div>
          <div class="col-sm-4">
            <? get_catch(get_block_id()); ?>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=IMG5o7h5DoGhtV9Mt33LwXok7y4y9sH6&width=100%&height=200"></script>        
      </div>
    </div>

    <div class="row adress">
      <? next_block(get_block_id()); ?>
      <div class="col-sm-6">
        <h3><? get_block_title(get_block_id()); ?></h3>        
        
        <div class="row">
          <div class="col-sm-8">
            <p><? get_block_text(get_block_id()); ?></p>
            <div class="metro"> 100 метров от <img src="/simg/spb_metro_logo.svg"></div>
          </div>
          <div class="col-sm-4">
            <? get_catch(get_block_id()); ?>
          </div>
        </div>        
      </div>
      <div class="col-sm-6">
        <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=rfesh9mvoHw1cmU60pn11dQ2-lmAjtuD&width=100%&height=200"></script>
      </div>
    </div>  
    <div class="row adress">    
      <? next_block(get_block_id()); ?>
      <div class="col-sm-6">
        <h3><? get_block_title(get_block_id()); ?></h3>                
        <div class="row">
          <div class="col-sm-8">
            <p><? get_block_text(get_block_id()); ?></p>
            <!-- <div class="metro"> 100 метров от <img src="/simg/spb_metro_logo.svg"></div> -->
          </div>
          <div class="col-sm-4">
            <? get_catch(get_block_id()); ?>
          </div>
        </div>  
      </div> 
      <div class="col-sm-6">
        <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=Tt0aIuwlYSPbEgY63CWqiRIrMphjhhll&width=100%&height=200"></script>
      </div>
    </div>

    <div class="row" style="margin-top:20px;">
          <h3>В наших сервисных центрах всегда уютная атмосфера, а дружелюбные сотрудники<br> ответят на Ваши вопросы и помогут в выборе продукта!</h3>

          <div class="col-sm-4">
            <img src="/simg/ph1.jpg" class="img-responsive img-circle">
          </div>
          <div class="col-sm-4">
            <!-- <img src="/simg/ph2.jpg" class="img-responsive img-rounded"> -->
            <img src="/simg/girlx.jpg" class="img-responsive img-circle">
          </div>
          <div class="col-sm-4">
            <img src="/simg/ph2.jpg" class="img-responsive img-circle">
          </div>
    </div>
    <h3>Выбирая наши Сервисные и Дилерские Центры у Вас:<br>
- нет рисков,  нет обязательств, продукция сертифицирована и гарантия возврата денег!</h3>
  </div>
</div>

<div class="block4">
  <div class="container" >
    <div class="row">
      <div class="col-sm-3">
        <img src="/simg/courier.png" class="img-responsive">
      </div>
      <div class="col-sm-9">
        <h2  style="margin-top:40px;">Не нашли удобный для Вас адрес?<br>
       Наш курьер быстро доставит Вам заказ!</h2>
        <a class="btn btn-success btn-lg myfont" target="_blank" href="http://rustiande.ru">Заказать <i class="fa fa-angle-double-right"></i></a>
      </div>    
    </div>
  </div>
</div>

<div class="block2">
  <div class="container" align="center">
    <h2 style="font-size:60px;">Стать умным покупателем прямо сейчас!</h2>
    <div class="row"  style="margin-top:40px;">
      <div class="col-sm-4">
        <img src="/simg/x1.jpg" class="img-responsive"  style="margin-top:40px;">
      </div>
      <div class="col-sm-4">
        <? get_form(); ?>
      </div>
      <div class="col-sm-4">
        <img src="/simg/x2.jpg" class="img-responsive"  style="margin-top:40px;">
      </div>      
    </div>
  </div>
</div>

<? next_block(); ?>
<div class="block3" style="background-image:url(<? print get_block_image();  ?>)">
  <div class="container">
    <h2><? get_block_title(); ?></h2>
    <p class="info"><? get_block_text(); ?></p>
    <div class="row">
      <? next_block(get_block_id()); ?>
      <div class="col-sm-4">
        <figure class="thumbnails"><i  >%</i></figure>
        <h3><? get_block_title(get_block_id()); ?></h3>
        <? get_block_text(get_block_id()); ?>        
      </div>
      <? next_block(get_block_id()); ?>
      <div class="col-sm-4">
        <figure class="thumbnails"><i class="fa fa-thumbs-up"></i></figure>
        <h3><? get_block_title(get_block_id()); ?></h3>
        <? get_block_text(get_block_id()); ?>        
      </div>
      <? next_block(get_block_id()); ?>
      <div class="col-sm-4">
        <figure class="thumbnails"><i class="fa fa-heart"></i></figure>
        <h3><? get_block_title(get_block_id()); ?></h3>
        <? get_block_text(get_block_id()); ?>        
      </div> 
    </div>
    <div class="row" style="margin-top:20px;">
      <div class="col-sm-6 col-sm-offset-3">
        <? get_form(); ?>
      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<footer>
  <div style="float:right;"><a href="http://rbdi.ru" target="_blank">Создание сайта</a> - <strong>RBDI</strong></div>
  <? print date("Y"); ?> &copy; <? print $l_title; ?><br><? print $l_phone; ?><br>
</footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    
    <script src="<? print $t_path; ?>/js.js"></script>

  </body>
</html>	