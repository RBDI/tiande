<?
  include "config.php";

  $url = parse_url($_SERVER['REQUEST_URI']);
  $line=$url['path'];
  
  $i=0;
  while ($line) {
    $pos = strpos ($line, "/");
    if ($pos!==false) {
      if ($pos>0) $URL_PARTS[$i] =  trim(substr ($line, 0, $pos ));
      $line = substr_replace ($line, "", 0, $pos+1 ) ;
    } else {
      $URL_PARTS[$i]=$line;
      $line='';
    }
    if ($pos>0) $i++;
  }

$slug=$URL_PARTS[0];

$land_data = mysql_fetch_array(mysql_query("SELECT * FROM `mylp_pages` WHERE url='$slug'"));
$page_id=$land_data['ID'];

$l_title=$land_data['title'];
$l_name=$land_data['name'];
$l_template = $land_data['template'];
$l_phone=$land_data['phone'];
$l_email=$land_data['email'];

global $content;

$sql="SELECT * FROM `mylp_blocks` WHERE page_id='$page_id' ORDER BY `order` ASC,`ID` ASC"; 
$result = mysql_query($sql) or die(mysql_error());
while ($row=mysql_fetch_array($result)) {
  $content[$row['parent']][$row['ID']]=$row;    
}

function next_block ($parent=0)
{
  global $content;
  global $current_block;
  if (!$current_block[$parent]) $current_block[$parent]=current($content[$parent]);
  else $current_block[$parent]=next($content[$parent]);  
}

function get_block_id ($parent=0){
  global $current_block;
  return $current_block[$parent]['ID'];
}

function get_block_title ($parent=0)
{
  global $current_block; 
  print $current_block[$parent]['title'];
}
function get_block_text ($parent=0)
{
  global $current_block;
  print $current_block[$parent]['text'];
}
function get_block_image ($parent=0)
{
  global $current_block; 
  print '/simg/'.$current_block[$parent]['background'];
}

function get_catch ($parent=0){
  global $current_block;
  $x=$current_block[$parent]['catch'];
  if ($x==1){
    $out='
<div class="well" align="center">
            <h3>Запишитесь на семинар</h3>
           <div style="margin:7px 0px; font-size:20px;"><span class="glyphicon glyphicon-chevron-down"></span> </div>
<form class="form-horizontal" role="form">
  <div class="form-group">
    <div class="col-md-12">
      <input type="text" class="form-control" id="inputName_order'.$id.'" placeholder="Введите ваше имя">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-12">  
  <input type="email" class="form-control" id="inputContact_order'.$id.'" placeholder="Ваш телефон">
    </div>
  </div>  
  <div class="form-group">
    <div class="col-md-12">  
  <button type="button" class="btn btn-success btn-lg myfont" onclick="return send_order('."'order".$id."'".')" style="width:100%">Отправить заявку</button>
    </div>
  </div>  
</form>
Конфиденциальность ваших данных гарантируется.            
          </div>
    ';
  }
  elseif ($x==2){
    $out='<button type="button" class="btn btn-success btn-md myfont" data-toggle="modal" href="#zayavka">Выбрать <i class="fa fa-angle-double-right"></i></button>';
  }
  
  print $out;
}

$t_path="template/".$l_template;

include $t_path."/index.php";
?>