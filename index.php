<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title>BPV Regis</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- Custom styles for signin template -->
    <link href="css/signin.css" rel="stylesheet"> 
    
    <!-- Custom styles for signin template -->
    <link href="css/bpv_record.css" rel="stylesheet">

    <!-- My self written css for this project -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- My self written css for this project -->
    <link href="css/bpv_std_view.css" rel="stylesheet">

    <!-- My carousel css RRA -->
    <link href="css/carousel.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
           <div class="navbar-header">          
              <a class="navbar-brand" href="./index.php?content=home">
                 BPV-regis
              </a>
           </div>
           <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="./index.php?content=home">Home</a></li>
                    <li><a href="./index.php?content=about">About</a></li>
                    <?php 
                      session_start();
                      include("userrole_links.php");
                    ?>
                </ul>
           </div><!--/.nav-collapse -->        
        </div>      
    </nav>

    
    <!-- Begin page content -->
    <div class="container">        
    
       <?php 
              if (isset($_GET["content"])) {
                $_SESSION["content"] = $_GET["content"];
                include($_GET["content"].".php");
              } else {
                include("home.php");
              } 
       ?>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">AM1A Blok 3 MBO Utrecht 2017</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./jquery/jquery-3.1.1.min.js"><\/script>')</script>
    <script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
    <?php include("script_loader.php") ?>;
    <script src="./js/navigation.js"></script>
  </body>
</html>
