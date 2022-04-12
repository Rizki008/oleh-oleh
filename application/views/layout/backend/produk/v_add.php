<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> <?= $title ?> </h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Forms</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Basic <?= $title ?></h4>
						<?php echo validation_errors('<div class="alert-warning alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h5><i class="icon fa da-exclamation-triangle"></i>', '</h5></div>');

						if (isset($error_upload)) {
							echo '<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h5><i class="icon fa fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
						}

						echo form_open_multipart('produk/add') ?>

						<div class="form-group">
							<label for="exampleInputName1">Nama Produk</label>
							<input type="text" class="form-control" name="nama_produk" value="<?= set_value('nama_produk') ?>" id="exampleInputName1" placeholder="Nama Produk" required>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail3">Kategori Produk</label>
							<select class="form-control" id="id_kategori" name="id_kategori" required>
								<option>---Pilih Kategori Produk---</option>
								<?php foreach ($kategori as $key => $value) { ?>
									<option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword4">Berat Produk</label>
							<input type="number" class="form-control" name="berat" value="<?= set_value('berat') ?>" id="exampleInputPassword4" placeholder="Berat Produk" required>
						</div>
						<div class="form-group">
							<label for="exampleSelectGender">Satuan berat</label>
							<input type="text" class="form-control" name="product_unit" value="<?= set_value('product_unit') ?>" placeholder="Satuan Berat" required>
						</div>
						<div class="form-group">
							<label>Harga</label>
							<input type="text" name="harga" class="form-control" value="<?= set_value('harga') ?>" placeholder="Harga" required>
						</div>
						<div class="form-group">
							<label for="exampleInputCity1">Stock</label>
							<input type="number" class="form-control" name="stock" value="<?= set_value('stock') ?>" id="exampleInputCity1" placeholder="Stock">
						</div>
						<div class="form-group">
							<label for="exampleTextarea1">Deskripsi</label>
							<textarea class="form-control" name="deskripsi" id="exampleTextarea1" rows="4"><?= set_value('deskripsi') ?></textarea>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Gambar</label>
									<input type="file" name="gambar" class="form-control" id="preview_gambar" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<img src="<?= base_url('assets/gambar/nopoto.jpg') ?>" id="gambar_load" width="400px">
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary mr-2">Submit</button>
						<button class="btn btn-light">Cancel</button>
						<?php echo form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
