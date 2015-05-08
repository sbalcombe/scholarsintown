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
</head> 

<body>
<div class="wrapper">
<div id="a1">
    <div id="a2">
        <div id="a3">
 
            <div class="pages">
				<form id="signup-form" action="">

                <!-- Verification Email -->
                <div id="i1" class="page"> 

                    <img class="sit_logo" src="http://scholarsintown.com/images/logo-small.png">


                

                <div class="container text-center explanation">
                    <h5 class="white-primary">Help us find the talks you want to hear</h5>
                    <p class="white-secondary">Choose your preferences</p>
                </div>

                <a href="#a2" class="btn btn-wide center-block">Get Started</a>
				

                </div>
                
                <!-- Name and Affiliation-->
                <div id="i2" class="page"> 

                <div class="card">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" id="fname" placeholder=""><br>
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname" placeholder=""><br>
                            <label for="affiliation">Affiliation</label>
                            <input type="text" class="form-control" id="affiliation" placeholder="">
                        </div>
                        <a href="#a3" class="btn btn-xlarge center-block">Next</a>
                </div>


                <div class="container text-center explanation">
                    <h5 class="white-primary">Get talks near you</h5>
                    <p class="white-secondary">You can find talks within easy driving distance!</p>

                </div>
                </div>
                
                <!-- Favorite Scholars and Submit Form -->
                <div id="i3" class="page">

                <div class="card">
                        <h5 class="primary-text">Choose your favorite scholars</h5>
                        <div class="form-group" id="favorite-scholars">
                            <input type="text" name="fscholars" class="form-control scholar-input">
                        </div>

                        <a href="#a3" class="circle-button center-block" id="add-scholar">+</a>


                        <input type="submit" class="btn btn-xlarge center-block signup" value="Sign Up">
                </div>


                <div class="container text-center explanation">
                    <h5 class="white-primary">Get talks by your favorite scholars</h5>
                    <p class="white-secondary">You can find talks by their co-authors too!</p>

                </div>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- Load jQuery before Bootstrap js -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/onboarding.js"></script>
</body>
</html>