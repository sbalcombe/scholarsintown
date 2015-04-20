<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="Stuart Balcombe, Hicham Moutahir, Salim Falah">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      <!-- SITE TITLE -->
      <title>SiT Alpha</title>

      <!-- Import materialize.css -->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- Import styles.css -->
      <link type="text/css" rel="stylesheet" href="css/styles.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>

    <body>

<div class="wrapper">
  <!--=======================================
                STATUS BAR
  =========================================-->              
<!--
    <section id="status">
        <nav>
          <div class="nav-wrapper blue darken-2" id="status">
          </div>
        </nav> 
    </section>
-->

  <!--========================================
                PRE LOGIN NAV BAR  
  ==========================================-->
                
    <!-- Pre Login Homepage NavBar
          Hide once logged in -->
    <section id="navBar">   
	<?php if (!isset($logged) || !$logged): ?>
        <nav>
          <div class="nav-wrapper blue">
            <div class="col s12">
              <a href="#" class="logo">ScholarsinTown</a>
              <a class="waves-effect waves-light btn pink modal-trigger" href="#signin">Sign In</a>
            </div>

          <div class="divider"></div>  

          <div class="col s12">
              <a class="about secondary-text" href="http://www.scholarsintown.com/about">About</a>
              <a href="#signup" class="sign-up modal-trigger secondary-text">Get it now</a>
          </div>    
        </nav>

  <!--========================================
                SIGNED IN NAVBAR
  ==========================================-->
	<?php else: ?>
	<a href="<?= site_url('user/logout'); ?>">Logout</a>
      <div class="navbar-fixed blue">
        <nav class="blue">
          <div class="nav-wrapper blue">
              <div class="search-bar valign-wrapper">
                <div class="profile-btn">
                  <a href="#profile" class="navlink"><i class="mdi-action-account-circle"></i></a>
                </div>
                <!-- Alternative Search Bar --><!--
                <div class="container">
                  <input id="theInput" />
                  <svg height="31" width="200" id="searchSvg">
                    <path d="M0 30 L200 30 L192 22 a10,10 0 1 0 -1,1 L192 22" />
                  </svg>
                </div>
                <!-- End of Alternative Search Bar -->
                <div class="search">
                <div class="input-field">
                  <input id="search" type="search" required>
                    <label for="search"><i class="mdi-action-search"></i></label>
                </div>
                </div>
              </div>
              <div class="nav-container">
                <ul>
                  <li class="nav-recent"><a href="#recent">Recent</a></li>
                  <li class="nav-discover"><a href="#discover">Discover</a></li>
                </ul> 
              </div> 
          </div>    
        </nav>
       <a href="#addevent" class="plus-button btn-floating btn-large pink modal-trigger"><i class="mdi-content-add"></i></a>
      </div>
	<?php endif; ?>
    </section>  

  <!--======================================
                    CARDS
  =======================================-->  

  	<!--=================================================
  						USER CARD
  	===================================================-->                    
  	<section id="user-card" class="card-panel collapsible" data-collapsible="expandable">
  			<!--Inital User Card View-->
  			<div class="user-profile">
  				<img src="" class="avatar">
          <div class="user-info">
  				  <h3 class="user-name right-align">Jennifer Novotney<!--<?php echo "";?>--></h3>
  				  <h4 class="affiliation right-align">Cornell University<!--<?php echo "";?>--></h4>
          </div>
          <div class="research-area">  
            <h4 class="left-align">Porous Organic Polymers<!--<?php echo "";?>--></h4>
            <div class="fba-more right-align">
              <a class="btn-floating btn-large waves-effect waves-light pink"><i class="mdi-navigation-more-horiz"></i> href=""></a>  
            </div>
          </div>  
  			</div>	

  			<div class="info-bar">
          <div class="dynamic-info">
  				  <h5 class="proximity"><i class="mdi-maps-pin-drop"></i><!--<?php echo "";?>-->24 miles</h5>
  				  <h5 class="date"><i class="mdi-action-today"></i><!--<?php echo "";?>-->04/27/15</h5>
          </div>

  				

  				<!-- Close Overlay -->
  				<div class="close-btn right-align">
  					<a href=""><i class="mdi-navigation-close"></i></a>
  				</div>
  				<!-- End of Close Overlay -->	

  			</div>
  			<!-- End of Inital User Card View -->


  			<!-- User More Overlay --> <!--
  			<div class="user-more">
  				<h4 class="more-header"><?php echo "";?></h4>
  					<div class="card-nav">
  						<ul class="animate">
  							<li><i class=""><a href=""></i></a></li>
  							<li><i class=""><a href=""></i></a></li>
  							<li><i class="mdi-action-favorite-outline"><a href=""></i></a></li>
  						</ul>
  					</div>
  				</h4>
  			</div>	
  			<!-- End of User More Overlay --> 
  	</section>

  	<!--=================================================
  						EVENT CARD
  	===================================================-->				
  	
  	<section id="event-card" class="card-panel collapsible" data-collapsible="expandable">

  			<!--Inital Event Card View-->
  			<div class="event-profile"> 
          <div class="event-topic">
  				  <h3><?php echo "";?>Human Cooperation</h3>
          </div>
          <img src="" class="avatar">
          <div class="speaker-intro">  
            <h3 class="left-align">David Rand<!--<?php echo "";?>--></h4>
            <h4 class="left-align">Yale University<!--<?php echo "";?>--></h4>
            <div class="fba-more right-align">
              <a class="btn-floating btn-large waves-effect waves-light pink"><i class="mdi-navigation-more-horiz"></i> href=""></a>  
            </div>
          </div> 
  			</div>	

  			<div class="info-bar">
  				<div class="dynamic-info">
            <h5 class="proximity"><i class="mdi-maps-pin-drop"></i><!--<?php echo "";?>-->24 miles</h5>
            <h5 class="date"><i class="mdi-action-today"></i><!--<?php echo "";?>-->04/27/15</h5>
          </div>
  				<!-- Close Overlay -->
  				<div class="close-btn">
  					<a href=""><i class="mdi-navigation-close"></i></a>
  				</div>
  				<!-- End of Close Overlay -->	
  			</div>
  			<!-- End of Inital Event Card View -->
  				
  			<!-- Event More Overlay --><!--
  			<div class="event-more">
  				<h4 class="more-header"><?php echo "";?></h4>
  					<div class="card-nav">
  						<ul class="animate">
  							<li><i class=""><a href=""></i></a></li>
  							<li><i class=""><a href=""></i></a></li>
  							<li><i class=""><a href=""></i></a></li>
  						</ul>
  					</div>
  				</h4>
  			</div>
  			<!-- End of Event More Overlay --> 
  	</section>
  <!--======================================
                   MODALS 
  ========================================-->
  <!-- Sign In Modal -->

  <div id="signin" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <a href="#!" class="modal-action modal-close waves-effect waves-light"><i class=" small mdi-navigation-close black-text"></i></a>
      </div>
	  <?php
		$attributes = array('class' => 'col s12');
		echo form_open('user/login', $attributes);
	  ?>
        <div class="input-field col s12">
          <input id="email" name="email" type="text" class="validate">
          <label for="email">Username</label>
        </div>
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>

        <p>
          <input type="checkbox" id="remember" />
          <label for="remember">Remember Me</label>
        </p>

        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        </button>
      </form>

          <!-- Signin with Linkedin --><!--
      <a class="waves-effect waves-light btn blue">Linkedin</a>-->

      <!-- For this should we should probably use the button as per the API I would think -->
    </div>
  </div>

  <!-- Signup Modal -->

  <div id="signup" class="modal">
    <div class="modal-content">
    <div class="modal-header">
      <a href="#!" class=" modal-action modal-close waves-effect waves-light"><i class=" small mdi-navigation-close black-text"></i></a>
    </div>  
      <h4>Create an Account</h4>
      <?php
		$attributes = array('class' => 'col s12');
		echo form_open('user/signup', $attributes);
	  ?>
        <div class="input-field col s12">
          <input id="first_name" name="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>

        <div class="input-field col s12">
          <input id="last_name" name="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>

        <div class="input-field col s12">
          <input id="affiliation" name="affiliation" type="text" class="validate">
          <label for="affiliation">Affiliation</label>
        </div>

        <div class="input-field col s12">
          <input id="email" name="email" type="text" class="validate">
          <label for="email">Email Address</label>
        </div>

        <div class="input-field col s12">
          <input id="password" name="password" type="text" class="validate">
          <label for="password">Password</label>
        </div>

