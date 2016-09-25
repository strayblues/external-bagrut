<?php

if ($_POST['submit']) {
  if (!$_POST['name']){
    $error="<br/>שכחת לכתוב את השם שלך. ";
  }
  if (!$_POST['email']){
    $error.="<br/>חסרה כתובת המייל. ";
  }
  if (!$_POST['msg']){
    $error.="<br/>לא כתבת את ההודעה. ";
  }
  if (!$_POST['check']){
    $error.="<br/>נא לציין אם את/ה דג. ";
  }
  if ($error) {
    $result="אופס! משהו לא הצליח: $error";
  } else {
      mail("strayblues@gmail.com", "Contact message",
      "Name: ".$_POST['name'].
      "Email: ".$_POST['email'].
      "Message: ".$_POST['msg']);
      {
      $result="ההודעה נשלחה";
      }
  }
}
?>

<div class="modal fade" id="contact" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" method="post" action="index2.php" role="form">
        <div class="modal-header">
          <h4>יצירת קשר</h4>
          <?php
            echo $result;?>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <div class="col-lg-12">
              <input type="text" name="name" class="form-control"
                id="contact-name" placeholder="שם מלא"
                value="<?php echo $_POST['name'];?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-12">
              <input type="email" name="email" class="form-control"
                id="contact-email" placeholder="you@example.com"
                value="<?php echo $_POST['email'];?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-12">
              <textarea class="form-control" rows="8" placeholder="הודעה..." name="msg"><?php
                echo $_POST['msg'];
              ?></textarea>
            </div>
          </div>

          <div class="checkbox">
            <label for="checkbox">
              <input type="checkbox" name="check">אני דג
            </label>
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-primary btn-sm" type="submit" value="Submit" name="submit">שליחה</button>
          <a class="btn btn-default btn-sm" data-dismiss="modal">ביטול</a>
        </div>

    </form>
    </div>
  </div>
</div>
