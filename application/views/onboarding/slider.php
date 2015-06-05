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
    <div id="a1">
      <div id="a2">
        <div id="a3">

          <div class="pages">
          <!-- Submit input fields from Signup Form--> 
            <?php
              $attr = array('id' => 'signup-form');
              echo form_open('user/onboarding', $attr);
            ?>
            <input type="hidden" name="email" value="<?= $email ?>">
            <input type="hidden" name="interest" value="<?= $interest ?>"> 

            <!-- Slider Page 1 -->
            <div id="i1" class="page center-align">
              <div class="card-panel">
                <img src="http://scholarsintown.com/images/logo-small.png">
                <h4>Only get the talks YOU want to hear!</h4>
                <a href="#a2" class="waves-effect waves-light btn">Optimize Your Email</a>
              </div>
            </div>

            <!-- Slider Page 2 -->
            <div id="i2" class="page center-align">
              <div class="card-panel">
                <div class="row">
                  <div class="input-field col s12 m6">
                    <input id="first_name" type="text" name="fname" class="validate">
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field col s12 m6">
                    <input id="last_name" type="text" name="lname" class="validate">
                    <label for="last_name">Last Name</label>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="affiliation" type="text" name="affiliation" class="validate">
                      <label for="affiliation">Affiliation</label>
                    </div>
                  </div>
                  <div class="row">
                    <a href="#a3" class="waves-effect waves-light btn">Next</a>
                  </div>    
                </div>
              </div>
              <div class="container content center-align">
                <h4>Get talks near you</h4>
                <p>You can find talks within easy driving distance!</p>
              </div>
            </div>

            <!-- Slider Page 3 -->
            <div id="i3" class="page center-align">
              <div class="card-panel">
                <div class="input-field col s12" id="favorite-scholars">
                  <input id="favorite-scholars" class="scholar-input" type="text" name="fscholars[]" >
                  <label for="affiliation">Favorite Scholars</label>
                </div>
                 <a id="add-scholar" class="btn-floating waves-effect waves-light pink"><i class="mdi-content-add"></i></a>
                 <div class="row">
                  <button type="submit" class="btn waves-effect waves-light"name="action">Finish</button>
                 </div> 
              </div>
              <div class="container content center-align">
                <h4>Get talks by your favorite scholars</h4>
                <p>You can find talks by their co-authors too!</p>
              </div>
            </div>

          </div>

        </div><!--Close "a3" -->
      </div><!--Close "a2" -->
    </div><!--Close "a1" -->  



      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" href="<?= base_url('js/jquery.min.js') ?>"></script>
     <script type="text/javascript" href="<?= base_url('js/materialize.min.js') ?>"></script>
     <script type="text/javascript" href="<?= base_url('js/custom.js') ?>"></script>
    </body>
  </html>