<?
session_start();

if ($_POST['login']){
	if ($_POST['login']=='admin'&$_POST['password']=='ghjgecr'){
		$_SESSION['loginXX']=1;
		$maf=1;
	}
}
?>
<html>
<head>
	<link href="/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="/css/font-awesome.css" rel="stylesheet" media="screen">
	<title>MyLP</title>
<style>
	textarea {
		font-size: 12px;
	}
	footer {
		margin-top: 50px;
		/*background: #EEE;*/
		padding: 10px;
		border-top: 1px dashed #DDD;
		text-align: center;
		color: #CCC;
	}
	.sv {
		margin: 10px 0px;
	}
</style>
</head>
<body>
	<div class="container">

<?
if ($_SESSION['loginXX']!=1&&$maf!=1) {
?>

<form action="/ctrl/" method="post" class="form-horizontal" style="margin-top:50px;">
  <div class="form-group">
    <label for="login" class="col-sm-2 control-label">Логин</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="login" name="login" placeholder="Ваш логин">
    </div>
  </div>
  <div class="form-group">
    <label for="login" class="col-sm-2 control-label">Пароль</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" name="password" id="password" placeholder="Ваш пароль">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
      <input type="submit" class="btn btn-default" value="Войти">
    </div>
  </div>	
</form>

<?

	die();
}
?>

<?
include "../config.php";


if ($_GET['removeland']!=''){
	$delete=$_GET['removeland'];
	$query = "DELETE FROM `mylp_pages` WHERE `ID`='$delete'";
	mysql_query($query) or die(mysql_error());

	$query = "DELETE FROM `mylp_blocks` WHERE `page_id`='$delete'";
	mysql_query($query) or die(mysql_error());	
}

if ($_GET['removeblock']!=''){
	$delete=$_GET['removeblock'];
	$query = "DELETE FROM `mylp_blocks` WHERE `ID`='$delete'";
	mysql_query($query) or die(mysql_error());	
}

if ($_GET['rmimg']!=''){
	$block_id=$_GET['rmimg'];

	$block_data = mysql_fetch_array(mysql_query("SELECT background FROM `mylp_blocks` WHERE id=$block_id")); 
	unlink ('../simg/'.$block_data['background']);

	$sql="UPDATE `mylp_blocks` SET `background`='' WHERE ID=$block_id";
	mysql_query($sql) or die(mysql_error());	
}


if ($_FILES['landlogo']) {
	$tmp_file=$_FILES['landlogo']['tmp_name'];
	$result_file=$_FILES['landlogo']['name'];
	$ok=move_uploaded_file($tmp_file, '../simg/'.$result_file);
	$page_id=$_GET['edit'];
	$sql="UPDATE `mylp_pages` SET `logo`='$result_file' WHERE ID=$page_id";
	mysql_query($sql) or die(mysql_error());	
}

	if ($_POST['block_id']!=''){
		$block_id=$_POST['block_id'];
		$tmp_file=$_FILES['userfile']['tmp_name'];
		$result_file=$_FILES['userfile']['name'];

		$ok=move_uploaded_file($tmp_file, '../simg/'.$result_file);
		
		$sql="UPDATE `mylp_blocks` SET `background`='$result_file' WHERE ID=$block_id";
		mysql_query($sql) or die(mysql_error());
	}



