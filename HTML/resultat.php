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
                    <a class="navbar-brand" href="./index.html">Find Your Way</a>
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
            <div class="container" style="padding-top:115px; padding-bottom:20px;">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="embed-responsive embed-responsive-16by9 col-lg-12">
                            <iframe id="map" class="embed-responsive-item" src="./map.html"></iframe>
                        </div>
                        <div class="intro-text">
                            <span class="name">Find Your Way</span>
                            <hr class="star-light">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Section -->

        <section>
            <div class="container">
                <div class=""><h2 class="text-center">Je dirai plutôt</h2><br></div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                          <div class="col-lg-8 col-lg-offset-2 text-center">

                            <div class="col-sm-6 col-md-4">
                              <div class="thumbnail">
                                <img src="img/cinema.jpg" alt="cinema" class="img-circle">
                                <div class="caption">
                                  <h3>Cinéma</h3>
                                  <p><a href="./resultat2.php?q=movie_theater&lat=<?= $_GET['lat'] ?>&lng=<?= $_GET['lng'] ?>&rad=<?= $_GET['rad'] ?>" class="btn btn-primary" role="button">Voir plus</a></p>
                              </div>
                          </div>
                      </div>

                      <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <img src="img/restaurant.jpg" alt="restaurant" class="img-circle">
                            <div class="caption">
                              <h3>Réstaurant</h3>
                              <p><a href="./resultat2.php?q=restaurant&lat=<?= $_GET['lat'] ?>&lng=<?= $_GET['lng'] ?>&rad=<?= $_GET['rad'] ?>" class="btn btn-primary" role="button">Voir plus</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                        <img src="img/bar.jpg" alt="bar" class="img-circle">
                        <div class="caption">
                          <h3>Bar</h3>
                          <p><a href="./resultat2.php?q=bar&lat=<?= $_GET['lat'] ?>&lng=<?= $_GET['lng'] ?>&rad=<?= $_GET['rad'] ?>" class="btn btn-primary" role="button">Voir plus</a></p>
                      </div>
                  </div>
              </div>

              <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="img/library.jpg" alt="library" class="img-circle">
                    <div class="caption">
                      <h3>Librairie</h3>
                      <p><a href="./resultat2.php?q=library&lat=<?= $_GET['lat'] ?>&lng=<?= $_GET['lng'] ?>&rad=<?= $_GET['rad'] ?>" class="btn btn-primary" role="button">Voir plus</a></p>
                  </div>
              </div>
          </div>
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

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
    
    <script>
        var query = {};
        
        location.search.substr(1).split("&").forEach(function(item) {query[item.split("=")[0]] = item.split("=")[1]})
        
        var infopos = "./map.html?lat="+ query['lat'] + "&lng="+ query['lng'] + "&rad=" + query['rad'];
        document.getElementById("map").src = infopos;
  </script>
</body>

</html>