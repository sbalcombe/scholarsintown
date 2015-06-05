 <!DOCTYPE html>
  <html>
    <head>
      <title>ScholarsinTown - Signup</title>
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
      <main>
          <div class="card-panel" id="signup">
           <?php
              $attributes = array('id' => 'onboarding-form');
              echo form_open('onboarding/setup', $attributes);
            ?> 
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" name="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>  

            <div class="row">
              <div class="input-field col s12">
                <input id="interest" type="text" name="areaScience" class="validate">
                <label for="interest">Area of Interest</label>
              </div>
            </div>

            <div class="row center-align">
              <button type="submit" class="btn waves-effect waves-light"value="Sign Up"</button>
            </div>
          </div>
        <div class="container content center-align">
          <h4>Events in your inbox?</h4>
          <p>We'll curate the top 5 talks for you each week. Just pick your area of interest to get started!</p>
        </div>
      </main>

      <!--Import jQuery before materialize.js-->
     <script type="text/javascript" href="<?= base_url('js/jquery.min.js') ?>"></script>
     <script type="text/javascript" href="<?= base_url('js/materialize.min.js') ?>"></script>
     <script type="text/javascript" href="<?= base_url('js/custom.js') ?>"></script>
    </body>
  </html>