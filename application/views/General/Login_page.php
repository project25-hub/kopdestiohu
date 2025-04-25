<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?=base_url(); ?>favicon_tiohu.ico" type="image/gif">
    <title><?= $title?></title>

    <!-- Bootstrap -->
    <link href="<?=base_url(); ?>asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url(); ?>asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url(); ?>asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=base_url(); ?>asset/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=base_url(); ?>asset/build/css/custom.css" rel="stylesheet">
 
  </head>
  <style>
    body.login {
      background-image: url("<?= base_url('asset/build/images/backimage2.png'); ?>");
      background-size: 100% 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
  
    }
    @media (max-width: 576px) {
  .login_wrapper {
    right: 0;
    left: 0;
    margin: auto;
    transform: none;
    top: auto;
    bottom: 10%;
  }
}

  .login_content form {
    max-width: 350px ;
   
  }

  .login_content input.form-control {
    width: 100% !important;
    max-width: 100% !important;
    margin-bottom: 15px;
    border-radius: 4px;
    padding: 10px;
  }

  .login_content button.submit {
    width: 100% !important;
    max-width: 100% !important;
  }
  </style>

  


  <body class="login" style="color:black;">
    <div>
      <div class="login_wrapper">
        <div class=" form login_form">
          <section class="login_content">
            <form id="login-system" method="POST" action="masuk" >
            <img src="<?=base_url(); ?>kopdestiohutrans.png" style="max-width:200px;max-height:200px;">
              
              <div>
                <input title="Masukkan email" type="text" class="form-control" placeholder="Email" required name="email" />
              </div>
              <div>
                <input title="Masukkan password" type="password" class="form-control" placeholder="Password" required name="password" />
              </div>
              <span id="failed-login" style="display: none;">
                <div style="color: red;">
                  Kombinasi email dan password tidak terdaftar
                </div><br>
              </span>
              <div>
                <button class="btn btn-default submit" id="login-conf-but" type="submit"  disabled>Masuk</button>
               
              </div>
              <!--
              <div class="separator">
                <p class="change_link">Lupa password
                  <a href="lupa-password" class="to_register"> Klik di sini </a>
                </p>-->

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2025 KKN Tematik UNG</p> 
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <?php $this->load->view('SuptPage/JsP') ?>
  </body>
</html>


