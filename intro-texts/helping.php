<script>
// Use "_" to save time, space and typing
function _(id){ return document.getElementById(id); }

// Our submit function
function submitForm(){
_("send").disabled = true; // The user can't double click the btn
$(".status").html("<p>רק שנייה...</p>");
//	_("status").innerHTML = 'Please wait...';
var formdata = new FormData(); // An object
formdata.append( "n", _("n").value ); // The value is what the use typed in
formdata.append( "e", _("e").value );
formdata.append( "m", _("m").value );
var ajax = new XMLHttpRequest();
ajax.open( "POST", "parser.php" );
ajax.onreadystatechange = function() {
  if(ajax.readyState == 4 && ajax.status == 200) {
    if(ajax.responseText == "success"){
      // Confirm that the email was sent
      $(".status").html('<p>תודה '+_("n").value+', ההודעה נשלחה.</p>');
      setTimeout(function(){_("send").disabled=false}, 4000);
    } else { // In the event of data processing failure:
      // Output a msg about why the email wasn't sent
      $(".status").html(ajax.responseText);
      // Re-enable the buttons so user can try again
      _("send").disabled = false;
    }
  }
}
ajax.send( formdata );
}
</script>
<div class="row">
    <div class="col-md-6 form-row-item">
      <h3>
איך אתן יכולות לעזור?
      </h3>
    <p class="first">
תכתבו לי אם:
    <ul>
      <li>
האתר הועיל לכן באיזשהו אופן
      </li>
      <li>
האתר לא הועיל ויש הצעות לשיפור
      </li>
      <li>
יש לכן רעיון לתוספת לאתר
      </li>
      <li>
יש לכם הערה או שאלה
      </li>
      <li>
מצאתם טעות
      </li>
      <li>
        נתקלתן בלינק שימושי שכדאי שיופיע באתר
      </li>
      <li>
סתם בא לכם לספר לי על החוויות שלכם עם הבגרות
      </li>

    </ul>
    </p>
  </div>
  <div class="col-md-6 first form-row-item" id="contact">
      <div class="modal-content-blue">
        <div class="contact-form form-horizontal">
          <div class="modal-header">
            <form id="my_form" onsubmit="submitForm(); return false;">
                <div class="modal-body">
                  <div class="form-group">
                    <div class="col-lg-12">
                      <input type="text" id="n" placeholder="שם" class="form-control" required>
                    </div>
                  </div><!--/form-group-->
                  <div class="form-group">
                    <div class="col-lg-12">
                      <input type="email" id="e" placeholder="you@example.com" class="form-control" required>
                    </div>
                  </div><!--/form-group-->
                  <div class="form-group">
                    <div class="col-lg-12">
                      <textarea type="text" rows="6" id="m" placeholder="הודעה..." class="form-control" required></textarea>
                    </div>
                  </div><!--/form-group-->
                  <button class="btn btn-primary btn-sm" id="send" type="submit"
                  value="Send">שליחה</button>
                  <div class="status"></div>
                </div>
              </div>
            </div><!--/form class-->
        </form>
      </div> <!-- /modal content -->
    </div>
</div>
