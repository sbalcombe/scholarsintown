 <!DOCTYPE html>
  <html>
    <head>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
      <meta name="description" content="Helping scientists find talks by their favorite scholars">
      <meta name="keywords" content="science,chemistry,conference,seminars">
      <meta name="author" content="Stuart Balcombe, Hicham Moutahir, Salim Falah">
      <meta name="robots" content="noindex">  

            <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="<?= base_url('materialize.min.css') ?>" media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="<?= base_url('custom.css') ?>">
     <link type="text/css" rel="stylesheet" href="<?= base_url('css/font-awesome/css/font-awesome.min.css') ?>">
    </head>

    <body>
  <!--<header>
        <nav>
          <div class="nav-wrapper">
           <ul id="nav-mobile" class="right">
              <li><a href="<?= site_url('about') ?>" class="waves-effect waves-light btn">About Us</a></li>
            </ul>
          </div>
        </nav>
      </header>-->

      <main>
        <section id="about">
          <div class="container">
            <div class="row">
              <div class="col s12 center-align">
                <img src="http://scholarsintown.com/images/logo-small.png">
                <p>We are working hard to create an awesome product that makes it easy to find the talks YOU want to attend.</p> 

                <p>We have lots of cool ideas and a great team to implement them but we would love to hear what you think!</p>

                <p>Why not get in touch on <a href="http://www.twitter.com/scholarsintown">Twitter</a> or check out what we are working on and leave your suggestions <a href="https://trello.com/b/g1PqaAQs/sit-product-roadmap">here</a>.</p>
              </div>  
            </div>
            <div class="row center-align">
                <a class="waves-effect waves-light btn" href="<?= site_url('onboarding') ?>">Get Started</a>
            </div>  
          </div>
        </section>  

        <section id="upcoming">
          <h5>In the <strong>Works</strong></h5>
          <div class="row">

            <div class="col s12 m5">
              <h5></h5>
              <ul>
                <li>Connect with other attendees</li>
                <li>Share events with friends</li>
                <li>Get notifications for talks</li>
              </ul>
              <p></p>
              <a class="waves-effect waves-light btn" href="https://trello.com/b/g1PqaAQs/sit-product-roadmap">Request a Feature</a>
            </div>
            <div class="col s12 m7">
              <img src="">
            </div>

          </div>
        </section>

        <section id="team">
          <h5>Meet the <strong>Team</strong></h5>
          <!-- Team Members -->
          <div class="row">
            <!--Yev-->
            <div class="col s12 m3">
              <div class="card">
                <div class="card-image">
                  <img src="<?= base_url('images/team/yevavatar.png') ?>">
                </div>
                <div class="card-content">
                  <p>Co-Founder</p>
                </div>
                <div class="card-action">
                  <ul class="social center-align">
                    <li><a href="http://www.facebook.com/yevgeniy.izrayelit"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://scholar.google.com/citations?user=KUycZFIAAAAJ&hl=en"><i class="fa fa-google"></i></a></li>
                    <li class="row-end"><a href="http://www.linkedin.com/pub/yevgeniy-izrayelit/42/a26/253/en"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>  
              </div>
            </div>  
            <!--Stu-->
            <div class="col s12 m3">
              <div class="card">
                <div class="card-image">
                  <img src="<?= base_url('images/team/stuavatar.png') ?>">
                </div>
                <div class="card-content">
                  <p>Co-Founder</p>
                </div>
                <div class="card-action">
                  <ul class="social center-align">
                    <li><a href="http://www.twitter.com/stub91"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="http://www.blog.stuartbalcombe.me"><i class="fa fa-wordpress"></i></a></li>
                    <li class="row-end"><a href="http://www.linkedin.com/in/stuartbalcombe"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>  
              </div>
            </div>
            <!--Hicham-->
            <div class="col s12 m3">
              <div class="card">
                <div class="card-image">
                  <img src="<?= base_url('images/team/hichamavatar.png') ?>">
                </div>
                <div class="card-content">
                  <p>Front End Developer</p>
                </div>
                <div class="card-action">
                  <ul class="social center-align">
                    <li><a href="http://www.linkedin.com/in/moutahirhicham/en"><i class="fa fa-linkedin"></i></a></li>
                    <li class="row-end"><a href="http://www.shibidesigns.com"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>  
              </div>
            </div>
            <!--Salim-->
            <div class="col s12 m3">
              <div class="card">
                <div class="card-image">
                  <img src="<?= base_url('images/team/salimavatar.png') ?>">
                </div>
                <div class="card-content">
                  <p>Back End Developer</p>
                </div>
                <div class="card-action">
                  <ul class="social center-align">
                    <li><a href="http://ca.linkedin.com/pub/salim-el-falah/4a/733/688/en"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="http://bbackerry.deviantart.com/"><i class="fa fa-deviantart"></i></a></li>
                    <li class="row-end"><a href="https://soundcloud.com/falahs"><i class="fa fa-soundcloud"></i></a></li>
                  </ul> 
                </div>  
              </div>
            </div>
          </div>   
        </section>
      </main>

    <footer class="page-footer">
      <div class="footer-copyright">
        <div class="container">
            Copyright 2015 
          <a class="grey-text text-lighten-4 right" href="mailto:admin@scholarsintown.com">Contact Us</a>
        </div>
      </div>
    </footer>

      <!--Import jQuery before materialize.js-->
    <script type="text/javascript" href="<?= base_url('js/jquery.min.js') ?>"></script>
    <script type="text/javascript" href="<?= base_url('js/materialize.min.js') ?>"></script>
    <script type="text/javascript" href="<?= base_url('js/custom.js') ?>"></script>
    </body>
  </html>