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
            <h1>Data Buku</h1>
            <span>List Buku</span>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Data Buku</li>
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
        $sql = mysqli_query($con, "SELECT * FROM `buku` WHERE `id_buku`='$id'");
        if($tampil= mysqli_fetch_array($sql)){
            $judul = $tampil['judul'];
            $penerbit = $tampil['penerbit'];
            $tahun = $tampil['tahun'];
            $pengarang = $tampil['pengarang'];

            $link = "action.php?action=update-buku&id=".$id;
        }
    }else{
        //-- Jika Member Baru -- //
	    $selected_default = "selected=\"selected\"";
		$judul = "";
    $penerbit = "";
        $tahun = "";
        $pengarang = "";

        $link = "action.php?action=save-buku";
    }
    ?>
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <form id="input_buku" name="input_buku" action="<?php echo $link; ?>" method="post">
					<div class="col_full">
                        <label>Judul Buku :</label>
                        <input id="id_hidden" name="id_hidden" type="hidden" class="form-control" value="<?php echo $id; ?>">
                        <input id="in_judul" name="in_judul" class="form-control" placeholder="Judul Buku" value="<?php echo $judul; ?>">
                    </div>

                    <div class="col_one_third">
                        <label>Penerbit :</label>
                        <input id="in_penerbit" name="in_penerbit" class="form-control" placeholder="Penerbit Buku" value="<?php echo $penerbit; ?>">
                    </div>

                    <div class="col_one_third">
                        <label>Tahun Terbit :</label>
                        <input id="in_tahun" name="in_tahun" class="form-control" placeholder="Tahun Terbit" value="<?php echo $tahun; ?>">
                    </div>

                    <div class="col_one_third col_last">
                        <label>Pengarang :</label>
                        <input id="in_pengarang" name="in_pengarang" class="form-control" placeholder="Pengarang Buku" value="<?php echo $pengarang; ?>">
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
</body>
</html>
