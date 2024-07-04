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
                                        <th>Naran Kategoria</th>
                                        <th>Deskrisaun</th>
                                        <th>Asaun</th>

                                    </tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        <?php $no=1; foreach ($kategoria as $key => $value) { ?>
                                            
                                        
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value->naran_kategoria ?></td>
                                            <td><?= $value->deskrisaun ?></td>
                                            <td>
                                            <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?= $value->id_kategoria?>"><i class="fa fa-pencil"></i></button>
                                                <a href="<?= base_url('kategoria/delete/'.$value->id_kategoria) ?>" onclick="return confirm('ita boot hakarak hamos dados ne?')" class="btn btn-xs btn-danger" style="color:black;"><i class="fa fa-trash"></i></a>
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
                                                    <h4 class="modal-title" id="myModalLabel">Aumenta Dados Kategoria</h4>
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

                                                <?php echo form_open('kategoria/add');?>

                                                <div class="form-group">
                                                    <label>Naran Kategoria</label>
                                                    <input class="form-control" type="text" name="naran_kategoria" placeholder="Naran Kategoria" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Deskrisaunk</label>
                                                    <input class="form-control" type="text" name="deskrisaun" placeholder="Deskrisaun" required>
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

                                    <!-- Modal Edit -->
                                    <?php foreach ($kategoria as $key => $value) { ?>
                        <div class="modal fade" id="edit<?= $value->id_kategoria ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Hadia Dados Aimoruk</h4>
                                                </div>
                                                <div class="modal-body">
                                                <?php echo form_open('kategoria/edit');?>

                                                <div class="form-group">
                                                    <label>Naran Kategoria</label>
                                                    <input class="form-control" type="text" name="naran_kategoria" value="<?= $value->naran_kategoria?>" placeholder="Naran Kategoria" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Deskrisaunk</label>
                                                    <input class="form-control" type="text" name="deskrisaun" value="<?= $value->deskrisaun?>" placeholder="Deskrisaun" required>
                                                </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Rai</button>
                                                </div>
                                                <?php echo form_close();?>
                                            </div>
                                            <?php }?>

                        