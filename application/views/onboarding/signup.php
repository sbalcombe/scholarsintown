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
	<div class="card">
		<?php
			$attributes = array('id' => 'onboarding-form');
			echo form_open('onboarding/setup', $attributes);
		?>
			<div class="group">
				<input required type="email" class="form-control" id="email" name="email">
			    <span class="highlight"></span>
			    <span class="bar"></span>				
				<label for="email">Email</label><br>
			</div>

			<div class="click-nav">
				<ul class="no-js">
					<li>
						<a href="#" class="clicker">Area of Science</a>
							<ul>
								<li><a href="#">Organic Chemistry</a></li>
								<li><a href="#">Inorganic Chemistry</a></li>
								<li><a href="#">Bio Chemistry</a></li>
								<li><a href="#">Physical Chemistry</a></li>
								<li><a href="#">Analytical Chemistry</a></li>						
							</ul>
					</li>
				</ul>
			</div>

			<input type="submit" class="btn btn-xlarge center-block" value="Sign Up">
		</form>
		
		<br />
		<!--
		<div class="col-md-12">
				<div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong></div>   
				<div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div>
		</div>
		-->
	</div>


	<div class="container text-center explanation">
		<h3>Value Proposition</h3>
		<p class="white-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	</div>

    <!-- Load jQuery before Bootstrap js -->
    <script type="text/javascript" href="<?= base_url('js/jquery.min.js') ?>"></script>
    <script type="text/javascript" href="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" href="<?= base_url('js/onboarding.js') ?>"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//http://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-57985737-1', 'auto');
		ga('send', 'pageview');
    </script>
</body>
</html>