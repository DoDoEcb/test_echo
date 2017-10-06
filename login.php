<?php
ini_set('display_errors', 0);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

if(isset($_POST['set-login'])){
    require_once("scripts/Classes/Login.php");

    $Login = new Login();

    if($Login->Logar($_POST['username'],md5($_POST['password'])) == true){
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = md5($_POST['password']);
        ?>
        <script>window.location='painel/'</script>
    <?php
    }else{
        ?>
        <script>alert("Erro ao logar Tente novamente! ")</script>

    <?php
    }
}
?>
<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>ShopWebDesigner</title>
    <meta name="description" content="Acessar Minha Conta" />
    <meta name="Author" content="Bem Vindo ao Login" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

    <!-- WEB FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="http://demoscriptbtc.esy.es/oie_transparent3.png" type="image/x-icon" />
    <!-- THEME CSS -->
    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
    <style>
        .logo-login{
            margin-top:30px;
        }
    </style>
</head>
<!--
    .boxed = boxed version
-->
<body>

<div class="col-sm-12 text-center logo-login">
    <img src="images/generic-logo.png">
</div>

<div class="padding-15">
    <div class="login-box">

<!--        <form class="login-form" method="post" style="background: transparent">-->
<!--            <div class="row">-->
<!--                <div class="input-field col s12 center">-->
<!--                    <p class="center login-form-text">Acessar meu Escritório</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row margin">-->
<!--                <div class="input-field col s12">-->
<!--                    <i class="mdi-social-person-outline prefix"></i>-->
<!--                    <input id="username" type="text" name="username">-->
<!--                    <label for="username" class="center-align" >Nome de Usuário</label>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row margin">-->
<!--                <div class="input-field col s12">-->
<!--                    <i class="mdi-action-lock-outline prefix"></i>-->
<!--                    <input id="password" type="password" name="password">-->
<!--                    <label for="password">Senha</label>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="input-field col s12 m12 l12  login-text">-->
<!--                    <input type="checkbox" id="remember-me" />-->
<!--                    <label for="remember-me">Me lembre !</label>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="g-recaptcha" data-sitekey="6LdYJy8UAAAAAFXIaLip_cJj3ofIkpWikXbLoJk1"></div>-->
<!--            <div class="row">-->
<!--                <div class="input-field col s12">-->
<!--                    <button class="btn waves-effect waves col s12"  style="background-color: #004368" name="set-login" >Entrar</button>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <center>-->
<!--                    <p><a href="register.php">Registrar !</a> | <a href="recuperar_senha.php">Esqueci minha senha </a></p>-->
<!--                </center>-->
<!--                <div class="input-field col s6 m6 l6">-->
<!--                    <!--<p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </form>-->


        <form action="" method="post" class="sky-form boxed">
            <header><i class="fa fa-home"></i> Acessar meu Escritório</header>
            <fieldset>

                <section>
                    <label class="label">Usuário</label>
                    <label class="input">
                        <i class="icon-append fa fa-user"></i>
                        <input type="text"  name="username" required >
                        <span class="tooltip tooltip-top-right">Nome de Usuário</span>
                    </label>
                </section>

                <section>
                    <label class="label">Senha</label>
                    <label class="input">
                        <i class="icon-append fa fa-lock"></i>
                        <input type="password" name="password" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Sua Senha';}">
                        <b class="tooltip tooltip-top-right">Coloque Sua Senha</b>
                    </label>
                    <div class="col-md-10" style="padding-left: 0 !important; padding-top: 15px;">
                        <label class="checkbox"><input type="checkbox" name="checkbox-inline" checked><i></i>Manter Conectado</label>
                    </div>
                    <div class="col-md-2" style="padding-right: 0!important;">
                        <button type="submit" class="btn btn-success pull-right">Entrar</button>
                    </div>
                </section>
            </fieldset>
            <footer>
                <div class="col-md-5" style="padding-left: 0!important; border-right: 1px solid #CCC;">
                    <a href="register.php"><b>Não tem Conta?</b></a>
                </div>
                <div class="col-md-7" style="padding-right: 0!important;">
                    <a href="recuperar_senha.php"><b>Esqueci minha senha</b> </a>
                </div>
            </footer>
        </form>
    </div>
</div>
<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
</body>
</html>



<?php die(); ?>


<!DOCTYPE html>
<html lang="pt-br" meta charset="UTF-8">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>ImpactusBit</title>

    <!-- Favicons-->
    <link rel="icon" href="images/" sizes="64x64">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/nada.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#004368">
    <meta name="msapplication-TileImage" content="images/nada.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->

    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body style="background-image: url(images/user-profile-bg.jpg);background-size: cover">
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->
<center style="margin-left: 10%">
    <img src="images/generic-logo.png" width="125%">
<div  class="row" style="margin-left: 10%;">
    <div class="col s16 z-depth- card-panel">
        <form class="login-form" method="post" style="background: transparent">
            <div class="row">
                <div class="input-field col s12 center">
                    <p class="center login-form-text">Acessar meu Escritório</p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="username" type="text" name="username">
                    <label for="username" class="center-align" >Nome de Usuário</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password" name="password">
                    <label for="password">Senha</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12  login-text">
                    <input type="checkbox" id="remember-me" />
                    <label for="remember-me">Me lembre !</label>
                </div>
            </div>
            <div class="g-recaptcha" data-sitekey="6LdYJy8UAAAAAFXIaLip_cJj3ofIkpWikXbLoJk1"></div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves col s12"  style="background-color: #004368" name="set-login" >Entrar</button>
                </div>
            </div>
            <div class="row">
                <center>
                    <p><a href="register.php">Registrar !</a> | <a href="recuperar_senha.php">Esqueci minha senha </a></p>
              </center>
                <div class="input-field col s6 m6 l6">
                    <!--<p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>-->
                </div>
            </div>

        </form>
    </div>
</div></center>



<!-- ================================================
  Scripts
  ================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!--prism-->
<script type="text/javascript" src="js/plugins/prism/prism.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="js/plugins.min.js"></script>
<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="js/custom-script.js"></script>

</body>

</html>