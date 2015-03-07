<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Find Your Way</title>

  <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/freelancer.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/family=Montserrat400700.css" rel="stylesheet" type="text/css">
  <link href="css/family=Lato400700400italic700italic.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

      </head>

      <body id="page-top" class="index">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="../index.html">Find Your Way</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                  <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                  <a href="">Périmètre</a>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
        </nav>
        <!-- Navigation end -->

        <!-- Header -->
        <header>
          <div class="container" style="padding-top:115px; padding-bottom:0px;">
            <div class="row">
              <div class="col-lg-12">
                <div class="intro-text">
                  <span class="name">Cinéma</span>
                  <hr class="star-light">
                </div>
              </div>
            </div>
          </div>
        </header>

        <!-- Section -->

        <section>
          <div class="container">
            <?php 
                $getdata = http_build_query(
                    array(
                        'q' => $_GET['q'],
                        'lat' => $_GET['lat'],
                        'lng'=> $_GET['lng'],
                        'rad'=> $_GET['rad'],
                    )
                );
                
                $opts = array('http' =>
                    array(
                        'method'  => 'GET'
                    )
                );

                $context  = stream_context_create($opts);

                $page = file_get_contents("http://ujm.eu5.org/int/HTML/json.html?".$getdata, false, $context);
                
                $json = preg_replace('/[^@]*<div id=\"info\">([^<]*)<[^@]*/', '$1', $page);
                echo "JSON" . $json;
                // $obj = json_decode($json, true);
                // print_r($obj);
                // $obj['titre'];
            ?>
            <!-- un row qui contient les information d'un ciné -->
            <div class="row">
              <div class="media col-lg-10 col-lg-offset-1">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/cinema.jpg" alt="..." style="height: 60px;">
                  </a>
                </div>
                <div class="media-body">
                  <h3 class="media-heading"><a href="resultat3.php?q=library">Alhambra ciné</a> <a href=""><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="font-size: 1em;"> </span></a> <a href=""><span class="glyphicon glyphicon-thumbs-down"aria-hidden="true" style="font-size: 1em; color:#ec4151"></span></a></h3>
                  <p>Un cinéma pas comme les autre, au pire Nico tu peux supprimé cette partie ;) qsfkjjfd flkjs dflksdj flsdj</p>
                </div>
              </div>
            </div>
            <!--/row-->

            <br><br>

            <!-- un row qui contient les information d'un ciné -->
            <div class="row">
              <div class="media col-lg-10 col-lg-offset-1">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/cinema.jpg" alt="..." style="height: 60px;">
                  </a>
                </div>
                <div class="media-body">
                  <h3 class="media-heading"><a href="#">Alhambra ciné</a> <a href=""><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="font-size: 1em;"> </span></a> <a href=""><span class="glyphicon glyphicon-thumbs-down"aria-hidden="true" style="font-size: 1em; color:#ec4151"></span></a></h3>
                  <p>Un cinéma pas comme les autre, au pire Nico tu peux supprimé cette partie ;) qsfkjjfd flkjs dflksdj flsdj</p>
                </div>
              </div>
            </div>
            <!--/row-->

            <br><br>

            <!-- un row qui contient les information d'un ciné -->
            <div class="row">
              <div class="media col-lg-10 col-lg-offset-1">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/cinema.jpg" alt="..." style="height: 60px;">
                  </a>
                </div>
                <div class="media-body">
                  <h3 class="media-heading"><a href="#">Alhambra ciné</a> <a href=""><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="font-size: 1em;"> </span></a> <a href=""><span class="glyphicon glyphicon-thumbs-down"aria-hidden="true" style="font-size: 1em; color:#ec4151"></span></a></h3>
                  <p>Un cinéma pas comme les autre, au pire Nico tu peux supprimé cette partie ;) qsfkjjfd flkjs dflksdj flsdj</p>
                </div>
              </div>
            </div>
            <!--/row-->

            <br><br>

            <!-- un row qui contient les information d'un ciné -->
            <div class="row">
              <div class="media col-lg-10 col-lg-offset-1">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/cinema.jpg" alt="..." style="height: 60px;">
                  </a>
                </div>
                <div class="media-body">
                  <h3 class="media-heading"><a href="#">Alhambra ciné</a> <a href=""><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="font-size: 1em;"> </span></a> <a href=""><span class="glyphicon glyphicon-thumbs-down"aria-hidden="true" style="font-size: 1em; color:#ec4151"></span></a></h3>
                  <p>Un cinéma pas comme les autre, au pire Nico tu peux supprimé cette partie ;) qsfkjjfd flkjs dflksdj flsdj</p>
                </div>
              </div>
            </div>
            <!--/row-->

            <br><br>

            <!-- un row qui contient les information d'un ciné -->
            <div class="row">
              <div class="media col-lg-10 col-lg-offset-1">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/cinema.jpg" alt="..." style="height: 60px;">
                  </a>
                </div>
                <div class="media-body">
                  <h3 class="media-heading"><a href="#">Alhambra ciné</a> <a href=""><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="font-size: 1em;"> </span></a> <a href=""><span class="glyphicon glyphicon-thumbs-down"aria-hidden="true" style="font-size: 1em; color:#ec4151"></span></a></h3>
                  <p>Un cinéma pas comme les autre, au pire Nico tu peux supprimé cette partie ;) qsfkjjfd flkjs dflksdj flsdj</p>
                </div>
              </div>
            </div>
            <!--/row-->

            <br><br>

            <!-- un row qui contient les information d'un ciné -->
            <div class="row">
              <div class="media col-lg-10 col-lg-offset-1">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/cinema.jpg" alt="..." style="height: 60px;">
                  </a>
                </div>
                <div class="media-body">
                  <h3 class="media-heading"><a href="#">Alhambra ciné</a> <a href=""><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="font-size: 1em;"> </span></a> <a href=""><span class="glyphicon glyphicon-thumbs-down"aria-hidden="true" style="font-size: 1em; color:#ec4151"></span></a></h3>
                  <p>Un cinéma pas comme les autre, au pire Nico tu peux supprimé cette partie ;) qsfkjjfd flkjs dflksdj flsdj</p>
                </div>
              </div>
            </div>
            <!--/row-->
          </section>   


          <!-- Footer -->
          <footer class="text-center">
            <div class="footer-below">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    Copyright &copy; BKNK
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <!-- jQuery -->
          <script src="js/jquery.js"></script>

          <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>

          <!-- Plugin JavaScript -->
          <script src="js/jquery.easing.min.js"></script>
          <script src="js/classie.js"></script>
          <script src="js/cbpAnimatedHeader.js"></script>

          <!-- Contact Form JavaScript -->
          <script src="js/jqBootstrapValidation.js"></script>
          <script src="js/contact_me.js"></script>

          <!-- Custom Theme JavaScript -->
          <script src="js/freelancer.js"></script>

        </body>

        </html>