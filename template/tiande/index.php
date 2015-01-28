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
<? next_block(); ?>
<div class="big_bg" style="background-image:url(<? print get_block_image();  ?>)">
<!-- Header -->
<header>
  <div class="container">
    <div class="row">
      <div class="col-md-3" align="center">
        <a href=""><img src="img/logo.jpg" class="img-responsive" alt="Аренда плазменных панелей" title="Аренда плазменных панелей"></a>        
      </div>
      <div class="col-md-3 col-md-offset-6" align="center">
        <div class="phone myfont"><? print $l_phone; ?></div>
        <a data-toggle="modal" href="#Backcall">Оставьте номер</a> и мы вам перезвоним!
      </div>
    </div>
  </div>
  <h1 align="center" style="margin-top:110px;"><? get_block_title(); ?></h1>
  <center><? get_block_text(); ?></center>
</header>
<!-- end of header -->

</div>
<!-- end of First screen -->
<? next_block(); ?>
<div class="block2">
  <div class="container">
    <h2><? get_block_title(); ?></h2>
    <? get_block_text(); ?>
  </div>
</div>

<? next_block(); ?>
<div class="block3">
  <div class="container">
    <h2><? get_block_title(); ?></h2>
    <? get_block_text(); ?>
    <div class="row">
      <? next_block(get_block_id()); ?>
      <div class="col-sm-4">
        <h3><? get_block_title(get_block_id()); ?></h3>
        <? get_block_text(get_block_id()); ?>
      </div>
      <? next_block(get_block_id()); ?>
      <div class="col-sm-4">
        <h3><? get_block_title(get_block_id()); ?></h3>
        <? get_block_text(get_block_id()); ?>
      </div>
      <? next_block(get_block_id()); ?>
      <div class="col-sm-4">
        <h3><? get_block_title(get_block_id()); ?></h3>
        <? get_block_text(get_block_id()); ?>
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