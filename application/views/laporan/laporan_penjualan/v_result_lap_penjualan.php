<?php
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Laporan Penjualan_<?= date('Y-m-d') ?></title>
</head>

<body>
	<div class="text-center">
		<h3>Laporan Penjualan</h3>
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
				<th class="text-center">Harga Jual</th>
				<th class="text-center">Qty</th>
				<th class="text-center">Tgl Jual</th>
				<th class="text-center">Customers</th>
				<th class="text-center">Kasir</th>
				<th class="text-center">Total</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; ?>
			<?php foreach ($result as $key => $data) { ?>
				<tr>
					<td class="text-center"><?= $no++; ?></td>
					<td><?= $data->name_categories ?></td>
					<td><?= $data->item_name ?></td>
					<td class="text-center"><?= $data->size ?></td>
					<td><?= indo_currency($data->harga_jual) ?></td>
					<td class="text-center"><?= $data->qty_sales ?></td>
					<td class="text-center"><?= $data->date_sale ?></td>
					<td><?= $data->sales_customers == 1 ? 'Umum' : $data->sales_customers ?></td>
					<td><?= $data->user_name ?></td>
					<td class="text-right"><?= indo_currency($data->total_sales) ?></td>
				</tr>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="9" class="text-right">
					<b>Grand Total</b>
				</td>
				<td colspan="1" class="text-right">
					<?php foreach ($grand_total as $key => $data) { ?>
						<?= indo_currency($data->grand_total) ?>
					<?php } ?>
				</td>
			</tr>
		</tfoot>
	</table>
</body>

</html>
