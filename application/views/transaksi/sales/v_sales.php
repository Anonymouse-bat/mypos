<?php
date_default_timezone_set("Asia/Bangkok");
?>

<section class="content-header">
	<h1>Sales <small>Penjualan</small></h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= site_url('Dashboard') ?>">
				<i class="fa fa-dashboard"></i>
			</a>
		</li>
		<li>
			Transaksi
		</li>
		<li class="active">
			Sales
		</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-4">
			<div class="box box-widget">
				<div class="box-body">
					<table width="100%">
						<tr>
							<td style="vertical-align: top;">
								<label for="Date">Date</label>
							</td>
							<td>
								<div class="form-group">
									<input type="date" name="date" id="date" value="<?= date('Y-m-d') ?>" class="form-control">
								</div>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<label for="Date">Kasir</label>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="" id="" value="<?= $this->fungsi->user_login()->name ?>" class="form-control" readonly>
								</div>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<label for="Date">Customers</label>
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="customers_id" id="customers_id" class="form-control" autofocus>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<!--  -->
		<div class="col-md-4">
			<div class="box box-widget">
				<div class="box-body">
					<table width="100%">
						<tr>
							<td style="vertical-align: top; width: 27%">
								<label for="Date">Product Name</label>
							</td>
							<td>
								<div class="form-group input-group">
									<input type="hidden" id="price">
									<input type="hidden" id="stock">
									<input type="hidden" id="item_id">
									<input type="text" id="item_name" class="form-control" autofocus readonly>
									<span class="input-group-btn">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
											<i class="fa fa-search"></i>
										</button>
									</span>
								</div>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<label for="Date">Qty</label>
							</td>
							<td>
								<div class="form-group">
									<input type="number" name="qty" id="qty" value="1" min="1" class="form-control">
								</div>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
							</td>
							<td>
								<div class="form-group">
									<button type="button" id="add_cart" class="btn btn-primary">
										<i class="fa fa-cart-plus"></i>
									</button>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<!--  -->
		<div class="col-md-4">
			<div class="box box-widget">
				<div class="box-body">
					<div class="text-right">
						<h4>Invoice <b><span id="invoice"><?= $invoice ?></span></b></h4>
						<h1><b><span id="grand_total2" style="font-size: 50pt;">0</span></b></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  -->
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-body table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th class="text-center">Product Item</th>
								<th class="text-center">Price</th>
								<th class="text-center">Qty</th>
								<th class="text-center">Discount Item</th>
								<th class="text-center" style="width: 10%;">Total</th>
								<th class="text-center" style="width: 15%;">Action</th>
							</tr>
						</thead>
						<tbody id="cart_table">
							<?php $this->view('transaksi/sales/v_cart_data') ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!--  -->
	<div class="row">
		<div class="col-md-3">
			<div class="box">
				<div class="box-body">
					<table style="width: 100%;">
						<tr>
							<td style="vertical-align: top; width: 30%">
								<label for="sub_total">Sub Total</label>
							</td>
							<td>
								<div class="form-group">
									<input type="number" name="sub_total" id="sub_total" value="" class="form-control" readonly>
								</div>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<label for="discount">Discount</label>
							</td>
							<td>
								<div class="form-group">
									<input type="number" name="discount" id="discount" min="0" class="form-control" placeholder="Discount">
								</div>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top;">
								<label for="grand_total">Grand Total</label>
							</td>
							<td>
								<div class="form-group">
									<input type="number" name="grand_total" id="grand_total" class="form-control" readonly>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<!--  -->
		<div class="col-md-3">
			<div class="box">
				<div class="box-body">
					<table style="width: 100%;">
						<tr>
							<td style="vertical-align: top; width: 29%">
								<label for="cash">Cash</label>
							</td>
							<td>
								<div class="form-group">
									<input type="number" id="cash" min="0" class="form-control" placeholder="Cash">
								</div>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 29%">
								<label for="note">Status Pembayaran</label>
							</td>
							<td>
								<div class="form-group">
									<select name="note" id="note" class="form-control select2">
										<option value="">-- Pilih --</option>
										<option value="1">Lunas</option>
										<option value="0">Belum Lunas</option>
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: top; width: 29%">
								<label for="change">Change</label>
							</td>
							<td>
								<div class="form-group">
									<input type="number" id="change" value="0" min="0" class="form-control" readonly>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<!--  -->
		<div class="col-md-3">
			<div class="box">
				<div class="box-body">
					<button id="cancel_payment" class="btn btn-warning" style="width: 100%;">
						<i class="fa fa-refresh"></i>
					</button>
					<hr style="width: 70%;">
					<button id="process_payment" class="btn btn-success" style="width: 100%;">
						<i class="fa fa-plus"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal  Add Product -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Product Items</h4>
			</div>
			<div class="modal-body table-responsive">
				<table class="table table-bordered table-striped" id="mytable">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Product Name</th>
							<th class="text-center">Size</th>
							<th class="text-center">Price (Rp)</th>
							<th class="text-center">Stock</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($item as $key => $data) { ?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data->item_name ?></td>
								<td><?= $data->size ?></td>
								<td><?= indo_currency($data->harga_jual)  ?></td>
								<td class="text-center"><?= $data->stock ?></td>
								<td class="text-center">
									<button class="btn btn-success btn-sm" id="select" data-item_name="<?= $data->item_name ?>" data-price="<?= $data->harga_jual ?>" data-item_id="<?= $data->item_id ?>" data-product="<?= $data->item_name ?>" data-item="<?= $data->item_id ?>" data-stock="<?= $data->stock ?>">
										<i class="fa fa-check"></i>
									</button>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- Modal  Edit Product -->
<div class="modal fade" id="modal-item-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Update Product Items</h4>
			</div>
			<div class="modal-body table-responsive">
				<input type="hidden" id="cartid_item">
				<div class="form-group">
					<label for="product_item">Product Item</label>
					<input type="text" name="product_item" id="product_item" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label for="price_item">Price</label>
					<input type="number" name="price_item" id="price_item" min="0" class="form-control">
				</div>
				<div class="form-group">
					<label for="qty_item">Qty</label>
					<input type="number" name="qty_item" id="qty_item" min="1" class="form-control">
				</div>
				<div class="form-group">
					<label for="total_before">Total Before Discount</label>
					<input type="number" name="total_before" id="total_before" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label for="discount_item">Discount Per Item</label>
					<input type="number" name="discount_item" id="discount_item" min="0" class="form-control">
				</div>
				<div class="form-group">
					<label for="total_item">Total After Discount</label>
					<input type="number" name="total_item" id="total_item" min="0" class="form-control" readonly>
				</div>
			</div>
			<div class="modal-footer">
				<div class="pull-right">
					<button type="button" id="edit_cart" class="btn btn-success">
						<i class="fa fa-plus"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$(document).on('click', '#select', function() {
			$('#item_id').val($(this).data('item_id'));
			$('#price').val($(this).data('price'));
			$('#item_name').val($(this).data('item_name'));
			$('#stock').val($(this).data('stock'));
			$('#exampleModal').modal('hide');
		});
	});



	$(document).on('click', '#add_cart', function() {
		var item_id = $('#item_id').val()
		var price = $('#price').val()
		var stock = $('#stock').val()
		var qty = $('#qty').val()

		if (item_id == '') {
			swal("Error!", "Product belum dipilih!", "error");
			$('#item_id').focus();
		} else if (stock < 1) {
			swal("Error!", "Stock tidak mencukupi!", "error");
			$('#item_id').val('')
		} else {
			$.ajax({
				type: 'POST',
				url: '<?= site_url('Sales/process') ?>',
				data: {
					'add_cart': true,
					'item_id': item_id,
					'price': price,
					'qty': qty
				},
				dataType: 'json',
				success: function(result) {
					if (result.success == true) {
						$('#cart_table').load('<?= site_url('sales/v_cart_data') ?>', function() {
							swal("Success!", "Data ditambahkan ke cart!", "success");
							calculate()
						})
						$('#item_name').val('');
						$('#item_id').val('');
						$('#qty').val(1);

					} else {
						swal("Error!", "Data Cart gagal disimpan!", "error");
					}
				}
			})
		}
	});

	$(document).on('click', '#del_cart', function() {

		if (confirm('Apakah Yakin?')) {
			var cart_id = $(this).data('cartid')
			$.ajax({
				type: 'POST',
				url: '<?= site_url('Sales/cart_del'); ?>',
				dataType: 'json',
				data: {
					'cart_id': cart_id
				},
				success: function(result) {
					if (result.success == true) {
						$('#cart_table').load('<?= site_url('sales/v_cart_data') ?>', function() {
							swal("Success!", "Data berhasil dihapus!", "success");
							calculate()
						})
					} else {
						swal("Success!", "Data gagal dihapus!", "success");
					}
				}
			})
		} else {
			swal("Error!", "Data gagal dihapus!", "error");
		}
	})

	// Update On click with Id
	$(document).ready(function() {
		$(document).on('click', '#update_cart', function() {
			$('#cartid_item').val($(this).data('cartid'));
			$('#product_item').val($(this).data('item_name'));
			$('#price_item').val($(this).data('price'));
			$('#qty_item').val($(this).data('qty'));
			$('#total_before').val($(this).data('price') * $(this).data('qty'));
			$('#discount_item').val($(this).data('discount_item'));
			$('#total_item').val($(this).data('total'));
		});
	});

	function count_edit_modal() {
		var price = $('#price_item').val();
		var qty = $('#qty_item').val();
		var discount = $('#discount_item').val();

		total_before = price * qty;
		$('#total_before').val(total_before);

		total = (price - discount) * qty;
		$('#total_item').val(total);

	}

	$(document).on('keyup mouseup', '#price_item, #qty_item, #discount_item', function() {
		count_edit_modal();
	})

	$(document).on('click', '#edit_cart', function() {
		var cart_id = $('#cartid_item').val()
		var price = $('#price_item').val()
		var qty = $('#qty_item').val()
		var discount = $('#discount_item').val()
		var total = $('#total_item').val()

		if (price == '') {
			swal("Error!", "Harga Tidak Boleh Kosong!", "error");
			$('#price_item').focus();
		} else if (qty == '' || qty < 1) {
			swal("Error!", "Qty Tidak Boleh Kosong!", "error");
			$('#qty_item').focus();
		} else {
			$.ajax({
				type: 'POST',
				url: '<?= site_url('Sales/process') ?>',
				data: {
					'edit_cart': true,
					'cart_id': cart_id,
					'price': price,
					'qty': qty,
					'discount': discount,
					'total': total
				},
				dataType: 'json',
				success: function(result) {
					if (result.success == true) {
						$('#cart_table').load('<?= site_url('sales/v_cart_data') ?>', function() {
							swal("Success!", "Data Item Berhasil Di Update ke cart!", "success");
							calculate()
						})
						$('#modal-item-edit').modal('hide');
					} else {
						swal("Error!", "Data Item Cart Gagal di Update!", "error");
					}
				}
			})
		}
	});

	function calculate() {
		var subtotal = 0;

		$('#cart_table tr').each(function() {
			subtotal += parseInt($(this).find('#total').text())
		})
		isNaN(subtotal) ? $('#sub_total').val(0) : $('#sub_total').val(subtotal)

		var discount = $('#discount').val()
		var grand_total = subtotal - discount

		if (isNaN(grand_total)) {
			$('#grand_total').val(0)
			$('#grand_total2').text(0)
		} else {
			$('#grand_total').val(grand_total)
			$('#grand_total2').text(grand_total)
		}


		var cash = $('#cash').val();
		cash != 0 ? $('#change').val(cash - grand_total) : $('#change').val(0);
	}

	$(document).on('keyup mouseup', '#discount, #cash', function() {
		calculate();
	})

	$(document).ready(function() {
		calculate()
	})

	// Proses payment

	$(document).on('click', '#process_payment', function() {
		var customers_id = $('#customers_id').val()
		var subtotal = $('#sub_total').val()
		var discount = $('#discount').val()
		var grandtotal = $('#grand_total').val()
		var cash = $('#cash').val()
		var change = $('#change').val()
		var note = $('#note').val()
		var date = $('#date').val()

		if (subtotal < 1) {
			swal("Error!", "Belum Ada Product Item Yang Dipilih!", "error");
		} else if (cash < 1) {
			swal("Error!", "Jumlah Uang Cash Belum Diinput!", "error");
			$('#cash').focus();
		} else if (customers_id == '') {
			swal("Error!", "Data Customers Belum Diinput!", "error");
			$('#customers_id').focus();
		} else if (note == '') {
			swal("Error!", "Data Status Pembayaran Belum Diinput!", "error");
			$('#customers_id').focus();
		} else {
			if (confirm('Yakin Proses transaksi Ini ?')) {
				$.ajax({
					type: 'POST',
					url: '<?= site_url('Sales/process') ?>',
					data: {
						'process_payment': true,
						'customers_id': customers_id,
						'subtotal': subtotal,
						'discount': discount,
						'grandtotal': grandtotal,
						'cash': cash,
						'change': change,
						'note': note,
						'date': date
					},
					dataType: 'json',
					success: function(result) {
						if (result.success == true) {
							alert('Data Behasil Disimpan');
							window.open('<?= site_url('Sales/cetak/') ?>' + result.sale_id, '_blank');
							// window.location.reload();
						} else {
							swal("Error!", "Transaksi Gagal!", "error");
						}
						location.href = '<?= site_url('Sales') ?>'
					}
				})
			}
		}
	});

	$("#customers_id").on({
		keydown: function(e) {
			if (e.which === 32)
				return false;
		},
		keyup: function() {
			this.value = this.value.toLowerCase();
		},
		change: function() {
			this.value = this.value.replace(/\s/g, "");

		}
	});
</script>
