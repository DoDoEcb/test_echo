<?php
include_once('head_new.php');
include_once('sidemenu.php');
include_once('header_new.php');
$dolar = "3.14";
?>
<section id="middle">
    <div id="content" class="dashboard padding-20">
        <div class="page-content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <a href="index" style="color: #5a6667 !important;">Escritório</a> / Configurações
                    </div>
                </div>
            </div>
            <form method="POST">
                <div class="col-md-12  text-center">
                    <div class="form-group">
                        <i class="fa fa-user" style="font-size: 25px;"></i><br/>
                        <label class=""><?php echo $row->name?></label>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-envelope" style="font-size: 25px;"></i><br/>
                        <label class=""><?php echo $row->email?></label>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <span class="fa fa-bitcoin" style="font-size: 25px;"></span><br/>
                            <label>Carteira</label>
                            <input class="form-control"  value="<?php echo $row->wallet?>" name="wallet" placeholder="Carteira" style="font-size: 13pt;text-align: center; color:black" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <span class="fa fa-lock" style="font-size: 25px;"></span><br/>
                            <label>Digite sua senha</label>
                            <input type="password" class="form-control" placeholder="Sua Senha" name="password" style="font-size: 12pt;text-align: center" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-right">
                            <button class="btn btn-success" name="set-settings" type="submit">
                                <i class="fa fa-save" style="font-size: 25px;"></i>
                                Salvar
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <div class="row text-center">
        <div class='alert alert-info' role='alert'><strong></strong> Copyright © 2017 Impactusbit All rights reserved.
        </div>
    </div>
</section>
    <?php
    include "scripts_page.php";
    die();
    ?>



<?php
include_once("head.php");
?>
<body>
<!-- Start Page Loading -->
<!-- End Page Loading -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<?php
include_once("header.php");
?>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
        <?php
        include_once('sidebar.php');
        ?>
        <!-- START CONTENT -->
        <section id="content">

            <!--start container-->
            <div class="container">
                <!--chart dashboard start-->
                <div id="chart-dashboard">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <h5 class="breadcrumbs-title">Configurações</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.php">Escritorio</a></li>
                                        <li><a href="settings.php">Configurações</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--breadcrumbs end-->


                    <!--start container-->
                    <div class="container">
                        <div class="section">

                            <div class="divider"></div>

                            <!--Borderless Table-->
                           <center> <form method="POST">
                                <div class="col-md-12  text-center">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <div class="form-group">
                                            <input class="form-control"  value="<?php echo $row->name?>" placeholder="" type="user"  style="width: 30%;font-size: 13pt;text-align: center; color:black" disabled>
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <div class="form-group">
                                            <input class="form-control"  value="<?php echo $row->email?>"  placeholder="" type="email"  style="width: 30%;font-size: 13pt;text-align: center ; color:black" disabled>
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-btc"></i></span>
                                        <div class="form-group">
                                            <input class="form-control"  value="<?php echo $row->wallet?>" name="wallet" placeholder="Carteira" style="width: 30%;font-size: 13pt;text-align: center; color:black" >
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                    <br>

                                    <div class=" text-center">
                                        <span class="fa fa-lock" style="font-size: 50px;"></span>
                                        <label>&nbsp; &nbsp;Digite sua Senha</label><br><input type="password" class="control-control" placeholder="Sua Senha" name="password" style="width: 15%;font-size: 12pt;text-align: center" required="">     <button class="btn btn-info" name="set-settings" type="submit">SAVE <i class="fa fa-lock" style="font-size: 25px;"></i></button>
                                    </div>
                                </div>
                        </div>

                        </form></center>
                        </div>
                    </div>
                    <!--chart dashboard end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                </div>
                <!-- END WRAPPER -->

            </div>
            <!-- END MAIN -->



            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <?php
            include_once("footer.php");
            include_once("javascript.php");
            ?>


</body>

</html>