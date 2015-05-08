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
            <img src="http://scholarsintown.com/images/logo-small.png">
            <h2 class="center-block">Find talks by your favorite scientists.</h2>
            <a class="btn btn-medium" href="#">GET STARTED</a>
        </div>
    </div>
</header>

                        <!-- FOOTER NAVIGATION -->

        <nav class="navbar navbar-default navbar-fixed-bottom white-secondary" id="footer">
                <ul>
                    <li><a href="<?= site_url('about') ?>">About</a></li>
                    <li class="end"><a href="<?= site_url('coming_soon') ?>">Upcoming</a></li>
                </ul>
        </nav>


                        <!-- LOGIN MODAL -->

        <div class="modal" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body&hellip;</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->                              
        

    <!-- Load jQuery before Bootstrap js -->
    <script type="text/javascript" href="js/jquery.min.js"></script>

    <script type="text/javascript" href="js/bootstrap.min.js"></script>

    <script type="text/javascript" href="js/onboarding.js"></script>

</body>
</html>






