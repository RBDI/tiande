$('.lightbox').click(function(){
	$('.mybody').empty();
	var title = $(this).parent('a').attr("title");
	$('.mytitle').html(title);
	$($(this).parents('a').html()).appendTo('.mybody');
	$('.mybody').children('img').toggleClass('lightbox thumbnail img-responsive');
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
	var isvalid, name, contact;
	isvalid= Validate('backcall');
	if (isvalid) {		
		$("#backcall_form").hide();
		$("#backcall_success").show();

		name=$("#inputName_backcall").val();
		contact=$("#inputContact_backcall").val();
		var slug=$('#slug').val();
		$.post("sendmail.php", { nm: name, cntc: contact, type: 1, slug:slug}, function(data){	});
		setTimeout("$('#Backcall').modal('hide')",1000);
		setTimeout("refresh_backcall()",2000);
		return true;
	}
	else{
		return false;
	}
}

function zayavka(){
	var isvalid, name, contact;
	isvalid= Validate('zayavka');
	if (isvalid) {		
		$("#zayavka_form").hide();
		$("#zayavka_success").show();

		name=$("#inputName_zayavka").val();
		contact=$("#inputContact_zayavka").val();
		mail=$("#inputEmail_zayavka").val();
		var slug=$('#slug').val();
		$.post("sendmail.php", { nm: name, ml: mail, pn:contact, type: 2, slug:slug}, function(data){	});
		setTimeout("$('#zayavka').modal('hide')",2000);
		setTimeout("refresh_zayavka()",3000);
		return true;
	}
	else{
		return false;
	}
}

function send_order(id){
	var isvalid, name, mail, phone;
	isvalid= Validate(id);
	if (isvalid) {	
		name=$("#inputName_"+id).val();
		mail=$("#inputEmail_"+id).val();
		phone=$("#inputContact_"+id).val();
		var slug=$('#slug').val();
		$.post("sendmail.php", { nm: name, ml: mail, pn:phone, type: 2, slug:slug}, function(data){ });
		$('#ordersent').modal('show');
		setTimeout("$('#ordersent').modal('hide')",3000);

		$("#inputName_"+id).val('');
		$("#inputContact_"+id).val('');
		$("#inputEmail_"+id).val('');
		return true;
	}
	else{
		return false;
	}
}

function refresh_backcall(){
	$("#inputName_backcall").val('');
	$("#inputContact_backcall").val('');
	$("#backcall_success").hide();
	$("#backcall_form").show();	
	return true;
}
function refresh_zayavka(){
	$("#inputName_zayavka").val('');
	$("#inputContact_zayavka").val('');
	$("#zayavka_success").hide();
	$("#zayavka_form").show();
	return true;
}