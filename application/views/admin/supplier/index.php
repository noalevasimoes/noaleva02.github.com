<div class="row" >
                        <div class="col-lg-40 col-md-40">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Aumenta </button>
                                </div>
                                <div class="panel-body col-lg-40 col-md-40 ">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead style="text-align: center;">
                                    <tr>
                                        <th>No</th>
                                        <th>Naran Supplier</th>
                                        <th>Fatin Supplier</th>
                                        <th>No Telefone</th>
                                        <th>Data Supplier</th>
                                        <th>Asaun</th>

                                    </tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        <?php $no=1; foreach ($supplier as $key => $value) { ?>
                                            
                                        
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value->naran_supplier ?></td>
                                            <td><?= $value->fatin_supplier	 ?></td>
                                            <td><?= $value->no_telefone ?></td>
                                            <td><?= $value->data_supplier ?></td>
                                            <td>
                                            <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?= $value->id_supplier?>"><i class="fa fa-pencil"></i></button>
                                            <a href="<?= base_url('supplier/delete/'.$value->id_supplier) ?>" onclick="return confirm('ita boot hakarak hamos dados ne?')" class="btn btn-xs btn-danger" style="color:black;"><i class="fa fa-trash"></i></a>
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
                                                    <h4 class="modal-title" id="myModalLabel">Aumenta Dados Supplier</h4>
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

                                                <?php echo form_open('supplier/add');?>

                                                <div class="form-group">
                                                    <label>Naran Supplier</label>
                                                    <input class="form-control" type="text" name="naran_supplier" placeholder="naran_supplier" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Fatin Supplier</label>
                                                    <input class="form-control" type="text" name="fatin_supplier" placeholder="Fatin Supplier" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>No Telefone</label>
                                                    <input class="form-control" type="text" name="no_telefone" placeholder="No Telefone" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Data Supplier</label>
                                                    <input class="form-control" type="text" name="data_supplier" placeholder="Data Supplier" required>
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

<!-- 
                                    Modal Edit -->
                                    <?php foreach ($supplier as $key => $value) { ?>
                         <div class="modal fade" id="edit<?= $value->id_supplier?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Aumenta Dados Supplier</h4>
                                                </div>
                                                <div class="modal-body">

                                                <?php echo form_open('supplier/edit');?>

                                                <div class="form-group">
                                                    <label>Naran Supplier</label>
                                                    <input class="form-control" type="text" name="naran_supplier" value="naran_supplier" placeholder="naran_supplier" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Fatin Supplier</label>
                                                    <input class="form-control" type="text" name="fatin_supplier" value="fatin_supplier" placeholder="Fatin Supplier" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>No Telefone</label>
                                                    <input class="form-control" type="text" name="no_telefone" value="no_telefone" placeholder="No Telefone" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Data Supplier</label>
                                                    <input class="form-control" type="text" name="data_supplier" value="data_supplier" placeholder="Data Supplier" required>
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
                                    <?php } ?>