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
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/onboarding.css') ?>">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
<div id="a1">
    <div id="a2">
        <div id="a3">
 
            <div class="pages">
				<?php
					$attr = array('id' => 'signup-form');
					echo form_open('user/onboarding', $attr);
				?>
				<input type="hidden" name="email" value="<?= $email ?>">
				<input type="hidden" name="interest" value="<?= $interest ?>">
                <!-- Verification Email -->
                <div id="i1" class="page">

                    <img class="sit_logo" src="http://scholarsintown.com/images/logo-small.png">

					<div class="container text-center explanation">
						<h3 class="white-primary">Only get the talks you want to hear!</h3>
						<h4 class="white-secondary">Choose your preferences</h4>
					</div>
					<a href="#a2" class="btn btn-medium center-block">Get Started</a>


                <!--

                <div class="container text-center explanation">
                    <h5 class="white-primary">Help us find the talks you want to hear</h5>
                    <p class="white-secondary">Choose your preferences</p>
                </div>

                <a href="#a2" class="btn btn-medium center-block">Get Started</a>
				

>>>>>>> Stashed changes
                </div>
                -->
                
                <!-- Name and Affiliation-->
                <div id="i2" class="page"> 
					<div class="card">	
                                <div class="group">
    								<input required type="text" class="form-control" id="fname" name="fname">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label for="fname">First Name</label>
                                </div><br>
                                <div class="group">
    								<input required type="text" class="form-control" id="lname" name="lname">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>   
                                    <label for="lname">Last Name</label>
                                    </div><br>
                                <div class="group">
    								<input required type="text" class="form-control" id="affiliation" name="affiliation">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>   
                                    <label for="affiliation">Affiliation</label>
						        </div> 

							<a href="#a3" class="btn btn-xlarge center-block">Next</a>
					</div>

					<div class="container text-center explanation">
						<h3 class="white-primary">Get talks near you</h3>
						<h4 class="white-secondary">You can find talks within easy driving distance!</h4>
					</div>
                </div>
                
                <!-- Favorite Scholars and Submit Form -->
                <div id="i3" class="page">
					<div class="card">
						<h4 class="primary-text">Choose your favorite scholars</h5>
						<div class="form-group" id="favorite-scholars">
    						<input type="text" name="fscholars[]" class="form-control scholar-input">           
                        </div>
						<a href="#a3" class="circle-button center-block" id="add-scholar">+</a>
						
						<input type="submit" class="btn btn-xlarge center-block signup" value="Sign Up">
					</div>

					<div class="container text-center explanation">
						<h3 class="white-primary">Get talks by your favorite scholars</h3>
						<h4 class="white-secondary">You can find talks by their co-authors too!</h4>

					</div>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>
    <!-- Load jQuery before Bootstrap js -->
    <script type="text/javascript" src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/onboarding.js') ?>"></script>
</body>
</html>