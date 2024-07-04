<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Aimoruk</title>
</head>
<body style="background-image:url(<?= base_url() ?>template/front-end/images/kj.jpg)">
<h1 style="text-align: center;">Dados Aimoruk</h1>
<div class="row" >

<div class="table-responsive">
    <table border="1" class="table table-bordered table-striped table-hover">
        <thead style="background-color: #f0f0f0; ">
            <tr>
                <th style="width: 5%; border: 1px solid #000;">No</th>
                <th style="width: 10%; border: 1px solid #000;">User</th>
                <th style="width: 15%; border: 1px solid #000;">Naran Aimoruk</th>
                <th style="width: 10%; border: 1px solid #000;">Kategoria</th>
                <th style="width: 10%; border: 1px solid #000;">Tipu Aimoruk</th>
                <th style="width: 10%; border: 1px solid #000;">Presu</th>
                <th style="width: 10%; border: 1px solid #000;">Modelu Aimoruk</th>
                <th style="width: 10%; border: 1px solid #000;">Stok</th>
                <th style="width: 10%; border: 1px solid #000;">Supplier</th>
                <th style="width: 20%; border: 1px solid #000;">Data Validade</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($aimoruk as $key => $value) { ?>
            <tr>
                <td style="border: 1px solid #000;"><?= $no++; ?></td>
                <td style="border: 1px solid #000;"><?= $value->id_admin ?></td>
                <td style="border: 1px solid #000;"><?= $value->naran_aimoruk ?></td>
                <td style="border: 1px solid #000;"><?= $value->id_kategoria ?></td>
                <td style="border: 1px solid #000;"><?= $value->tipu_aimoruk ?></td>
                <td style="border: 1px solid #000;"><?= $value->presu_faan ?></td>
                <td style="border: 1px solid #000;"><?= $value->modelu_aimoruk ?></td>
                <td style="border: 1px solid #000;"><?= $value->stok ?></td>
                <td style="border: 1px solid #000;"><?= $value->id_supllier ?></td>
                <td style="border: 1px solid #000;"><?= $value->data_validade ?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
   
    
</body>
</html>

                               





