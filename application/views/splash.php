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
      <link type="text/css" rel="stylesheet" href="<?= base_url('css/materialize.min.css') ?>" media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="<?= base_url('css/custom.css') ?>"/>
    </head>
    <body>
      <header>
        <nav>
          <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
              <li><a href="<?= site_url('about') ?>" class="waves-effect waves-light btn">About Us</a></li>
            </ul>
          </div>
        </nav>  
      </header>

      <main class="center-align">
        <img src="http://scholarsintown.com/images/logo-small.png">
        <h3 class="center-block">Find talks by your favorite scientists</h3>
        <a class="waves-effect waves-light btn-large" href="<?= site_url('onboarding') ?>">Get Started</a>
      </main>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" href="<?= base_url('js/jquery.min.js') ?>"></script>
    <script type="text/javascript" href="<?= base_url('js/materialize.min.js') ?>"></script>
    </body>
  </html>