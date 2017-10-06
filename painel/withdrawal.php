<?php
include_once('head_new.php');
include_once('sidemenu.php');
include_once('header_new.php');
$dolar = "3.14";
?>
<script>
    $(document).ready(function(){

        $("form").on("keyup",".qtd",function(){
            var valor = <?php echo 3027?>;
            var calcular =   valor * $(".qtd").val();
            $(".total").val(parseFloat(calcular).toFixed(2)).focus();
            $(".qtd").focus();
        });

        $("form").on("keyup",".total",function(){
            var valor = <?php echo 0.0003027?>;
            var calcular =   valor * $(".total").val();
            $(".qtd").val(parseFloat(calcular).toFixed(8)).focus();
            $(".total").focus();
        });
    });

</script>
<section id="middle">
    <div id="content" class="dashboard padding-20">
        <div class="page-content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <a href="index" style="color: #5a6667 !important;">Escritório</a> / Retirar Bitcoins
                    </div>
                </div>
            </div>

            <div class="bg-success text-black text-center padding-10">
                <i class="fa fa-btc"></i>Valor minino para retirar  :
                <?php echo number_format($admin->min_saque,8,".",".")?>
            </div>

            <div class="bg-info text-black text-center padding-10 margin-top-10">
                <i class="fa fa-check"></i>Saldo Disponivel :
                <?php echo number_format($row->saldo,8,".",".")?>
            </div>


            <form method="POST">
                <div class="margin-top-10">
                    <div class="col-md-8 col-md-offset-2 form-group text-center">
                        <input type="text" name="valor" id="qtd" class="form-control"  value="<?php echo $row->saldo?>" style="font-size: 13pt;text-align: center" placeholder="" maxlength="10" onkeypress='return SomenteNumero(event)' required=""/> BTC
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 col-md-offset-2 form-group text-center">
                        <i class="fa fa-qrcode " style="font-size:25px;"></i><label>&nbsp; &nbsp;WALLET </label><br><input type="text" name="wallet" value="<?php echo  isset($row->wallet)?$row->wallet:"" ?>" class="form-control" placeholder="Wallet"  style="font-size: 17pt;text-align: center" required="">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 col-md-offset-2 form-group text-center">
                        <i class="fa fa-lock " style="font-size:25px;"></i><label>&nbsp; &nbsp;Senha</label><br><input type="password" name="password" class="form-control control success" placeholder="Password" size="8" style="font-size: 17pt;text-align: center">
                    </div>

                    <div class="col-md-8 col-md-offset-2 form-group text-center">
                        <button class="btn btn-success" name="set-saque">Solicitar Retirada <i class="fa fa-send-o" style="font-size: 25px;"></i></button>
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




    <?php die();
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
        <script type="text/javascript" src="../js/jquery.js"></script>

        <script>
            $(document).ready(function(){

                $("form").on("keyup",".qtd",function(){
                    var valor = <?php echo 3027?>;
                    var calcular =   valor * $(".qtd").val();
                    $(".total").val(parseFloat(calcular).toFixed(2)).focus();
                    $(".qtd").focus();
                });


            });
        </script>
        <script>
            $(document).ready(function(){

                $("form").on("keyup",".total",function(){
                    var valor = <?php echo 0.0003027?>;
                    var calcular =   valor * $(".total").val();
                    $(".qtd").val(parseFloat(calcular).toFixed(8)).focus();
                    $(".total").focus();
                });


            });
        </script>
        <!-- Header -->

        <section id="content">

            <!--start container-->
            <div class="container">
                <!--chart dashboard start-->
                <div id="chart-dashboard">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <h5 class="breadcrumbs-title">Retirar Bitcoins</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.php">Escritorio</a></li>
                                        <li><a href="extract.php">Retirar Bitcoins</a></li>
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
                            <center><div id="card-alert" class="card orange">
                                    <div class="card-content white-text">
                                        <p><i class="fa fa-btc"></i>Valor minino para retirar  : <?php echo number_format($admin->min_saque,8,".",".")?> </p>

                                    </div>
                                </div>
                                <div id="card-alert" class="card green">
                                    <div class="card-content white-text">
                                        <p><i class="mdi-navigation-check"></i>Saldo Disponivel : <b><?php echo number_format($row->saldo,8,".",".")?></b></p>
                                    </div>
                                </div></center>
                            <!--Borderless Table-->
                            <div id="borderless-table">
                                <div class="row">

                                    <center>
                                        <form method="POST">
                                        <div class="text-center">
                                            <input type="text" name="valor" id="qtd" class="qtd"  value="<?php echo $row->saldo?>" style="width: 30%;font-size: 13pt;text-align: center" placeholder="" maxlength="10" onkeypress='return SomenteNumero(event)' required=""/> BTC
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <i class="fa fa-qrcode " style="font-size: 50px;"></i><label>&nbsp; &nbsp;WALLET </label><br><input type="text" name="wallet" value="<?php echo  isset($row->wallet)?$row->wallet:"" ?>" class="control success" placeholder="Wallet"  style="width: 30%;font-size: 22pt;text-align: center" required="">
                                        </div>
                                        <div class="text-center">
                                            <i class="fa fa-lock " style="font-size: 50px;"></i><label>&nbsp; &nbsp;Senha</label><br><input type="password" name="password" class="control success" placeholder="Password" size="8" style="width: 30%;font-size: 22pt;text-align: center">
                                        </div>
                                        <br>
                                        <br>
                                        <div class=" text-center">
                                            <button class="btn btn-success" name="set-saque">Solicitar Retirada<i class="fa fa-send-o" style="font-size: 25px;"></i></button>
                                        </div>
                                            </form>
                                    </center>
                                </div>
                            </div>
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