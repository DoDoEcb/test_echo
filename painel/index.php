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

                            <div class="alert alert-info">
                                 <p><b><i class="glyphicon glyphicon-link"></i> Referência : <a href="http://www.ecoinbest.com/register.php?ref=<?php print $row->username ?>" target="_blank" style="color:#676a6c " >http://www.ecoinbest.com/<?php echo $row->username?></a> </p></b>
                                 
                                 </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                        <div class="alert alert-success">
                                 <p><b><i class="glyphicon glyphicon-piggy-bank"></i>&nbsp;Meu Plano: <?php echo $kit->name ?></p></b>
                        
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="alert alert-warning">
                                 <p><b><i class="glyphicon glyphicon-bitcoin"></i>&nbsp;Valor do Plano: <?php echo  number_format($kit->price_btc,8,".","."); ?></p></b>
                           </div>
                           </div>
                        <div class="col-md-4">
                         <div class="alert alert-info">
                          <i class="glyphicon glyphicon-upload"></i>&nbsp;<b><a  href="#modal1" data-toggle="modal">Solicite um novo Plano </a></b>
                            <div class="info-table-show label-success" data-value="+" title="Ver informações do usuário">+</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default" id="info-table" style="display: none;">
                <div class="panel-body">
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Extrato<i class="mdi-navigation-close right"></i></span>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>ID</th>
                                    <th>Descrição</th>
                                    <th class="numeric">Nome de Usuario</th>
                                    <th class="numeric">Valor</th>
                                    <th class="numeric">Situação</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = $pdo->pdo->query("SELECT * FROM extrato WHERE personal_id='$row->personal_id' AND descricao='Daily Mining' ORDER by id ");
                                if($sql->rowCount() >0){
                                    $res = $sql->fetchAll(PDO::FETCH_OBJ);
                                    foreach($res as $ref){
                                        if($ref->status == "Pending"){
                                            $sts = "red";
                                            $or = 'Pendente';
                                        }elseif($ref->status == "Analyzing"){
                                            $sts =  'orange  ';
                                            $or = 'Analizando';
                                        }elseif($ref->status == "Estornado"){
                                            $sts =  'orange';
                                            $or = 'Estornado';
                                        }else{
                                            $sts =  '#50FF7D';
                                            $or = 'Pago';
                                        }
                                        ?>

                                        <tr>
                                            <td><?php echo $ref->data?></td>
                                            <td><?php echo $ref->pedido_id?></td>
                                            <td><?php echo $ref->descricao?></td>
                                            <td><?php echo $ref->username?></td>
                                            <td><?php echo number_format($ref->valor,8,".",".")?> / BTC</td>
                                            <td class="numeric" style="color: <?php echo $sts ?>"><?php echo $or?></td>

                                        </tr>

                                        <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div id="flot-sales" class="fullwidth height-200"></div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="box success">
                        <div class="box-title">
                            <h4><a href="#">฿ <?php echo number_format($row->saldo,8,".",".")?></a></h4>
                            <small class="block">SALDO DISPONÍVEL</small>
                            <i class="fa fa-btc"></i>
                        </div>
                        <div class="box-body text-center">
                            <span class="sparkline" data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
                                331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box warning">
                        <div class="box-title">
                            <h4>฿ <?php echo number_format($row->saldo,8,".",".")?></h4>
                            <small class="block">SALDO EM MINERAÇÃO</small>
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="box-body text-center">
                            <span class="sparkline" data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
                                331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box info">
                        <div class="box-title">
                            <h4>฿ <?php echo number_format($row->renovar_saldo,8,".",".")?></h4>
                            <small class="block">TOTAL DE GANHOS</small>
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="box-body text-center">
                            <span class="sparkline" data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
                                331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box default">
                        <div class="box-title">
                            <h4><?php echo ($c_patrocinador) ? $c_patrocinador : '0'?></h4>
                            <small class="block">MEUS INDICADOS</small>
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="box-body text-center">
                            <span class="sparkline" data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
                                331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class='alert alert-info' role='alert'><strong></strong> Copyright © 2017 Ecoinbest All rights reserved.
    </div>
</div>
</section>

<div id="modal1" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="alert alert-success" id="myModalLabel">Pagar sua fatura </h4>
        </div>
        <center> <div class="modal-body">
                <form method="post">
                    <center>  <select class="form-control" name="up_kit" style="color: #000000;font-size: 12pt;font-family: bold; background: " >
                            <?php
                            $sql = $pdo->pdo->prepare("SELECT * FROM plan where id>:plan");
                            $smtm = array(
                                "plan" => $kit->id
                            );
                            $sql->execute($smtm);
                            if($sql->rowCount()>0){
                                $res = $sql->fetchAll(PDO::FETCH_OBJ);
                                foreach($res as $row){
                                    ?>
                                    <option value="<?php echo $row->name ?>"><b><?php echo $row->name ?> | <?php echo number_format($row->price_btc,8,".",".")?>  BTC </option>
                                    <?php
                                }
                            }
                            ?>
                        </select></center><br>
                    <button class="btn btn-success" name="set-upgrade">Confimar</button>
                </form>
            </div></center>
    </div>
</div>

<div id="myModalr" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Bônus de Rede</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <h4>Quanto Vou Ganhar?</h4>
                <p><strong>Para Indicações Diretas Você Ganha 20%</strong></p>
                <p><strong>Para Indicações Do 2° Nível Você Ganha 10%</strong></p>
                <p><strong>Para Indicações Do 3° Nível Você Ganha 5%</strong></p>
                <p><strong>Para Indicações Do 4° Nível Você Ganha 2%</strong></p>
                <p><strong>Para Indicações Do 5° Nível Você Ganha 2%</strong></p>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Informações de retiradas</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <h4>Qual Valor Minimo?</h4>
                <p>Retirada Automática Minimo é de 0.01</p>

                <h4>Como são as Retiradas?</h4>
                <p>As Retiradas São automáticas para todos os usuarios basta ter o valor minimo que o sistema enviará automáticamente para sua carteira</p>

                <h4>Tem Taxa de saque?</h4>
                <p>Não Cobramos taxas Apenas a Transação para saber mais clique em taxas de transação obrigatória</p>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"data-dismiss="modal">Ok Entendido</button>
            </div>

        </div>
    </div>
</div>

<div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">O Que São pontos de trocas?</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <h4>Como Ganho pontos</h4>
                <p>Cada plano tem uma quantidade de pontos</p>

                <p>Você Ganha pontos comprando pacotes ou indicando eles para novos usuarios</p>

                <p>Exemplo o pacote "Particulas" tem 5 pontos se você comprar o pacote você Ganha 5 pontos<br>Agora se você indicar usuarios você pode ganhar muitos pontos vamos lá<br>exemplo você indicou 5 usuarios cada um deles comprou o pacote particulas Você ganhou 25 Pontos no total desses 5 indicados </p>
                <h4>Quando posso Trocar?</h4>

                <p> Veja as Trocas <a href="pontos_bitcoin.php" data-toggle="tooltip" title="Tooltip">Aperte aqui</a> </p>

            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('.info-table-show').click(function () {
        $('#info-table').slideToggle();
        var obj = $(this),
            data_val = obj.attr('data-value');
        if(data_val === '+') {
            obj.attr('data-value', '-');
            obj.removeClass('label-success');
            obj.addClass('label-danger');
            obj.html('-');
        } else {
            obj.attr('data-value', '+');
            obj.removeClass('label-danger');
            obj.addClass('label-success');
            obj.html('+');
        }
    })
</script>
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
<!--        --><?php
//        include_once("header.php");
//        $dolar = "3.14";
//        ?>
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START MAIN -->
        <div id="main">
            <!-- START WRAPPER -->
            <div class="wrapper">
<!--                --><?php
//                include_once('sidebar.php');
//                ?>
                <!-- START CONTENT -->
                <section id="content">

                    <!--start container-->
                    <div class="container">
                        <!--chart dashboard start-->
                        <div id="chart-dashboard">
                            <div class="row">
                                <?php
                                if($row->status == "Renovar"){
                                    ?>
                                    <center>
                                        <div id="card-alert" class="card red">
                                            <div>
                                                <div class="panel-title">Renovar</div>
                                            </div>
                                            <!-- panel body -->
                                            <div class="panel-body">
                                                <b>Sua conta está prestes a bater o valor para renovar! Não vá sem ganhar renovar sua conta!</b><br>
                                                <form method="post">
                                                    <br>
                                                    <center><button type="submit" class="btn btn-info" name="renovar">Gerar Fatura</button>
                                                </form>
                                            </div>
                                        </div>
                                    </center>
                                    <?php
                                }
                                ?>
                                card stats start
                                <div id="card-alert" class="card light-blue">
                                    <div class="card-content white-text">
                                        <p><i class="mdi-social-person-add"></i> Referência : <a href="http://www.ecoinbest.com/register.php?ref=<?php print $row->username ?>" target="_blank" style="color: #f5f5f5">http://www.ecoinbest.com/<?php echo $row->username?></a> </p>
                                    </div>
                                </div>



                                <div id="card-stats">
                                    <div class="row">
                                        <div class="col s12 m6 l3">
                                            <div class="card">
                                                <div class="card-content  green white-text">
                                                    <p class="card-stats-title"><i class="fa fa-dollar"> </i> Saldo Disponivel</p>
                                                    <h4 class="card-stats-number"><i class="fa fa-btc"></i> <?php echo number_format($row->saldo,8,".",".")?></h4>
                                                    <br>
                                                </div>
                                                <div class="card-action  green darken-2">
                                                    <div id="clients-bar" class="center-align"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m6 l3">
                                            <div id="result"></div>
                                        </div>
                                        <div class="col s12 m6 l3">
                                            <div class="card">
                                                <div class="card-content blue-grey white-text">
                                                    <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Meus Indicados</p>
                                                    <h4 class="card-stats-number"><i class="fa fa-users"></i> <?php echo $c_patrocinador?></h4>
                                                    <br>
                                                </div>
                                                <div class="card-action blue-grey darken-2">
                                                    <div id="profit-tristate" class="center-align"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m6 l3">
                                            <div class="card">
                                                <div class="card-content purple white-text">
                                                    <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total de ganhos</p>
                                                    <h4 class="card-stats-number"><i class="btc"></i> <?php echo number_format($row->renovar_saldo,8,".",".")?></h4>
                                                    <br>
                                                </div>
                                                <div class="card-action purple darken-2">
                                                    <div id="sales-compositebar" class="center-align"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                card stats end
                                <div>
                                    <div class="card">
                                        <div class="card-move-up waves-effect waves-block waves-light">
                                            <div class="move-up cyan darken-1">
                                                <div>
                                                    <span class="chart-title white-text">Desempenho Atual</span>

                                                    <td><a class="waves-effect waves-light btn modal-trigger " href="#modal1"  style="background-color: #0069a2;font-size: 7pt;" data-toggle="modal">Solicitar novo Plano </button></a>
                                                        <div class="panel-body">
                                                            <p class="alert alert-success">Meu Plano : <?php echo $kit->name ?></p>
                                                            <p class="alert alert-info">Valor do Plano : <?php echo  number_format($kit->price_btc,8,".","."); ?></p>
                                                        </div>                                      </div>
                                                <div class="trending-line-chart-wrapper">
                                                    <canvas id="trending-line-chart" height="70"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                        </div>

                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Extrato<i class="mdi-navigation-close right"></i></span>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Data</th>
                                                        <th>ID</th>
                                                        <th>Descrição</th>
                                                        <th class="numeric">Nome de Usuario</th>
                                                        <th class="numeric">Valor</th>
                                                        <th class="numeric">Situação</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sql = $pdo->pdo->query("SELECT * FROM extrato WHERE personal_id='$row->personal_id' AND descricao='Daily Mining' ORDER by id ");
                                                    if($sql->rowCount() >0){
                                                        $res = $sql->fetchAll(PDO::FETCH_OBJ);
                                                        foreach($res as $ref){
                                                            if($ref->status == "Pending"){
                                                                $sts = "red";
                                                                $or = 'Pendente';
                                                            }elseif($ref->status == "Analyzing"){
                                                                $sts =  'orange  ';
                                                                $or = 'Analizando';
                                                            }elseif($ref->status == "Estornado"){
                                                                $sts =  'orange';
                                                                $or = 'Estornado';
                                                            }else{
                                                                $sts =  '#50FF7D';
                                                                $or = 'Pago';
                                                            }
                                                            ?>

                                                            <tr>
                                                                <td><?php echo $ref->data?></td>
                                                                <td><?php echo $ref->pedido_id?></td>
                                                                <td><?php echo $ref->descricao?></td>
                                                                <td><?php echo $ref->username?></td>
                                                                <td><?php echo number_format($ref->valor,8,".",".")?> / BTC</td>
                                                                <td class="numeric" style="color: <?php echo $sts ?>"><?php echo $or?></td>

                                                            </tr>

                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--chart dashboard end-->

                        <!-- /////////////////////////////////////////////////////////////////////////// -->

                    </div>
                    <!-- END WRAPPER -->

            </div>
            <!-- END MAIN -->



            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <?php
            include_once("footer.php");
            include_once("javascript.php");
            ?>

            <div id="modal1" class="modal">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="alert alert-success" id="myModalLabel">Pagar sua fatura </h4>
                    </div>

                    <center> <div class="modal-body">
                            <form method="post">
                                <center>  <select class="form-control" name="up_kit" style="color: #000000;font-size: 12pt;font-family: bold;" >
                                        <?php
                                        $sql = $pdo->pdo->prepare("SELECT * FROM plan where id>:plan");
                                        $smtm = array(
                                            "plan" => $kit->id
                                        );
                                        $sql->execute($smtm);
                                        if($sql->rowCount()>0){
                                            $res = $sql->fetchAll(PDO::FETCH_OBJ);
                                            foreach($res as $row){
                                                ?>
                                                <option value="<?php echo $row->name ?>"><b><?php echo $row->name ?> | <?php echo number_format($row->price_btc,8,".",".")?>  BTC </option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select></center><br>
                                <button class="btn btn-success" name="set-upgrade">Confimar</button>

                            </form>
                        </div></center>

                </div>
            </div>
        </body>

        </html>