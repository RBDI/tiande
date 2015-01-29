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
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-2 logo" align="center">
        <a href=""><img src="<? print get_block_image();  ?>" class="img-responsive" alt="Аренда плазменных панелей" title="Аренда плазменных панелей"></a>
        <? get_block_title(); ?>
      </div>
      <div class="col-md-7 sc" align="center">
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
<div class="block1" style="background-image:url(<? print get_block_image();  ?>)">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h1><? get_block_title(); ?></h1>
        <div class="row">
          <? next_block(get_block_id()); ?>
          <div class="col-sm-6">
            <img src="<? print get_block_image(get_block_id());  ?>" class="img-responsive">
            <p class="subh"><? get_block_title(get_block_id()); ?></p>
          </div>
          <? next_block(get_block_id()); ?>
          <div class="col-sm-6 arr" style="background-image:url(<? print get_block_image(get_block_id());  ?>)"><h3><? get_block_title(get_block_id()); ?></h3></div>
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
    <div class="row">
      <? next_block(get_block_id()); ?>
      <div class="col-sm-6">
        <h3><? get_block_title(get_block_id()); ?></h3>
        <? get_catch(get_block_id()); ?>
        <p><? get_block_text(get_block_id()); ?></p>
        <script src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=Yh6Smhl1ZoFXhDbBrPBLgOj-HpAgaJtQ&amp;width=100%&amp;height=200" charset="utf-8"></script></p>

      </div>
      <? next_block(get_block_id()); ?>
      <div class="col-sm-6">
        <h3><? get_block_title(get_block_id()); ?></h3>
        <? get_catch(get_block_id()); ?>
        <p><? get_block_text(get_block_id()); ?></p>
        <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=w3bi8FhXVyVgP6Khbb14mFB0q080xe6b&#038;width=100%&#038;height=200"></script>
      </div>
    </div>
    <div class="row">
      <? next_block(get_block_id()); ?>
      <div class="col-sm-6">
        <h3><? get_block_title(get_block_id()); ?></h3>
        <? get_catch(get_block_id()); ?>
        <p><? get_block_text(get_block_id()); ?></p>
        <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=UEdNbE24_EuxiLWnCfwzM3PlTT-ICNRQ&#038;width=100%&#038;height=200"></script>
      </div> 
      <? next_block(get_block_id()); ?>
      <div class="col-sm-6">
        <h3><? get_block_title(get_block_id()); ?></h3>
        <? get_catch(get_block_id()); ?>
        <p><? get_block_text(get_block_id()); ?></p>
        <iframe src="http://tiandespb.ru/contacts/showmap/153299/1" id="ymap-1" style="width:100%;height:200px;" marginheight="0" marginwidth="0" frameborder="0" data-host="nethouse.ru" data-lang="ru_RU"></iframe>
      </div> 
    </div>
    <div class="row">          
          <div class="col-sm-6">
            <img src="/simg/ph1.jpg" class="img-responsive">
          </div>
          <div class="col-sm-6">
            <img src="/simg/ph2.jpg" class="img-responsive">
          </div>
    </div>
    <div class="row" style="margin-top:40px;">
      <div class="col-sm-6 col-sm-offset-3">
        <? get_form(); ?>
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