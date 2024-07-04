<div class="row" >
                        <div class="col-lg-40 col-md-40">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Aumenta </button>
                                </div>
                                <div class="panel-body col-lg-40 col-md-40 ">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Naran Kliente</th>
                                        <th>Hela Fatin</th>
                                        <th>No Telefone</th>
                                        <th>ID Aimoruk</th>
                                        <th>Asaun</th>

                                    </tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        <?php $no=1; foreach ($kliente as $key => $value) { ?>
                                            
                                        
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value->naran_kliente ?></td>
                                            <td><?= $value->hela_fatin ?></td>
                                            <td><?= $value->no_telefone ?></td>
                                            <td><?= $value->id_aimoruk ?></td>
                                            <td>
                                                <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?php $value->id_kliente?>"><i class="fa fa-pencil"></i></button>
                                                <a href="<?= base_url('kliente/delete/'.$value->id_kliente) ?>" onclick="return confirm('ita boot hakarak hamos dados ne?')" class="btn btn-xs btn-danger" style="color:black;"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                    
                                </table>
                                   
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                            <!-- /.col-lg-4 -->
                        </div>

                         <!-- Modal Aummenta -->
                         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Aumenta Dados Kliente</h4>
                                                </div>
                                                <div class="modal-body">

                                                <?php 

                                                    if ($this->session->flashdata('mensajen')){
                                                        echo '<div class="alert alert-success alert-dismissible">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                                                            echo $this->session->flashdata('mensajen');
                                                        echo '</div>';
                                                }
                                                
                                                
                                                ?>

                                                <?php echo form_open('kliente/add');?>

                                                <div class="form-group">
                                                    <label>Naran Kliente</label>
                                                    <input class="form-control" type="text" name="naran_kliente" placeholder="Naran Kliente" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Hela Fatin</label>
                                                    <input class="form-control" type="text" name="hela_fatin" placeholder="Hela Fatin" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>No Telefone</label>
                                                    <input class="form-control" type="text" name="no_telefone" placeholder="No Telefone" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>ID Aimoruk</label>
                                                    <input class="form-control" type="text" name="id_aimoruk" placeholder="ID Aimoruk" required>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kansela</button>
                                                    <button type="submit" class="btn btn-primary">Rai</button>
                                                </div>
                                                <?php echo form_close();?>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->




                    <!-- Modal Aummenta Edit-->
                    <?php foreach ($kliente as $key => $value) { ?>
                    <div class="modal fade" id="edit<?php $value->id_kliente ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Edit Dados Kliente</h4>
                                                </div>
                                                <div class="modal-body">

                                                <?php echo form_open('kliente/edit'.$value->id_kliente);?>

                                                <div class="form-group">
                                                    <label>Naran Kliente</label>
                                                    <input class="form-control" type="text" name="naran_kliente" value="<?= $value->naran_kliente?>" placeholder="Naran Kliente" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Hela Fatin</label>
                                                    <input class="form-control" type="text" name="hela_fatin" value="<?= $value->hela_fatin?>" placeholder="Hela Fatin" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>No Telefone</label>
                                                    <input class="form-control" type="text" name="no_telefone" value="<?= $value->no_telefone?>" placeholder="No Telefone" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>ID Aimoruk</label>
                                                    <input class="form-control" type="text" name="id_aimoruk" value="<?= $value->id_aimoruk?>" placeholder="ID Aimoruk" required>
                                                </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Kansela</button>
                                                    <button type="submit" class="btn btn-primary">Rai</button>
                                                </div>
                                                <?php echo form_close(); ?>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <?php } ?>