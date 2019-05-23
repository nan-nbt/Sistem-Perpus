<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <!-- Bootstrap Select CSS -->
    <link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />



    <!-- Document Title
    ============================================= -->
    <title>Perpustakaan | Universitas Serang Raya</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <?php
    include "header.php";
    ?>
    <!-- #header end -->

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Data Transaksi</h1>
            <span>Peminjaman & Pengembalian Buku</span>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">List Transaksi</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <div class="col_full">
                    <h4>Data Transaksi</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID Buku</th>
                                    <th>Judul Buku</th>
                                    <th>ID Anggota</th>
                                    <th>Nama Anggota</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            require_once "koneksi.php";
                            $sql_rule = mysqli_query($con, "SELECT * FROM peminjaman JOIN buku ON buku.id_buku=peminjaman.id_buku JOIN anggota ON anggota.id_anggota=peminjaman.id_anggota ") or die ("Gagal " . mysqli_error($con));
                            while($tampil_rule = mysqli_fetch_array($sql_rule)){
								//echo "IF" . " UMUR " . $tampil_rule['umur']. " PANJANG " . $tampil_rule['panjang']. " BERAT " . $tampil_rule['berat'] . " THEN ". $tampil_rule['hasil'] . "<br>";
                                ?>
                                <tr>
                                    <td><?php echo $tampil_rule['id_pinjam']; ?></td>
                                    <td><?php echo $tampil_rule['id_buku']; ?></td>
                                    <td><?php echo $tampil_rule['judul']; ?></td>
                                    <td><?php echo $tampil_rule['id_anggota']; ?></td>
                                    <td><?php echo $tampil_rule['nama_anggota']; ?></td>
                                    <td><?php echo $tampil_rule['tgl_pinjam']; ?></td>
                                    <td><?php echo $tampil_rule['tgl_kembali']; ?></td>
                                    <td><a href="add_transaksi.php?edit=<?php echo $tampil_rule['id_pinjam']; ?>">Edit</a> / <a href="action.php?action=delete-peminjaman&id=<?php echo $tampil_rule['id_pinjam']; ?>">Delete</a></td>
                                </tr>
                            <?php };?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col_full">
                    <a class="button button-3d button-black nomargin fright" href="add_transaksi.php">Tambah Data Peminjaman</a>
                </div>
            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <?php include "footer.php"; ?>
    <!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Bootstrap Select Plugin -->
<script type="text/javascript" src="js/components/bs-select.js"></script>
<link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

<!-- Select Splitter Plugin -->
<script type="text/javascript" src="js/components/selectsplitter.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript">

    $('.selectsplitter').selectsplitter();

</script>
</body>
</html>