if ($_GET['copyland']!=''){
	$copy=$_GET['copyland'];
	$sql="CREATE TEMPORARY TABLE `foo` AS SELECT * FROM `mylp_pages` WHERE `ID`=$copy;";
	mysql_query($sql) or die(mysql_error());
	$sql="UPDATE `foo` SET `ID`=NULL;";
	mysql_query($sql) or die(mysql_error());
	$sql="INSERT INTO `mylp_pages` SELECT * FROM foo;";
	mysql_query($sql) or die(mysql_error());
	$new_page_id=mysql_insert_id();
	$sql="DROP TABLE foo;";
	mysql_query($sql) or die(mysql_error());


	// $sql="CREATE TEMPORARY TABLE `foo` AS SELECT * FROM `mylp_blocks` WHERE `page_id`=$copy;";
	// mysql_query($sql) or die(mysql_error());
	// $sql="UPDATE `foo` SET `ID`=NULL, page_id=$new_page_id;";
	// mysql_query($sql) or die(mysql_error());
	// $sql="INSERT INTO `mylp_blocks` SELECT * FROM foo;";
	// mysql_query($sql) or die(mysql_error());
	
	// $sql="DROP TABLE foo;";
	// mysql_query($sql) or die(mysql_error());

	$sql="SELECT * FROM `mylp_blocks` WHERE page_id=$copy ORDER BY `ID` ASC";	
	$result = mysql_query($sql) or die(mysql_error());	
	while ($row=mysql_fetch_array($result)) {
		$blks[$row['ID']]=$row;
	}
	foreach ($blks as $ID => $value) {
		if ($value['parent']==0){
			$text=$value['text'];
			$title=$value['title'];
			$catch=$value['catch'];
			$page_id=$new_page_id;
			$order=$value['order'];
			$background=$value['background'];	
			$sql="INSERT INTO `mylp_blocks` (`text`,`title`,`catch`,`page_id`,`order`,`background`) VALUES ('$text','$title','$catch','$page_id','$order','$background')";
			mysql_query($sql) or die(mysql_error());
			$new_block_id=mysql_insert_id();

			foreach ($blks as $child_ID => $child_value) {
				if ($child_value['parent']==$ID){
					$text=$child_value['text'];
					$title=$child_value['title'];
					$catch=$child_value['catch'];
					$page_id=$new_page_id;
					$order=$child_value['order'];
					$background=$child_value['background'];
					$parent=$new_block_id;

					$sql="INSERT INTO `mylp_blocks` (`text`,`title`,`catch`,`page_id`,`order`,`parent`,`background`) VALUES ('$text','$title','$catch','$page_id','$order','$parent','$background')";
					mysql_query($sql) or die(mysql_error());
				}
			}
		}
	}

}

if ($_POST['new_land']==1&&$_POST['land_name']!=''){
	$name=$_POST['land_name'];
	$url=$_POST['land_url'];
	$title=$_POST['land_title'];
	$sql="INSERT INTO `mylp_pages` (`name`,`url`,`title`) VALUES ('$name','$url','$title')";
	$result = mysql_query($sql) or die(mysql_error());
}

if ($_POST['new_block']==1){
	$text=$_POST['new_block_text'];
	$title=$_POST['new_block_title'];
	$catch=$_POST['new_block_catch'];
	$order=$_POST['new_block_order'];
	$parent=$_POST['new_block_parent'];

	$tmp_file=$_FILES['userfile']['tmp_name'];
	$result_file=$_FILES['userfile']['name'];

	$ok=move_uploaded_file($tmp_file, '../simg/'.$result_file);

	$page_id=$_POST['page_id'];
	$sql="INSERT INTO `mylp_blocks` (`text`,`title`,`catch`,`page_id`,`order`,`parent`) VALUES ('$text','$title','$catch','$page_id','$order','$parent')";
	$result = mysql_query($sql) or die(mysql_error());
}

