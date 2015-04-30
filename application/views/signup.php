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
      

    <link rel="stylesheet" href="css/bootstrap.min.css">

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

    <!-- Signup Page (Slide 1)-->
    <div class="slide" id="first">
        <div class="container">
            <div class="card">
                <?php
                $attributes = array('class' => 'col-xs-12');
                echo form_open('user/signup', $attributes);
                ?>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="interest">Area of Science</label>
                        <select class="form-control" id="interest">
                            <option>Organic Chemistry</option>
                            <option>Inorganic Chemistry</option>
                            <option>Bio Chemistry</option>
                            <option>Physical Chemistry</option>
                            <option>Analytical Chemistry</option>
                        </select>
                    </div>
                    <button type="submit" class="btn" action="submit">CTA</button>
                </form>
            </div>
        </div>

        <div class="container">
            <div class="content">
                <h4>Value of Signing Up</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>    

    <!-- Favorite Scholars (Slide 2)-->
    <div class="slide">
        <div class="container">
            <div class="card">
                <form id="favoriteScholars">
              <!--  <div class="form-group"> -->
                    <input type="text" class="form-control" placeholder="Text input">
               <!-- </div>-->
                    <button type="button" id="moreScholars">Add</button>

                    <button type="submit" class="btn">CTA</button>
                </form>
            </div>    
        </div>
        <div class="container">
            <div class="content">
                <h4>Value of adding Favorite Scholars</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>    
    </div>    
    
    <!-- Affiliation (Slide 3)-->
    <div class="slide">
        <div class="container">
            <div class="card">
                <form id="affiliation">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>

                        <div class="col-xs-6">   
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                    </div>   
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Affiliation">
                    </div> 

                    <button type="submit" href="success.php" class="btn">CTA</button>   
                </form>
            </div>
        </div>
        <div class="container">
            <div class="content">
                <h4>Value of Adding Affiliation</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>    

    <div class="status">
    	<a class="statusIndicator" href="">
    	<a class="statusIndicator" href="">
    	<a class="statusIndicator" href="" >
    </div>
    <!-- Load jQuery before Bootstrap js -->
    <script type="text/javascript" href="js/jquery.min.js"></script>

    <script type="text/javascript" href="js/bootstrap.min.js"></script>

    <script type="text/javascript" href="js/onboarding.js"></script>
</body>
</html>