<?php
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Laporan Pengeluaran_<?= date('Y-m-d') ?></title>
</head>

<body>
    <div class="text-center">
        <h3>Laporan Pengeluaran</h3>
        <h5>Filter : <?= indo_date($start) ?> s/d <?= indo_date($end) ?></h5>
    </div>
    <hr style="width: 40%;">
    <b style="text-align: center;"> </b>
    <br>
    Print On : <?= date('Y-m-d H:i:s'); ?>

    <table class=" table table-striped table-bordered" style="padding-top: 10px;">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Category</th>
                <th class="text-center">Product Name</th>
                <th class="text-center">Size</th>
                <th class="text-center">Harga Beli</th>
                <th class="text-center">Qty</th>
                <th class="text-center">Tgl Beli</th>
                <th class="text-center">Supplier</th>
                <th class="text-center">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <?php foreach ($row as $key => $data) { ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= $data->name_categories ?></td>
                    <td><?= $data->item_name ?></td>
                    <td style="text-align: center;"><?= $data->size ?></td>
                    <td><?= indo_currency($data->harga_beli)  ?></td>
                    <td style="text-align: center;"><?= $data->stock_awal ?></td>
                    <td class="text-center"><?= $data->tgl_pembelian  ?></td>
                    <td class="text-center"><?= $data->name  ?></td>
                    <td class="text-left"><?= indo_currency($data->harga_beli * $data->stock_awal); ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="8" class="text-right">
                    <b>Grand Total</b>
                </td>
                <td colspan="1" class="text-left">
                    <?php foreach ($row_total as $key => $data) { ?>
                        <?= indo_currency($row_total->grand_total) ?>
                    <?php } ?>
                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>