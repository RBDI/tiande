<?
include "config.php";


function convert_charset($item) {
	if ($unserialize = unserialize($item)) {
		foreach ($unserialize as $key => $value) {
			$unserialize[$key] = @iconv('utf-8', 'koi8-r', $value);
		}
		$serialize = serialize($unserialize);
        return $serialize;
	}
	else {
		return @iconv('utf-8', 'koi8-r', $item);
	}
}

$type=$_POST['type'];
$id=$_POST['id'];
$slug=$_POST['slug'];
if ($type==1){
	$name=$_POST['nm'];
	$contact=$_POST['cntc'];
	$email_title='Заказ обратного звонка '.$slug;
	$email_text='Имя: '.$name.'<br> Телефон: '.$contact.'<br> Когда: '.date("H:i d.m.y");
}
elseif ($type==2){
	$name=$_POST['nm'];
	$mail=$_POST['ml'];
	$phone=$_POST['pn'];
	$email_title='Заявка на карту '.$slug;
	$email_text='Имя: '.$name.'<br> Email: '.$mail.'<br> Телефон: '.$phone.'<br> Когда: '.date("H:i d.m.y");
}

$land_data = mysql_fetch_array(mysql_query("SELECT email FROM `mylp_pages` WHERE url='$slug'"));
$l_email=$land_data['email'];

$title=convert_charset($email_title);
$message=convert_charset($email_text);

// $adress='agrabarnick@gmail.com';
$adress=$l_email;

$headers  = 'MIME-Version: 1.0
Content-type: text/html; charset=koi8-r
From: tianDe <mailer@tiande.ru>
';

$ok=mail($adress,$title,$message,$headers);	
print $ok;

?>