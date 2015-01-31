<?

// BUY FORM
function get_form(){
  global $N;
  $N++;
?>

<div class="well" align="center">
<h3>Отправьте заявку на получение карты умного покупателя</h3>
<form class="form-horizontal" role="form">
  <div class="form-group">
    <div class="col-md-12">
      <input type="text" class="form-control" id="inputName_order<? print $N; ?>" placeholder="Введите ваше имя">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-12">  
  <input type="text" class="form-control" id="inputContact_order<? print $N; ?>" placeholder="Введите телефон">
    </div>
  </div>  
  <div class="form-group">
    <div class="col-md-12">  
  <input type="text" class="form-control" id="inputEmail_order<? print $N; ?>" placeholder="Введите email">
    </div>
  </div>  

  <div class="form-group">
    <div class="col-md-12">
  <button type="button" class="btn btn-success btn-lg myfont" onclick="return send_order('order<? print $N; ?>')">Получить карту <i class="fa fa-angle-double-right"></i></button>
    </div>
  </div>  
</form>
<div class="myfont" style="font-size:16px; font-weight:300; margin-top:10px;">Мы перезвоним вам и ответим на все вопросы.</div>
</div>
<?
}


?>

<!-- Modal windows templates -->

<!-- Lightbox modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3 class="modal-title mytitle">Heading</h3>
  </div>
  <div class="modal-body mybody">
    
  </div>  
   </div>
  </div>
</div>

<!-- Backcall modal -->
<div class="modal fade" id="Backcall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Обратный звонок</h4>
      </div>
      <div class="modal-body">

        <form class="form-horizontal" role="form" id="backcall_form">
          <div class="form-group">
            <label for="inputName_backcall" class="col-md-3 control-label">Ваше имя</label>
            <div class="col-md-8">
              <input type="text" class="form-control" name="inputName_backcall" id="inputName_backcall" placeholder="Введите ваше имя">
            </div>
          </div>
          <div class="form-group">
            <label for="inputContant_backcall" class="col-md-3 control-label">Телефон</label>
            <div class="col-md-8">
              <input type="text" class="form-control" name="inputContact_backcall" id="inputContact_backcall" placeholder="Ваш телефон">
            </div>
          </div>
            <div class="form-group">
              <div class="col-md-offset-3 col-md-8 blueb">
                <button type="button" class="btn btn-success btn-md myfont" onclick="backcall();" ><i class="fa fa-phone"></i> Перезвоните мне</button>
              </div>
            </div>            
        </form>
        <div style="display:none;" id="backcall_success" align="center">
          <big>Ваша заявка отправлена!</big><br/>
          Скоро мы вам перезвоним.
          <div style="margin-top:10px;"><button type="button" class="btn btn-default" onclick="return refresh_backcall();" data-dismiss="modal">Закрыть</button></div>
        </div>
      </div>
      
    </div>
  </div>
</div>


<!-- BUY FORM window modal -->
<div class="modal fade" id="zayavka" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="font-size:25px;">Заявка на получение КАРТЫ умного покупателя</h4>
      </div>
      <div class="modal-body">

        <form class="form-horizontal" role="form" id="zayavka_form">
          <div class="form-group">
            <label for="inputName_zayavka" class="col-md-3 control-label">Ваше имя</label>
            <div class="col-md-8">
              <input type="text" class="form-control" name="inputName_zayavka" id="inputName_zayavka" placeholder="Введите ваше имя">
            </div>
          </div>
          <div class="form-group">
            <label for="inputContant_zayavka" class="col-md-3 control-label">Телефон</label>
            <div class="col-md-8">
              <input type="text" class="form-control" name="inputContact_zayavka" id="inputContact_zayavka" placeholder="Ваш телефон">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail_zayavka" class="col-md-3 control-label">Email</label>
            <div class="col-md-8">
              <input type="text" class="form-control" name="inputEmail_zayavka" id="inputEmail_zayavka" placeholder="Ваш email">
            </div>
          </div>          
            <div class="form-group">
              <div class="col-md-offset-3 col-md-8 blueb">
                <button type="button" class="btn btn-success btn-lg myfont" style="font-size:25px;" onclick="zayavka();" >Отправить заявку <i class="fa fa-angle-double-right"></i></button>
                <div class="myfont" style="font-size:16px; font-weight:300; margin-top:10px;">Мы перезвоним вам для уточнения деталей и объясним порядок дальнейших действий.</div>
              </div>

            </div>

        </form>
        <div style="display:none;" id="zayavka_success" align="center">
          <big>Ваша заявка отправлена!</big><br/>
          Скоро мы вам перезвоним.
          <div style="margin-top:10px;"><button type="button" class="btn btn-default" onclick="return refresh_zayavka();" data-dismiss="modal">Закрыть</button></div>
        </div>
      </div>
      
    </div>
  </div>
</div>


<!-- Success window modal -->
<div class="modal fade" id="ordersent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Ваша заявка</h4>
      </div>
      <div class="modal-body">
        <div id="backcall_success" align="center">
          <big>Ваша заявка отправлена!</big><br/>
          Скоро мы свяжемся с вами уточнения деталей.
          <div style="margin-top:10px;"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button></div>
        </div>
      </div>
      
    </div>
  </div>
</div>