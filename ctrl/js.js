function showsave(ID){
	$("#save_"+ID).html('<input type="button" value="Save" onclick="save('+ID+')">');
}

function save(ID){
	var text, order,title,cath,parent;
	text=$("#blocktext_"+ID).val();
	title=$("#blocktitle_"+ID).val();
	order=$("#blockorder_"+ID).val();
	cath=$("#blockcatch_"+ID).val();
	parent=$("#blockparent_"+ID).val();
	
	$.post("save.php", { text: text,title: title, order: order, id: ID, cath:cath, parent:parent}, function(data){ $("#save_"+data).html('Сохранено.'); });
}

function showsaveland(ID){
	$("#saveland_"+ID).html('<input type="button" value="Save" onclick="saveland('+ID+')">');
}

function saveland(ID){
	var name, url, title;
	name=$("#landname_"+ID).val();
	url=$("#landurl_"+ID).val();
	title=$("#landtitle_"+ID).val();
	template=$("#pagetemplate_"+ID).val();
	email=$("#landemail_"+ID).val();
	phone=$("#landphone_"+ID).val();
	
	$.post("saveland.php", { name: name, url: url, title: title, id:ID, template:template, phone:phone, email:email}, function(data){ $("#saveland_"+data).html('Сохранено.'); });
}