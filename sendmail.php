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
$id=$_POST['id'];
if ($type==1){
	$name=$_POST['nm'];
	$contact=$_POST['cntc'];
	$email_title='Zakaz obratnogo zvonka s VMir.bz ('.$id.')';
	$email_text='Имя: '.$name.'<br> Телефон: '.$contact.'<br> Когда: '.date("H:i d.m.y");
}
elseif ($type==2){
	$name=$_POST['nm'];
	$mail=$_POST['ml'];
	$phone=$_POST['pn'];
	$email_title='Zayavka s VMir.bz ('.$id.')';
	$email_text='Имя: '.$name.'<br> Email: '.$mail.'<br> Телефон: '.$phone.'<br> Когда: '.date("H:i d.m.y");
}


$title=convert_charset($email_title);
$message=convert_charset($email_text);
$adress='vmir.bz@gmail.com';
// $adress='agrabarnick@gmail.com';

$headers  = 'MIME-Version: 1.0
Content-type: text/html; charset=koi8-r
From: VMir.bz <mailer@vmir.bz>
';

$ok=mail($adress,$title,$message,$headers);	
print $ok;

?>