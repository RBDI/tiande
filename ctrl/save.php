<?
include "../config.php";

$text=$_POST['text'];
$title=$_POST['title'];
$order=$_POST['order'];
$catch=$_POST['cath'];
$parent=$_POST['parent'];

$ID=$_POST['id'];
$sql="UPDATE `mylp_blocks` SET `text`='$text',`title`='$title', `order`='$order',`catch`='$catch',`parent`='$parent'  WHERE `ID`=$ID";
$result = mysql_query($sql) or die(mysql_error());
print $ID;
?>