<!DOCTYPE html>
<html lang="he" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alef" rel="stylesheet">

    <title>בגרות אקסטרנית</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="my-css/css.css" rel="stylesheet">
    <!--
    <link href="my-css/my-css2.css" rel="stylesheet">
    -->

  </head>
  <body>
<!-- Navbar-->
<?php
  include("includes/head.html");
?>
    <div class="container">
      <!-- 1st row of columns -->
      <div class="row">


        <div class="col-md-3">
          <div class="thumbnail">
            <!-- Anchor tag covering both your caption and image -->
            <a href="page2.html">
              <div>
                <h2>
                  התהליך
                </h2>
                <p>
                  <?php
                    $p2=file_get_contents("paragraphs/paragraph2.txt");
                    echo $p2;
                  ?>
                </p>
              </div>
              <img>
            </a>
            <!-- Anchor tag ends covering both image and caption -->
          </div>
        </div>

        <div class="col-md-3">
          <div class="thumbnail">
            <!-- Anchor tag covering both your caption and image -->
            <a href="social.php">
              <div>
                <h2>
                  את לא לבד!
                </h2>
                <p>
                  <?php
                    $p4=file_get_contents("paragraphs/paragraph4.txt");
                    echo $p4;
                  ?>
                </p>
              </div>
              <img src="images/pink.png" alt="my little pony" width=50% class="img-fluid">
            </a>
            <!-- Anchor tag ends covering both image and caption -->
          </div>
        </div>

        <div class="col-md-3">
          <div class="thumbnail">
            <!-- Anchor tag covering both your caption and image -->
            <a href="page2.html">
              <div>
                <h2>
                  מבחנים לדוגמה
                </h2>
                <p>
                  <?php
                    $p1=file_get_contents("paragraphs/paragraph1.txt");
                    echo $p1;
                  ?>
                </p>
              </div>
              <img>
            </a>
            <!-- Anchor tag ends covering both image and caption -->
          </div>
        </div>

        <div class="col-md-3">
          <div class="thumbnail">
            <!-- Anchor tag covering both your caption and image -->
            <a href="page2.html">
              <div>
                <h2>
                  מחשבון יח״ל
                </h2>
                <p>
                  <?php
                    $p1=file_get_contents("paragraphs/paragraph5.txt");
                    echo $p1;
                  ?>
                </p>
              </div>
              <img src="images/calculator.png" alt="calculator icon" width=20% class="img-fluid">
            </a>
            <!-- Anchor tag ends covering both image and caption -->
          </div>
        </div>

      </div> <!-- /1st row -->

      <hr>

      <footer>
        <p>&copy; הגר שילה 2016</p>
      </footer>
    </div> <!-- /container -->

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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
