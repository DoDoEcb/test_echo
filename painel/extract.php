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
                        <a href="index" style="color: #5a6667 !important;">Escritório</a> / Extrato
                    </div>
                </div>
            </div>

            <div class="table table-responsive">
                <table class="table table-bordered table-vertical-middle nomargin">
                    <thead>
                    <tr>
                        <th class="width-30">ID</th>
                        <th>Data</th>
                        <th>Descrição</th>
                        <th>Usuário</th>
                        <th>Valor</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = $pdo->pdo->query("SELECT * FROM extrato WHERE personal_id='$row->personal_id' ORDER by id DESC");
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
                                <td><?php echo $ref->pedido_id?></td>
                                <td><?php echo $ref->data?></td>
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
    <div class="row text-center">
        <div class='alert alert-info' role='alert'><strong></strong> Copyright © 2017 Impactusbit All rights reserved.
        </div>
    </div>
</section>
    <?php
    include "scripts_page.php";
    die();
    ?>
