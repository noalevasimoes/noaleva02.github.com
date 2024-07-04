                        <div class="row" >
                        <div class="col-lg-100 col-md-100">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Aumenta </button>
                                </div>
                                <div class="panel-body" style="height: 100%; overflow-y: auto;"> 

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 10%;">User</th>
                                        <th style="width: 15%;">N_Aimoruk</th>
                                        <th style="width: 10%;">Kategoria</th>
                                        <th style="width: 15%;">T_Aimoruk</th>
                                        <th style="width: 10%;">Presu</th>
                                        <th style="width: 15%;">M_Aimoruk</th>
                                        <th style="width: 5%;">Stok</th>
                                        <th style="width: 10%;">Supplier</th>
                                        <th style="width: 10%;">Data Validade</th>
                                        <th style="width: 10%;">Asaun</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach ($aimoruk as $key => $value) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value->id_admin ?></td>
                                            <td><?= $value->naran_aimoruk ?></td>
                                            <td><?= $value->id_kategoria ?></td>
                                            <td><?= $value->tipu_aimoruk ?></td>
                                            <td><?= $value->presu_faan ?></td>
                                            <td><?= $value->modelu_aimoruk ?></td>
                                            <td><?= $value->stok ?></td>
                                            <td><?= $value->id_supllier ?></td>
                                            <td><?= $value->data_validade ?></td>
                                            <td>
                                            <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?php $value->id_aimoruk?>"><i class="fa fa-pencil"></i></button>
                                            <a href="<?= base_url('aimoruk/delete/'.$value->id_aimoruk) ?>" onclick="return confirm('ita boot hakarak hamos dados ne?')" class="btn btn-xs btn-danger" style="color:black;"><i class="fa fa-trash"></i></a>
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
                                                    <h4 class="modal-title" id="myModalLabel">Aumenta Dados Aimoruk</h4>
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

                                                <?php echo form_open('aimoruk/add');?>

                                                <div class="form-group">
                                                    <label>ID Admin</label>
                                                    <input class="form-control" type="text" name="id_admin" placeholder="ID Admin" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Naran Aimoruk</label>
                                                    <input class="form-control" type="text" name="naran_aimoruk" placeholder="Naran Aimoruk" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>ID Kategoria</label>
                                                    <input class="form-control" type="text" name="id_kategoria" placeholder="ID Kategoria" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tipu Aimoruk</label>
                                                    <input class="form-control" type="text" name="tipu_aimoruk" placeholder="Tipu Aimoruk" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Presu</label>
                                                    <input class="form-control" type="text" name="presu_faan" placeholder="Presu" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Modelu Aimoruk</label>
                                                    <input class="form-control" type="text" name="modelu_aimoruk" placeholder="Modelu Aimoruk" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Stok</label>
                                                    <input class="form-control" type="text" name="stok" placeholder="Stok" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>ID Supplier</label>
                                                    <input class="form-control" type="text" name="id_supllier" placeholder="ID Supplier" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Data Validade</label>
                                                    <input class="form-control" type="text" name="data_validade" placeholder="Data Validade" required>
                                                </div>

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
                                    <?php foreach ($aimoruk as $key => $value) { ?>
                        <div class="modal fade" id="edit<?php $value->id_aimoruk?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Hadia Dados Aimoruk</h4>
                                                </div>
                                                <div class="modal-body">
                                                <?php echo form_open('aimoruk/edit');?>

                                                <div class="form-group">
                                                    <label>ID Admin</label>
                                                    <input class="form-control" type="text" name="id_admin" placeholder="ID Admin" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Naran Aimoruk</label>
                                                    <input class="form-control" type="text" name="naran_aimoruk" placeholder="Naran Aimoruk" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>ID Kategoria</label>
                                                    <input class="form-control" type="text" name="id_kategoria" placeholder="ID Kategoria" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tipu Aimoruk</label>
                                                    <input class="form-control" type="text" name="tipu_aimoruk" placeholder="Tipu Aimoruk" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Presu</label>
                                                    <input class="form-control" type="text" name="presu_faan" placeholder="Presu" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Modelu Aimoruk</label>
                                                    <input class="form-control" type="text" name="modelu_aimoruk" placeholder="Modelu Aimoruk" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Stok</label>
                                                    <input class="form-control" type="text" name="stok" placeholder="Stok" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>ID Supplier</label>
                                                    <input class="form-control" type="text" name="id_supllier" placeholder="ID Supplier" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Data Validade</label>
                                                    <input class="form-control" type="text" name="data_validade" placeholder="Data Validade" required>
                                                </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Rai</button>
                                                </div>
                                                <?php echo form_close();?>
                                            </div>
                                            <?php }?>