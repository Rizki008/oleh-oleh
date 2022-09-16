<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="<?= base_url() ?>distribution/vendor/glightbox/css/glightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="<?= base_url() ?>distribution/vendor/nouislider/nouislider.min.css">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>distribution/vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="<?= base_url() ?>distribution/vendor/swiper/swiper-bundle.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= base_url() ?>distribution/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= base_url() ?>distribution/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url() ?>distribution/img/favicon.png">
</head>

<body>
    <div class="page-holder">
        <!-- navbar-->

        <?php $kategori = $this->m_home->kategori_produk(); ?>
        <header class="header bg-white">
            <div class="container px-lg-3">
                <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="<?= base_url() ?>"><span class="fw-bold text-uppercase text-dark">TOKO IPENG</span></a>
                    <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <!-- Link--><a class="nav-link active" href="<?= base_url() ?>">Home</a>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
                                <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown">
                                    <?php foreach ($kategori as $key => $value) { ?>
                                        <a class="dropdown-item border-0 transition-link" href="<?= base_url('/home/kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?></a>
                                    <?php } ?>
                                </div>
                            </li>
                            <?php if ($this->session->userdata('username') == "") { ?>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesanan Saya</a>
                                    <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="#">Pesanan Saya</a></div>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesanan Saya</a>
                                    <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="<?= base_url('pesanan') ?>">Keranjang</a></div>
                                </li>
                            <?php } ?>
                        </ul>
                        <?php $keranjang = $this->cart->contents();
                        $jml_item = 0;
                        foreach ($keranjang as $key => $value) {
                            $jml_item = $jml_item + $value['qty'];
                        } ?>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('belanja') ?>"> <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal">(<?= $jml_item ?>)</small></a></li>
                            <?php
                            if ($this->session->userdata('username') == "") { ?>
                                <li class="nav-item"><a class="nav-link" href="<?= base_url('pelanggan/login') ?>"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
                            <?php } else { ?>
                                <li class="nav-item"><a class="nav-link" href="<?= base_url('pelanggan/login') ?>"> <i class="fas fa-user me-1 text-gray fw-normal"></i><?= $this->session->userdata('nama_pelanggan'); ?></a></li>
                            <?php } ?>
                            <?php
                            if ($this->session->userdata('username') == "") { ?>
                            <?php } else { ?>
                                <li class="nav-item"><a class="nav-link" href="<?= base_url('pelanggan/logout') ?>"> <i class="fa fa-sign-out-alt me-1 text-gray fw-normal"></i>Logout</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--  Modal -->
        <div class="modal fade" id="productView" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content overflow-hidden border-0">
                    <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body p-0">
                        <div class="row align-items-stretch">
                            <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(img/product-5.jpg)" href="img/product-5.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
                            <div class="col-lg-6">
                                <div class="p-4 my-md-4">
                                    <ul class="list-inline mb-2">
                                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                                    </ul>
                                    <h2 class="h4">Red digital smartwatch</h2>
                                    <p class="text-muted">$250</p>
                                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                                    <div class="row align-items-stretch mb-4 gx-0">
                                        <div class="col-sm-7">
                                            <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                                <div class="quantity">
                                                    <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                    <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="cart.html">Add to cart</a></div>
                                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- HERO SECTION-->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                        <div class="col-lg-6">
                            <h1 class="h2 text-uppercase mb-0">Checkout</h1>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                    <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-dark" href="cart.html">Cart</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-5">
                <!-- BILLING ADDRESS-->
                <h2 class="h5 text-uppercase mb-4">Detail Pembelian</h2>
                <?php
                echo validation_errors('<div class="alert alert-warning alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

                //notifikasi gagal upload gambar
                if (isset($error_upload)) {
                    echo '<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h5><i class="icon fas fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
                }
                echo form_open('belanja/cekout');
                $no_order = date('Ymd') . strtoupper(random_string('alnum', 8)); ?>
                <div class="row">
                    <div class="col-lg-8">
                        <form action="#">
                            <div class="row gy-3">
                                <div class="col-lg-6">
                                    <label class="form-label text-sm text-uppercase" for="firstName">Nama Pelanggan </label>
                                    <input class="form-control form-control-lg" type="text" id="firstName" name="id_pelanggan" value="<?= $this->session->userdata('nama_pelanggan'); ?>" readonly placeholder="Enter your first name">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label text-sm text-uppercase" for="phone">No Telephone </label>
                                    <input class="form-control form-control-lg" type="tel" id="phone" name="no_tlpn" value="<?= $this->session->userdata('no_tlpn'); ?>" readonly placeholder="e.g. +02 245354745">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label text-sm text-uppercase" for="company">Kode Post </label>
                                    <input class="form-control form-control-lg" type="text" id="company" name="kode_pos" value="<?= $this->session->userdata('kode_pos'); ?>" readonly placeholder="Your company name">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label text-sm text-uppercase" for="company">Alamat Lengkap </label>
                                    <input class="form-control form-control-lg" type="text" id="company" name="alamat" value="<?= $this->session->userdata('alamat'); ?>" readonly placeholder="Your company name">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="form-label text-sm text-uppercase" for="country">Provinsi</label>
                                    <select class="form-control" id="country" name="provinsi" data-customclass="form-control form-control-lg rounded-0">
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="form-label text-sm text-uppercase" for="country">Kota</label>
                                    <select class="form-control" id="country" name="kota" data-customclass="form-control form-control-lg rounded-0">
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="form-label text-sm text-uppercase" for="country">Expedisi</label>
                                    <select class="form-control" id="country" name="expedisi" data-customclass="form-control form-control-lg rounded-0">
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="form-label text-sm text-uppercase" for="country">Paket</label>
                                    <select class="form-control" id="country" name="paket" data-customclass="form-control form-control-lg rounded-0">
                                    </select>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button class="btn btn-dark" type="submit">Proses Pembelian</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- ORDER SUMMARY-->
                    <div class="col-lg-4">
                        <div class="card border-0 rounded-0 p-lg-4 bg-light">
                            <div class="card-body">
                                <?php $i = 1; ?>

                                <?php $total_berat = 0;
                                foreach ($this->cart->contents() as $items) {
                                    $produk = $this->m_home->detail_produk($items['id']);
                                    $berat = $items['qty'] * $produk->berat;
                                    $total_berat =  $total_berat + $berat;
                                ?>
                                <?php } ?>
                                <h5 class="text-uppercase mb-4">Orderan Anda</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">Subtotal</strong><span class="text-muted small">Rp. <?php echo $this->cart->format_number($this->cart->total(), 0) ?></span></li>
                                    <li class="border-bottom my-2"></li>
                                    <li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">Ongkos Kirim</strong><span class="text-muted small ongkir" id="ongkir"><label class="ongkir" id="ongkir"></label></span></li>
                                    <li class="border-bottom my-2"></li>
                                    <li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">Berat</strong><span class="text-muted smal"><?= $total_berat ?> Gr</span></li>
                                    <li class="border-bottom my-2"></li>
                                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small fw-bold">Total</strong><span class="total order-total" id="total_bayar"><label class="total order-total" id="total_bayar"></label></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--simpan transaksi-->
                    <input name="no_order" value="<?= $no_order ?>" hidden>
                    <input name="estimasi" hidden>
                    <input name="ongkir" class="ongkir" hidden>
                    <input name="berat" value="<?= $total_berat ?>" hidden><br>
                    <input name="grand_total" value="<?php echo $this->cart->total() ?>" hidden>
                    <input name="total_bayar" class="total" hidden>
                    <!--simpan Rinci transaksi-->
                    <?php
                    $i = 1;
                    foreach ($this->cart->contents() as $items) {
                        echo form_hidden('qty' . $i++, $items['qty']);
                    }
                    ?>
                </div>
                <?php
                echo form_close();
                ?>
            </section>
        </div>
        <footer class="bg-dark text-white">
            <div class="container py-4">
                <div class="row py-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h6 class="text-uppercase mb-3">Pelayanan</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#!">Bantuan &amp; +62 8578-2918-2019</a></li>
                            <!-- <li><a class="footer-link" href="#!">Returns &amp; Refunds</a></li>
                            <li><a class="footer-link" href="#!">Online Stores</a></li>
                            <li><a class="footer-link" href="#!">Terms &amp; Conditions</a></li> -->
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h6 class="text-uppercase mb-3">Alamat</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#!">Kuningan Jl. Siliwangi No.06</a></li>
                            <!-- <li><a class="footer-link" href="#!">Available Services</a></li>
                            <li><a class="footer-link" href="#!">Latest Posts</a></li>
                            <li><a class="footer-link" href="#!">FAQs</a></li> -->
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-uppercase mb-3">Sosial media</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#!">Twitter</a></li>
                            <li><a class="footer-link" href="#!">Instagram</a></li>
                            <li><a class="footer-link" href="#!">Tumblr</a></li>
                            <li><a class="footer-link" href="#!">Pinterest</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-top pt-4" style="border-color: #1d1d1d !important">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start">
                            <p class="small text-muted mb-0">&copy; 2022 All rights reserved.</p>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <p class="small text-muted mb-0">Toko Ipeng <a class="text-white reset-anchor" href="https://bootstrapious.com/p/boutique-bootstrap-e-commerce-template">Pusat Oleh-Oleh</a></p>
                            <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- JavaScript files-->
        <script src="<?= base_url() ?>distribution/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>distribution/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="<?= base_url() ?>distribution/vendor/nouislider/nouislider.min.js"></script>
        <script src="<?= base_url() ?>distribution/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="<?= base_url() ?>distribution/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="<?= base_url() ?>distribution/js/front.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
            // ------------------------------------------------------- //
            //   Inject SVG Sprite - 
            //   see more here 
            //   https://css-tricks.com/ajaxing-svg-sprite/
            // ------------------------------------------------------ //
            function injectSvgSprite(path) {

                var ajax = new XMLHttpRequest();
                ajax.open("GET", path, true);
                ajax.send();
                ajax.onload = function(e) {
                    var div = document.createElement("div");
                    div.className = 'd-none';
                    div.innerHTML = ajax.responseText;
                    document.body.insertBefore(div, document.body.childNodes[0]);
                }
            }
            // this is set to BootstrapTemple website as you cannot 
            // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
            // while using file:// protocol
            // pls don't forget to change to your domain :)
            injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
        </script>

        <script>
            $(document).ready(function() {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('rajaongkir/provinsi') ?>",
                    success: function(hasil_provinsi) {
                        // console.log(hasil_provinsi);
                        $("select[name=provinsi]").html(hasil_provinsi);
                    }
                });
                $("select[name=provinsi]").on("change", function() {
                    var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");

                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('rajaongkir/kota') ?>",
                        data: 'id_provinsi=' + id_provinsi_terpilih,
                        success: function(hasil_kota) {
                            // console.log(hasil_kota);
                            $("select[name=kota]").html(hasil_kota);
                        }
                    });
                });

                $("select[name=kota]").on("change", function() {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('rajaongkir/expedisi') ?>",
                        success: function(hasil_expedisi) {
                            $("select[name=expedisi]").html(hasil_expedisi);
                        }
                    });
                });

                $("select[name=expedisi]").on("change", function() {
                    var expedisi_terpilih = $("select[name = expedisi]").val()
                    var id_kota_tujuan_terpilih = $("option:selected", "select[name = kota]").attr('id_kota');
                    var tot_berat = <?= $total_berat ?>;

                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('rajaongkir/paket') ?>",
                        data: 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + tot_berat,
                        success: function(hasil_paket) {
                            console.log(hasil_paket);
                            $("select[name=paket]").html(hasil_paket);
                        }
                    });
                });

                $("select[name=paket]").on("change", function() {
                    var dataongkir = $("option:selected", this).attr('ongkir');
                    var reverse = dataongkir.toString().split('').reverse().join(''),
                        ribuan_ongkir = reverse.match(/\d{1,3}/g);
                    ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');
                    $("#ongkir").html("Rp. " + ribuan_ongkir);

                    var data_total_bayar = parseInt(dataongkir) + parseInt(<?= $this->cart->total() ?>);
                    var reverse2 = data_total_bayar.toString().split('').reverse().join(''),
                        ribuan_bayar = reverse2.match(/\d{1,3}/g);
                    ribuan_bayar = ribuan_bayar.join(',').split('').reverse().join('');
                    $("#total_bayar").html("Rp. " + ribuan_bayar);

                    var estimasi = $("option:selected", this).attr('estimasi');
                    $("input[name=estimasi]").val(estimasi);
                    $("input[name=ongkir]").val(dataongkir);
                    $("input[name=total_bayar]").val(data_total_bayar);
                });
            });
        </script>
        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </div>
</body>

</html>