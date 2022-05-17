<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title><?= $title ?></title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ?>frontend/assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="<?= base_url() ?>frontend/assets/css/responsive.css">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                                <img src="<?= base_url() ?>frontend/assets/img/logo.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <?php $keranjang = $this->cart->contents();
                            $jml_item = 0;
                            foreach ($keranjang as $key => $value) {
                                $jml_item = $jml_item + $value['qty'];
                            } ?>
                            <ul>
                                <li class="current-list-item"><a href="<?= base_url() ?>">Home</a>
                                </li>
                                <?php $kategori = $this->m_home->kategori_produk(); ?>
                                <li><a href="#">Kategori Produk</a>
                                    <ul class="sub-menu">
                                        <?php foreach ($kategori as $key => $value) { ?>
                                            <li><a href="<?= base_url('/home/kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li><?php
                                    if ($this->session->userdata('username') == "") { ?>
                                        <a href="<?= base_url('pelanggan/login') ?>">Login</a>
                                    <?php } else { ?>
                                        <a href="#"><?= $this->session->userdata('nama_pelanggan'); ?></a>
                                    <?php } ?>
                                </li>
                                <li>
                                    <?php if ($this->session->userdata('username') == "") { ?>
                                        <a href="#">Shop</a>
                                    <?php } else { ?>
                                        <a href="shop.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?= base_url('pesanan') ?>">Cart</a></li>
                                        </ul>
                                    <?php } ?>
                                </li>
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="<?= base_url('belanja') ?>"><i class="fas fa-shopping-cart"></i>[<?= $jml_item ?>]</a>
                                        <?php if ($this->session->userdata('username') == "") { ?>
                                            <a class="logout-bar-icon" href="#"><i class="fas fa-sign-out-alt"></i></a>
                                        <?php } else { ?>
                                            <a class="logout-bar-icon" href="<?= base_url('pelanggan/logout') ?>"><i class="fas fa-sign-out-alt"></i></a>
                                        <?php } ?>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->


    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresh and Organic</p>
                        <h1>Check Out Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- check out section -->
    <div class="checkout-section mt-150 mb-150">
        <div class="container">
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
                    <div class="checkout-accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="card single-accordion">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Data Penerima
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="billing-address-form">
                                            <form action="index.html">
                                                <p><input type="text" class="form-control" placeholder="Nama Penerima" name="nama_pelanggan" required></p>
                                                <p><input type="number" class="form-control" placeholder="No Telpon" name="no_tlpn" required></p>
                                                <p><input type="text" class="form-control" placeholder="Kode Pos" name="kode_pos" required></p>
                                                <p><textarea name="alamat" class="form-control" cols="30" rows="10" placeholder="Alamat Lengkap" required></textarea></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-accordion">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Data Alamat Dan Ongkir
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shipping-address-form">
                                            <p><label>Provinsi</label>
                                                <!-- <select name="id_lokasi" id="ongkir" class="form-control">
												<option value="">---Pilih Lokasi Anda---</option>
												<?php foreach ($lokasi as $key => $value) { ?>
													<option value="<?= $value->id_lokasi ?>" data-ongkir=<?= $value->ongkir ?> data-total=<?= $this->cart->total() +  $value->ongkir ?>><?= $value->nama_lokasi ?></option>
												<?php } ?>
											</select> -->
                                                <select name="provinsi" class="form-control"></select>
                                            </p>
                                            <p><label>Kota</label>
                                                <select name="kota" class="form-control"></select>
                                            </p>
                                            <p><label>Expedisi</label>
                                                <select name="expedisi" class="form-control"></select>
                                            </p>
                                            <p><label>Pkaet</label>
                                                <select name="paket" class="form-control"></select>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="order-details-wrap">
                        <?php $i = 1; ?>

                        <?php $total_berat = 0;
                        foreach ($this->cart->contents() as $items) {
                            $produk = $this->m_home->detail_produk($items['id']);
                            $berat = $items['qty'] * $produk->berat;
                            $total_berat =  $total_berat + $berat;
                        ?>
                        <?php } ?>
                        <table class="order-details">
                            <thead>
                                <tr>
                                    <th>Your order Details</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody class="order-details-body">
                                <tr>
                                    <td>Product</td>
                                    <td>Total</td>
                                </tr>
                            </tbody>
                            <tbody class="checkout-details">
                                <tr>
                                    <td>Subtotal</td>
                                    <td>Rp. <?php echo $this->cart->format_number($this->cart->total(), 0) ?></td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td><label class="ongkir" id="ongkir"></label></td>
                                </tr>
                                <tr>
                                    <td>Berat</td>
                                    <td><?= $total_berat ?> Gr</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td><label class="total order-total" id="total_bayar"></label></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-md-12">
                            <div class="cart-detail p-3 p-md-4">
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
                        </div>
                        <button type="submit" class="btn btn-primary py-3 px-4">CekOut</button>
                    </div>
                </div>
            </div>
            <?php
            echo form_close();
            ?>
        </div>
    </div>
    <!-- end check out section -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="<?= base_url() ?>frontend/assets/img/company-logos/1.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="<?= base_url() ?>frontend/assets/img/company-logos/2.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="<?= base_url() ?>frontend/assets/img/company-logos/3.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="<?= base_url() ?>frontend/assets/img/company-logos/4.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="<?= base_url() ?>frontend/assets/img/company-logos/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->

    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">About us</h2>
                        <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Get in Touch</h2>
                        <ul>
                            <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                            <li>support@fruitkha.com</li>
                            <li>+00 111 222 3333</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Pages</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Shop</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Subscribe</h2>
                        <p>Subscribe to our mailing list to get the latest updates.</p>
                        <form action="index.html">
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <!-- <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights Reserved.<br>
                        Distributed By - <a href="https://themewagon.com/">Themewagon</a>
                    </p> -->
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src="<?= base_url() ?>frontend/assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="<?= base_url() ?>frontend/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="<?= base_url() ?>frontend/assets/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="<?= base_url() ?>frontend/assets/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="<?= base_url() ?>frontend/assets/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="<?= base_url() ?>frontend/assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="<?= base_url() ?>frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="<?= base_url() ?>frontend/assets/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="<?= base_url() ?>frontend/assets/js/sticker.js"></script>
    <!-- main js -->
    <script src="<?= base_url() ?>frontend/assets/js/main.js"></script>

    <!-- SweetAlert2 -->
    <script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- <script type="text/javascript">
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    icon: 'success',
                    title: 'Produk Berhasil Ditambahkan ke Keranjang.'
                })
            });
        });
    </script> -->


    <!-- <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) { -->
    <!-- 
                // Stop acting like a button
                // e.preventDefault();
                // Get the field name
                // var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // $('#quantity').val(quantity + 1);
                // $('.cart-btn').attr('data-qty', quantity + 1);

                // Increment

            // });

            // $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                // e.preventDefault();
                // Get the field name
                // var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
    //             if (quantity > 0) {
    //                 $('#quantity').val(quantity - 1); -->
    <!-- //                 $('.cart-btn').attr('data-qty', quantity - 1); -->
    <!-- //             } -->
    <!-- //         }); -->

    <!-- //     }); -->
    <!-- // </script> -->


    <!-- SweetAlert2 -->
    <!-- <script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script type="text/javascript">
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    icon: 'success',
                    title: 'Produk Berhasil Ditambahkan ke Keranjang.'
                })
            });
        });
    </script> -->

    <!-- <script>
        console.log = function() {}
        $("#ongkir").on('change', function() {

            $(".ongkir").html($(this).find(':selected').attr('data-ongkir'));
            $(".ongkir").val($(this).find(':selected').attr('data-ongkir'));

            $(".total").html($(this).find(':selected').attr('data-total'));
            $(".total").val($(this).find(':selected').attr('data-total'));

        });
    </script> -->
    <!-- raja ongkir -->
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
</body>

</html>