  <script>
  // Use "_" to save time, space and typing
  function _(id){ return document.getElementById(id); }

  // Our submit function
  function submitForm(){
	_("send").disabled = true; // The user can't double click the btn
  $(".status").html("<p>רק רגע...</p>");
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
        setTimeout(function(){_("send").disabled=false}, 2500);
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
  <div class="col-md-6">
    <div class="modal-content-blue">
      <div class="contact-form form-horizontal">
        <div class="modal-header">
          <h1 class="modal-light display-4">יצירת קשר</h1>
          <p>
            מצאת טעות? רוצה להוסיף מידע? יש לך רעיון לשיפור?
          </p>
          <form id="my_form" onsubmit="submitForm(); return false;">
              <div class="modal-body">
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="text" id="n" placeholder="שם" class="form-control" required>
                  </div>
                </div><!--/form-group-->
                <div class="form-group">
                  <div class="col-lg-12">
                    <input type="email" id="e" placeholder="אימייל" class="form-control" required>
                  </div>
                </div><!--/form-group-->
                <div class="form-group">
                  <div class="col-lg-12">
                    <textarea type="text" rows="12" id="m" placeholder="הודעה..." class="form-control" required></textarea>
                  </div>
                </div><!--/form-group-->
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary btn-sm" id="send" type="submit"
              value="Send">שליחה</button>
            </div>
            <div class="status"></div>
          </div><!--/form class-->
      </form>
    </div> <!-- /modal content -->
  </div>
</div>
