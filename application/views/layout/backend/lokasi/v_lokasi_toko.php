<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Form elements </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic form elements</h4>
                        <p class="card-description"> Basic form elements </p>
                        <?php
                        echo validation_errors(
                            ' <div class="alert alert-danger alert-dismissible" role="alert">',
                            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>'
                        );
                        echo form_open('admin/lokasi') ?>
                        <div class="form-group">
                            <label for="exampleInputName1">Provinsi</label>
                            <select class="form-control" id="exampleSelectGender" name="provinsi">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Kota</label>
                            <select class="form-control" id="exampleSelectGender" name="kota">
                                <option value="<?= $lokasi->lokasi ?>"><?= $lokasi->lokasi ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Nama Toko</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" name="nama_toko" value="<?= $lokasi->nama_toko ?>" placeholder="Nama Toko">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputCity1" name="alamat" value="<?= $lokasi->alamat ?>" placeholder="Location">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>