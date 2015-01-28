<?
include "../config.php";


$name=$_POST['name'];
$url=$_POST['url'];
$title=$_POST['title'];
$template=$_POST['template'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$ID=$_POST['id'];

$sql="UPDATE `mylp_pages` SET `name`='$name', `url`='$url', `title`='$title', `template`='$template', `phone`='$phone', `email`='$email' WHERE `ID`=$ID";
$result = mysql_query($sql) or die(mysql_error());
print $ID;

?>