<<<<<<< Updated upstream
        <div class="browser-default">
			<select name="area_science">
				<option value="" disabled selected>Select your Area of Science</option>
				<option value="1">Option 1</option>
				<option value="2">Option 2</option>
				<option value="3">Option 3</option>
			</select>
=======
        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Select your Area of Science</option>
            <option value="1">Bio Chemistry</option>
            <option value="2">Physical Chemistry</option>
            <option value="3">Organic Chemistry</option>
            <option value="4">Inorganic Chemistry</option>
            <option value="5">Analytical Chemistry</option>
           </select>
        </div>

        <div class="input-field col s12">
          <input id="researcharea" type="text" class="validate">
          <label for="password">Research Area</label>
>>>>>>> Stashed changes
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
      </form>

      <!-- Prefill fields with Linkedin Account -->
    </div>
  </div>

  <!-- Add an Event -->

  <div id="addevent" class="modal">
    <div class="modal-content">
      <a href="#!" class=" modal-action modal-close waves-effect waves-light"><i class=" small mdi-navigation-close black-text"></i></a>
      <form class="col s12">
        <div class="input-field col s12">
          <input id="speakername" type="text" class="validate">
          <label for="speakername">Speaker Name</label>
        </div>

        <div class="input-field col s12">
          <input id="speakeraffiliation" type="text" class="validate">
          <label for="speakeraffiliation">Speaker Affiliation</label>
        </div>

        <div class="input-field col s12">
          <input id="topic" type="text" class="validate">
          <label for="topic">Topic</label>
        </div>

        <div class="input-field col s12">
          <input type="date" class="datepicker">
          <label for="speakeraffiliation">Date</label>
        </div>

        <div class="input-field col s12">
          <input type="date" class="datepicker"><label for="speakeraffiliation">Time</label>
        </div>

        <div class="row">
          <div class="input-field col s3">
            <p>
              <input type="checkbox" id="serieslabel" />
              <label for="serieslabel"></label>
            </p> 
          </div>
          <div class="input-field col s9">
            <input id="seriespicker" type="text"><label for="seriespicker">Series</label>
          </div>  
        </div>  

        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        </button>
      </form>
    </div>
  </div>



      <!--======================================
                        SCRIPTS
      =========================================->  
                    
      <!--Import jQuery before materialize.js-->

      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/custom.js"></script>

    </body>
</html>