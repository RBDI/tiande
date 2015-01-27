<?
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

if ($type==1){
	$name=$_POST['nm'];
	$contact=$_POST['cntc'];
	$email_title='Заказ обратного звонка';
	$email_text='Имя: '.$name.'<br> Телефон: '.$contact.'<br> Когда: '.date("H:i d.m.y");
}
elseif ($type==2){
	$name=$_POST['nm'];
	$mail=$_POST['ml'];
	$phone=$_POST['pn'];
	$email_title='Заявка ';
	$email_text='Имя: '.$name.'<br> Телефон: '.$phone.'<br> Когда: '.date("H:i d.m.y");
}


$title=convert_charset($email_title);
$message=convert_charset($email_text);
//$adress='agrabarnick@gmail.com'; /// write your email adress here
$adress='prodshow@mail.ru';

$headers  = 'MIME-Version: 1.0
Content-type: text/html; charset=koi8-r
From: Arenda-Plazma.ru <mailer@arenda-plazma.ru>
';

$ok=mail($adress,$title,$message,$headers);	
print $ok;
?>