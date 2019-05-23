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
                <li class="active">Data Transaksi</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->

    <?php
    //---- Memeriksa Apa member Rule / Tambah member Baru ---//
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
		$selected = "selected=\"selected\"";
		$selected_default = "";

        require_once "koneksi.php";
        $sql = mysqli_query($con, "SELECT * FROM peminjaman JOIN buku ON buku.id_buku=peminjaman.id_buku JOIN anggota ON anggota.id_anggota=peminjaman.id_anggota WHERE id_pinjam=$id ");
        if($tampil= mysqli_fetch_array($sql)){
          $id_buku = $tampil['id_buku'];
            $judul = $tampil['judul'];
            $id_anggota = $tampil['id_anggota'];
            $nama = $tampil['nama_anggota'];
            $pinjam = $tampil['tgl_pinjam'];
            $kembali = $tampil['tgl_kembali'];

            $link = "action.php?action=update-peminjaman&id=".$id;
        }
    }else{
        //-- Jika Member Baru -- //

	    $selected_default = "selected=\"selected\"";
      $id_buku = "";
      $judul = "";
      $id_anggota = "";
      $nama = "";
      $pinjam = "";
      $kembali = "";

        $link = "action.php?action=save-peminjaman";
    }
    ?>

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <form id="input_peminjaman" name="input_peminjaman" action="<?php echo $link; ?>" method="post">
                  <div class="col_one_third">
                      <label>Pilih Buku :</label>
                      <select id="in_buku" name="in_buku" class="selectpicker show-tick form-control" onchange="isi()">
                          <option value="" <?php echo $selected_default; ?> disabled="disabled">-- Pilih Buku --</option>
                          <?php
                              require_once "koneksi.php";
                              $query = mysqli_query($con, "SELECT * FROM `buku` ");
                              while($muncul= mysqli_fetch_array($query)){
                          ?>
                          <option value="<?php echo $muncul['id_buku'] ?>" ><?php echo $muncul['judul'] ?></option>
                          <?php } ?>
                      </select>
                  </div>

                  <div class="col_one_third">
                      <label>ID Buku :</label>
                      <input type="text" id="judul" name="judul" class="form-control" placeholder="ID Buku" value="<?php echo $id_buku; ?>" disabled="disabled">
                  </div>


                  <div class="col_one_third">
                      <label>Pilih Anggota :</label>
                      <select id="in_anggota" name="in_anggota" class="selectpicker show-tick form-control" onchange="isi_anggota()">
                          <option value="" <?php echo $selected_default; ?> disabled="disabled">-- Pilih Anggota --</option>
                          <?php $qa =mysqli_query($con, "SELECT * FROM `anggota` ");
                          while($data=mysqli_fetch_array($qa)){
                          ?>
                          <option value="<?php echo $data['id_anggota'] ?>" ><?php echo $data['nama_anggota'] ?></option>
                          <?php } ?>
                      </select>
                      </select>
                  </div>

                  <div class="col_one_third">
                      <label>ID Anggota :</label>
                      <input type="text" id="nama" name="nama" class="form-control" placeholder="ID Anggota" value="<?php echo $id_anggota; ?>" disabled="disabled">
                  </div>

                  <div class="col_one_third">
                      <label>Tanggal Peminjaman :</label>
                      <input type="date" id="pinjam" name="pinjam" class="form-control" placeholder="Tanggal Peminjaman Buku" value="<?php echo $pinjam; ?>">
                  </div>

                  <div class="col_one_third col_last">
                      <label>Tanggal Pengembalian :</label>
                      <input type="date" id="kembali" name="kembali" class="form-control" placeholder="Tanggal Pengembalian Buku" value="<?php echo $kembali; ?>">
                  </div>

					<div class="divider divider-short divider-center"><i class="icon-crop"></i></div>

                    <div class="coll_full nobottommargin">
                        <button id="submit_input" name="submit_input" style="float:right" class="button button-3d button-black nomargin" value="submit">Submit</button>
                    </div>
                </form>
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

<script type="text/javascript">
   function isi() {
  var tes = document.getElementById("in_buku").value;
        document.getElementById("judul").value=tes;
}
</script>

<script type="text/javascript">
   function isi_anggota() {
  var tes = document.getElementById("in_anggota").value;
        document.getElementById("nama").value=tes;
}
</script>


</body>
</html>
