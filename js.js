$('.thumbnail').click(function(){
	$('.mybody').empty();
	var title = $(this).parent('a').attr("title");
	$('.mytitle').html(title);
	$($(this).parents('div').html()).appendTo('.mybody');
	$('#myModal').modal({show:true});
});


function Validate(name)	{
	var IsValid = true;
	var a,b;
	
	a=document.getElementById("inputName_"+name);
	b=document.getElementById("inputContact_"+name);

	a.style.background="#FFF";
	b.style.background="#FFF";

	if (a.value == "") {
		a.style.background="#FF9999";
		IsValid = false;
	}
	if (b.value == "") {
		b.style.background="#FF9999";
		IsValid = false;
	}	  
	return IsValid;
}

function backcall(){
	var isvalid, name, contact,landid;
	isvalid= Validate('backcall');
	if (isvalid) {		
		document.getElementById("backcall_form").style.display="none";
		document.getElementById("backcall_success").style.display="block";

		name=document.getElementById("inputName_backcall").value;
		contact=document.getElementById("inputContact_backcall").value;
		landid=$('#landid').html();
		$.post("http://vmir.bz/sendmail.php", { nm: name, cntc: contact, type: 1, id:landid}, function(data){	});
		setTimeout("$('#Backcall').modal('hide')",1000);
		setTimeout("refresh_backcall()",2000);
		return true;
	}
	else{
		return false;
	}
}

function zayavka(){
	var isvalid, name, contact,landid;
	isvalid= Validate('zayavka');
	if (isvalid) {		
		document.getElementById("zayavka_form").style.display="none";
		document.getElementById("zayavka_success").style.display="block";

		name=document.getElementById("inputName_zayavka").value;
		contact=document.getElementById("inputContact_zayavka").value;
		landid=$('#landid').html();

		$.post("http://vmir.bz/sendmail.php", { nm: name, ml: '', pn:contact, type: 2, id:landid}, function(data){	});
		setTimeout("$('#zayavka').modal('hide')",2000);
		setTimeout("refresh_zayavka()",3000);
		return true;
	}
	else{
		return false;
	}
}

function send_order(id){
	var isvalid, name, mail, phone,landid;
	isvalid= Validate(id);
	if (isvalid) {	
		name=document.getElementById("inputName_"+id).value;
		// mail=document.getElementById("inputContact_"+id).value;
		phone=document.getElementById("inputContact_"+id).value;
		landid=$('#landid').html();
		$.post("http://vmir.bz/sendmail.php", { nm: name, ml: '', pn:phone, type: 2, id:landid}, function(data){ });

		$('#ordersent').modal('show');
		setTimeout("$('#ordersent').modal('hide')",3000);
		document.getElementById("inputName_"+id).value='';
		document.getElementById("inputContact_"+id).value='';
		// document.getElementById("inputPhone_"+id).value='';
		return true;
	}
	else{
		return false;
	}
}

function refresh_backcall(){
	document.getElementById("inputName_backcall").value="";
	document.getElementById("inputContact_backcall").value="";
	document.getElementById("backcall_success").style.display="none";
	document.getElementById("backcall_form").style.display="block";	
	return true;
}
function refresh_zayavka(){
	document.getElementById("inputName_zayavka").value="";
	document.getElementById("inputContact_zayavka").value="";
	document.getElementById("zayavka_success").style.display="none";
	document.getElementById("zayavka_form").style.display="block";	
	return true;
}