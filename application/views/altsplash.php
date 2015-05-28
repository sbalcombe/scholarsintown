<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>ScholarsinTown</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Helping scientists find talks by their favorite scholars">
    <meta name="keywords" content="science,chemistry,conference,seminars">
    <meta name="author" content="Stuart Balcombe, Hicham Moutahir, Salim Falah">
    <meta name="robots" content="noindex">    
      
    <!-- Global CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Theme CSS -->  
    <link rel="stylesheet" href="css/onboarding.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//http://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-57985737-1', 'auto');
    ga('send', 'pageview');
    </script>

</head> 

<body>
<header class="header" data-stellar-background-ratio="0.5" id="home">
    <div class="overlay-layer">
                        <!-- NavBar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- <button type="button" class="btn btn-default navbar-btn navbar-right" data-toggle="modal" data-target="#login">Log In</button> -->
            </div>
        </nav>                
        

                        <!-- Content -->
       <div class="jumbotron">

        <div class="row">
            <div class="col-xs-12">
                <img src="http://scholarsintown.com/images/logo-small.png">
            </div>
        </div>
        <div class="row">    
            <div class="col-sm-6">
                <h2 class="center-block">Looking for talks by your favorite scientists?</h2>
                <a class="btn btn-medium" href="<?= site_url('onboarding') ?>">Get Started</a> 
            </div>
            <div class="col-sm-6">
                <h2 class="center-block">Promoting talks and looking to share?</h2>
                <a class="btn btn-medium" href="<?= site_url('upload') ?>">Upload Now</a> 
            </div>  
        </div>
        </div>
</header>

                        <!-- FOOTER NAVIGATION -->

        <nav class="navbar navbar-default navbar-fixed-bottom white-secondary" id="footer">
                <ul class="white-secondary">
                    <li><a href="<?= site_url('about') ?>">About Us</a></li>
                    <!--<li class="end"><a href="<?= site_url('coming_soon') ?>">Upcoming</a></li>-->
                </ul>
        </nav>
                            
        

    <!-- Load jQuery before Bootstrap js -->
    <script type="text/javascript" href="js/jquery.min.js"></script>

    <script type="text/javascript" href="js/bootstrap.min.js"></script>

    <script type="text/javascript" href="js/onboarding.js"></script>

</body>
</html>