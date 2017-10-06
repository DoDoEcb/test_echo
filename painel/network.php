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
                        <a href="index" style="color: #5a6667 !important;">Escritório</a> / Rede
                    </div>
                </div>
            </div>

            <div class="table table-responsive">
                <table class="table table-bordered table-vertical-middle nomargin">
                    <thead>
                    <tr>
                        <th class="numeric">Nome Completo</th>
                        <th class="numeric">Usuário</th>
                        <th class="numeric">E-mail</th>
                        <th class="numeric">Telefone</th>
                        <th class="numeric">Plano</th>
                        <th class="numeric">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = $pdo->pdo->query("SELECT * FROM usuarios as u INNER JOIN financeiro as f ON u.id=f.personal_id WHERE u.patrocinador='$row->username'");
                    if($sql->rowCount()>0){
                        $res = $sql->fetchAll(PDO::FETCH_OBJ);

                        foreach ($res  as $ref) {
                            if($ref->status == "Pendente"){
                                $sts = "red";
                            }elseif($ref->status == "Analyzing"){
                                $sts =  'orange';
                            }else{
                                $sts =  'green';
                            }
                            $plan = $User->BuscarPlan($ref->plan)
                            ?>
                            <tr>
                                <td class="numeric"><?php echo $ref->name ?></td>
                                <td class="numeric"><?php echo $ref->username ?></td>
                                <td class="numeric"><?php echo $ref->email ?></td>
                                <td class="numeric"><?php echo $ref->phone ?></td>
                                <td class="numeric"><?php echo $plan->name ?></td>
                                <td style="color : <?php echo $sts?>"><?php echo $ref->status ?></td>

                            </tr>
                            <?php
                        }
                    }else{
                        ?>
                        <tr>
                            <center><td><b>Você nao tem indicados, mas pode indicar usando seu
                                        link : <a href="http://www.ecoinbest.com/register.php?ref=<?php print $row->username ?>">http://www.ecoinbest.com/<?php echo $row->username?></a></b></td></center>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class='alert alert-info' role='alert'><strong></strong> Copyright © 2017 Ecoinbest All rights reserved.
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
                                    <h5 class="breadcrumbs-title">Rede </h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.php">Escritorio</a></li>
                                        <li><a href="network.php">Rede</a></li>
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
                            <div class="card__body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="numeric">Nome Completo</th>
                                            <th class="numeric">Usuário</th>
                                            <th class="numeric">E-mail</th>
                                            <th class="numeric">Telefone</th>
                                            <th class="numeric">Plano</th>
                                            <th class="numeric">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql = $pdo->pdo->query("SELECT * FROM usuarios as u INNER JOIN financeiro as f ON u.id=f.personal_id WHERE u.patrocinador='$row->username'");
                                        if($sql->rowCount()>0){
                                            $res = $sql->fetchAll(PDO::FETCH_OBJ);

                                            foreach ($res  as $ref) {
                                                if($ref->status == "Pendente"){
                                                    $sts = "red";
                                                }elseif($ref->status == "Analyzing"){
                                                    $sts =  'orange';
                                                }else{
                                                    $sts =  'green';
                                                }
                                                $plan = $User->BuscarPlan($ref->plan)
                                                ?>
                                                <tr>
                                                    <td class="numeric"><?php echo $ref->name ?></td>
                                                    <td class="numeric"><?php echo $ref->username ?></td>
                                                    <td class="numeric"><?php echo $ref->email ?></td>
                                                    <td class="numeric"><?php echo $ref->phone ?></td>
                                                    <td class="numeric"><?php echo $plan->name ?></td>
                                                    <td style="color : <?php echo $sts?>"><?php echo $ref->status ?></td>

                                                </tr>
                                            <?php


                                            }

                                        }else{
                                            ?>
                                            <tr>
                                                <center><td><b>Você nao tem indicados, mas pode indicar usando seu












                                                            link : <a href="http://impactusbit.com/<?php echo $row->username?>">impactusbit.com/<?php echo $row->username?></a>   </b></td></center>

                                            </tr>
                                        <?php
                                        }
                                        ?>


                                        </tbody>
                                    </table>
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