<!DOCTYPE html>
<html lang="he" dir="rtl">
  <head>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-88935594-3', 'auto');
    ga('send', 'pageview');
  </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="favicon.ico">
    <script src="https://use.fontawesome.com/8f61b97be3.js"></script>
    <meta name="description" content="">
    <meta name="author" content="Hagar Shilo">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alef" rel="stylesheet">

    <title>מאוד בוגר</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="my-css/light-theme.css" rel="stylesheet">
    <!--
    <link href="my-css/my-css2.css" rel="stylesheet">
    -->

  </head>
  <body>
    <div class="transparent-bg">
<!--      <img src="images/bun-small.jpg">-->
    </div>
    <!-- Social Plugin -->
    <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

<!-- Navbar-->
<?php
  include("includes/head.html");
?>

<!-- Buffer container-->
<div class="container"></div>
<!-- 1st row for columns -->
<div class="container">
<div class="row">
  <div class="col-md-6">
    <div class="thumbnail">
      <!-- Anchor tag covering both your caption and image -->
      <a href="procedure.html">
        <div>
          <h2>
            חומרי לימוד
          </h2>
          <p>
            <?php
              $p2=file_get_contents("paragraphs/study-materials.txt");
              echo $p2;
            ?>
          </p>
        </div>
        <img>
      </a>
      <!-- Anchor tag ends covering both image and caption -->
    </div>
  </div>

  <div class="col-md-6">
    <div class="thumbnail">
    <!-- Anchor tag covering both your caption and image -->
    <a href="exam-dates.php">
      <div>
        <h2>
          לוח בחינות
        </h2>
        <p>
          <?php
            $p=file_get_contents("paragraphs/exam-dates.txt");
            echo $p;
          ?>
        </p>
      </div>
      <img>
    </a>
    <!-- Anchor tag ends covering both image and caption -->
  </div>
</div>
</div> <!-- End of 1st row -->
  <!-- 2nd row of columns -->
<div class="row">
  <div class="col-md-6">
    <div class="thumbnail thumbnail-mid">
      <!-- Anchor tag covering both your caption and image -->
      <a href="procedure.php">
        <div>
          <h2>
            התהליך
          </h2>
          <p>
            <?php
              $p=file_get_contents("paragraphs/procedure.txt");
              echo $p;
            ?>
          </p>
        </div>
<!--        <img src="images/poop.png" alt="poop emoji" width=20% class="img-fluid">-->
      </a>
      <!-- Anchor tag ends covering both image and caption -->
    </div>
  </div>
  <div class="col-md-6">
    <div class="thumbnail thumbnail-mid">
      <!-- Anchor tag covering both your caption and image -->
      <a href="tests.php">
        <div>
          <h2>
            מבחנים לדוגמה
          </h2>
          <p>
            <?php
              $p=file_get_contents("paragraphs/exams.txt");
              echo $p;
            ?>
          </p>
        </div>
      </a>
      <!-- Anchor tag ends covering both image and caption -->
      </div>
    </div>
  </div> <!-- /2nd row -->
  <!-- 3rd row -->
  <div class="row">
    <div class="col-md-6">
      <div class="thumbnail thumbnail-mid">
        <h2>קהילה וירטואלית
        </h2>
        <!-- Facebook social plugin -->
        <div class="fb-page" data-href="https://www.facebook.com/%D7%92%D7%9D-%D7%90%D7%A0%D7%99-%D7%90%D7%A7%D7%A1%D7%98%D7%A8%D7%A0%D7%99-467236070127188/?fref=ts&amp;ref=br_tf" data-tabs="timeline" data-width="400" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/%D7%92%D7%9D-%D7%90%D7%A0%D7%99-%D7%90%D7%A7%D7%A1%D7%98%D7%A8%D7%A0%D7%99-467236070127188/?fref=ts&amp;ref=br_tf" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/%D7%92%D7%9D-%D7%90%D7%A0%D7%99-%D7%90%D7%A7%D7%A1%D7%98%D7%A8%D7%A0%D7%99-467236070127188/?fref=ts&amp;ref=br_tf">‎גם אני אקסטרני‎</a></blockquote></div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail thumbnail-mid">
        <!-- Anchor tag covering both your caption and image -->
        <a href="articles.html">
          <div>
            <h2>
              עצות והגיגים
            </h2>
            <p>
              <?php
                $p=file_get_contents("paragraphs/articles.txt");
                echo $p;
              ?>
            </p>
          </div>
          <img>
        </a>
        <!-- Anchor tag ends covering both image and caption -->
      </div>
    </div>
  </div> <!-- /end of 3rd row -->
</div> <!-- /container -->

<!-- Buffer container-->
<div class="container"></div>

<div class="container container-green" id="intro-text">
<p>
  <?php
    $p=file_get_contents("paragraphs/intro-text.html");
    echo $p;
  ?>
</p>
</div>

<!-- Buffer container-->
<div class="container"></div>

<div class="container container-yellow">
<p>
  <?php
    $p=file_get_contents("paragraphs/contact.html");
    echo $p;
  ?>
</p>
</div>

<!-- Buffer container-->
<div class="container container-body"></div>

<hr>

<div id="wrap">
  <div id="main" class="container clear-top">
    <p>&copy; הגר שילה 2016</p>
  </div>
</div>
<footer class="footer"></footer>


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