if ($_GET['add']=='new') {
?>
<p><a href="?">Назад</a></p>
<form action="?" method="post">
	<p>Название <input type="text" class="form-control" name="land_name" value=""></p>
	<p>URL <input type="text" class="form-control" name="land_url" value=""></p>
	<p>Title <input type="text" class="form-control" name="land_title" value=""></p>
	<input type="hidden" name="new_land" value="1">
	<input type="submit" value="Добавить">
</form>
<?
}
elseif ($_GET['edit']!='') {
?>
<a href="?">&larr; Все страницы</a> 



<?
$page_id=$_GET['edit'];
$land_data = mysql_fetch_array(mysql_query("SELECT * FROM `mylp_pages` WHERE id=$page_id"));
print '<h3>'.$land_data['name'].'</h3>';
?>

<div class="panel-group" id="accordion" style="margin-bottom:10px;">	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse_options"><span class="glyphicon glyphicon-cog"></span> Настройки страницы</a>
			</h4>
		</div>
		<div id="collapse_options" class="panel-collapse collapse"><div class="panel-body">
		  	<div class="row">
		  		<div class="col-md-6">

<?

print 'Название: <input id="landname_'.$page_id.'" value="'.$land_data['name'].'" type="text" class="form-control" onchange="showsaveland('.$page_id.')">';
print 'Адрес страницы (URL): <input id="landurl_'.$page_id.'" value="'.$land_data['url'].'" type="text" class="form-control" onchange="showsaveland('.$page_id.')">';
print 'Заголовок страницы (Title): <input id="landtitle_'.$page_id.'" value="'.$land_data['title'].'" type="text" class="form-control" onchange="showsaveland('.$page_id.')">';
print 'Шаблон: <input id="pagetemplate_'.$page_id.'" value="'.$land_data['template'].'" type="text" class="form-control" disabled onchange="showsaveland('.$page_id.')">';
print 'Телефон: <input id="landphone_'.$page_id.'" value="'.$land_data['phone'].'" type="text" class="form-control" onchange="showsaveland('.$page_id.')">';
print 'Email: <input id="landemail_'.$page_id.'" value="'.$land_data['email'].'" type="text" class="form-control" onchange="showsaveland('.$page_id.')">';
print '<div id="saveland_'.$page_id.'"></div>
		<div class="sv">
		<input type="button" value="Сохранить" class="btn btn-success" onclick="saveland('.$page_id.')">
		</div>

<span id="saveland_'.$page_id.'"></span>';
// print '</div><div class="col-md-4">';
// if ($land_data['logo']) print '<img src="/simg/'.$land_data['logo'].'">';
// print '<form action="?edit='.$page_id.'" method="post" enctype="multipart/form-data" ><input name="landlogo" type="file" value="" /><input type="submit" value="Загрузить новую"></form>';
// print '</div>';
?>
				</div>
			</div>
		</div>
	</div>
</div>

<h3>Блоки страницы</h3>
<div class="panel-group" id="accordion" style="margin-bottom:10px;">	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseNEW"><span class="glyphicon glyphicon-plus"></span> Добавить новый блок</a>
			</h4>
		</div>
		<div id="collapseNEW" class="panel-collapse collapse"><div class="panel-body">

<form action="?edit=<? print $page_id; ?>" method="post" enctype="multipart/form-data" >
	 
	<input type="text" class="form-control" name="new_block_order" value="0">

	 Родитель: <select name="new_block_parent">
		<option value="0" >Нет</option>
<?
	$sql="SELECT * FROM `mylp_blocks` WHERE page_id=$page_id AND parent=0 ORDER BY `order` ASC,`ID` ASC";	
	$result = mysql_query($sql) or die(mysql_error());
	
	while ($row=mysql_fetch_array($result)) {
		$parents[]=$row['ID'];	
	}
	foreach ($parents as $value) { print '<option value="'.$value.'">ID #'.$value.'</option>'; }
	
?>		
		</select>

	<br>
	Заголовок: <input type="text" class="form-control" name="new_block_title" value="" size="100"><br>
	<textarea class="form-control" id="" name="new_block_text" style="width:60%; height:100px;"></textarea> <br>
	Картинка: <input name="userfile" type="file" value="" />
	 Захват: <select name="new_block_catch">
		<option value="0" >Нет</option>
		<option value="1" >Форма</option>
		<option value="2" >Кнопка</option>
		</select>
		<br>
	<input type="hidden" name="new_block" value="1">
	<input type="hidden" name="page_id" value="<? print $page_id; ?>">
	<input type="submit" value="Добавить">
</form>
</div>
</div>
</div>
</div>
<h4>Текущие блоки</h4>
<?

	$page_id=$page_id;

	

function get_blocks($page_id, $parent){
	$sql="SELECT * FROM `mylp_blocks` WHERE page_id=$page_id AND parent=$parent ORDER BY `order` ASC,`ID` ASC";	
	$result = mysql_query($sql) or die(mysql_error());
	print '<div class="panel-group" id="accordion_'.$parent.'">';
	while ($row=mysql_fetch_array($result)) {
		
		print '<div class="panel panel-default">';
		print '<div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$row['ID'].'">';
		print '#'.$row['ID'].' '.$row['title'].'</a>';
		print '</h4></div>';

		print '<div id="collapse'.$row['ID'].'" class="panel-collapse collapse"><div class="panel-body">';
		

		print '<div class="row">
		<div class="col-sm-8">
		Заголовок:
		<input type="text" class="form-control" id="blocktitle_'.$row['ID'].'" onchange="showsave('.$row['ID'].');" value="'.$row['title'].'">
		Текст:
		<textarea class="form-control" id="blocktext_'.$row['ID'].'" style="width:100%; height:150px;" onchange="showsave('.$row['ID'].');">'.$row['text'].'</textarea>';

		$slct[$row['catch']]='selected="selected"';
		print '
		<div class="row">
			<div class="col-sm-3">
		Родитель: <select id="blockparent_'.$row['ID'].'" class="form-control" onchange="showsave('.$row['ID'].');" ><option value="0" >Нет</option>';
		global $parents;
		foreach ($parents as $value) { 
			if ($row['parent']==$value) print '<option value="'.$value.'" selected="selected">ID #'.$value.'</option>';
			else print '<option value="'.$value.'">ID #'.$value.'</option>';
		}
		print '</select>
		</div>
		<div class="col-sm-3">
		';		
		print ' Захват: <select id="blockcatch_'.$row['ID'].'" class="form-control" onchange="showsave('.$row['ID'].');">
		<option value="0" '.$slct[0].'>Нет</option>
		<option value="1" '.$slct[1].'>Форма</option>
		<option value="2" '.$slct[2].'>Кнопка</option>
		</select>
		</div>';
		print '
		<div class="col-sm-3">
		Порядок: <input style="width:50px;" type="text" class="form-control" id="blockorder_'.$row['ID'].'" onchange="showsave('.$row['ID'].');" value="'.$row['order'].'"></div>';
		print '<div class="col-sm-3"><a href="?edit='.$page_id.'&removeblock='.$row['ID'].'" onclick="return confirm('."'Удалить?'".');">Удалить блок</a></div>
		</div>
		';
		
		

		print '<div id="save_'.$row['ID'].'"></div>
		<div class="sv">
		<input type="button" value="Сохранить" class="btn btn-success" onclick="save('.$row['ID'].')">
		</div>
		';
		print '</div>
		<div class="col-sm-4">';
		print '<td>Картинка';
		if ($row['background']!='') print '<br><img src="/simg/'.$row['background'].'" style="max-width:200px;"> <a href="?edit='.$page_id.'&rmimg='.$row['ID'].'" onclick="return confirm('."'Удалить картинку? Если это новая копия страницы, то не удаляйте, а просто загрузите новую!'".');"><span class="glyphicon glyphicon-remove-circle"></span></a>';
		print '
		<div class="well" style="margin-top:20px;">
		<h4 style="margin-top:0px;">Загрузить новую картинку</h4>
		<form method="post" enctype="multipart/form-data" action="?edit='.$page_id.'">
			<input type="hidden" name="block_id" value="'.$row['ID'].'">
			<input name="userfile" class="form-control" type="file" value="" />
			<button type="submit" style="margin-top:10px; width:100%;" class="btn btn-info">Загрузить <span class="glyphicon glyphicon-upload"></span></button>
		</form>';
		print '</div>
		</div></div>';

		get_blocks($page_id,$row['ID']);

		print '</div></div></div>';
		unset($slct);
	}
	print '</div>';
}

get_blocks($page_id,0);

?>

<?
}
else {
?>
<!-- <p><a href="?add=new">Добавить страницу +</a></p> -->
<h2>Ваши страницы</h2>
<?
$sql="SELECT * FROM `mylp_pages`";	
$result = mysql_query($sql) or die(mysql_error());
print '<ol>';
while ($row=mysql_fetch_array($result)) {
	print '<li><a href="?edit='.$row['ID'].'">'.$row['name'].'</a> <a href="?copyland='.$row['ID'].'" onclick="return confirm('."'Сделать копию?'".');"><i class="fa fa-files-o"></i></a> <a href="?removeland='.$row['ID'].'" onclick="return confirm('."'Удалить?'".');"><i class="fa fa-times"></i></a></li>';
}
print '</ol>';
}

?>
</div>

<footer>
	<? print date("Y"); ?> &copy; MyLP made by <a href="http://rbdi.ru">RBDI</a>
</footer>
</div>
<script src="//code.jquery.com/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="js.js"></script>
</body>
</html>