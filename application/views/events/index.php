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

      <div class="navbar-fixed blue">
        <nav class="blue">
          <div class="nav-wrapper blue">
              <div class="search-bar valign-wrapper">
                <div class="profile-btn">
                  <a href="#profile" class="navlink"><i class="mdi-action-account-circle"></i></a>
                </div>
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

    </section>  

</div>
  <!--======================================
                    CARDS
  =======================================-->                    

  
  <!--======================================
                   MODALS 
  ========================================-->
  <!-- Sign In Modal -->

  <div id="signin" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <a href="#!" class="modal-action modal-close waves-effect waves-light"><i class=" small mdi-navigation-close black-text"></i></a>
      </div>
      <?php echo form_open('login');?>  
      <form class="col s12">
        <div class="input-field col s12">
          <input id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
        <div class="input-field col s12">
          <input id="password" type="text" class="validate">
          <label for="last_name">Password</label>
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
      <form class="col s12">
        <div class="input-field col s12">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>

        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>

        <div class="input-field col s12">
          <input id="affiliation" type="text" class="validate">
          <label for="affiliation">Affiliation</label>
        </div>

        <div class="input-field col s12">
          <input id="email" type="text" class="validate">
          <label for="email">Email Address</label>
        </div>

        <div class="input-field col s12">
          <input id="password" type="text" class="validate">
          <label for="password">Password</label>
        </div>

        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Select your Area of Science</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
           </select>
        </div>

        <div class="input-field col s12">
          <input id="researcharea" type="text" class="validate">
          <label for="password">Research Area</label>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        </button>
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