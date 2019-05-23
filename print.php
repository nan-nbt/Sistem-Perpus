<!DOCTYPE html>
<?php
require_once "koneksi.php";
if(!isset($_SESSION)) {
    session_start();
}
if (empty($_SESSION['username'])){
    session_destroy();
    header('Location: login.php');
}
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM `data_gizi_balita` where `id`='$id'");
if($tampil = mysqli_fetch_array($sql)){
	$nama = $tampil['nama'];
    $umur = $tampil['umur'];
    $panjang = $tampil['panjang'];
    $berat = $tampil['berat'];
    $status = $tampil['status'];
    
    $username = $_SESSION['username'];
}
?>
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

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Print <?php echo $id ?> - Gizi Balita | Universitas Serang Raya </title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Content
    ============================================= -->

    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <div class="heading-block center">
                    <h1>Hasil Uji Ketelitian Gizi Balita</h1>
                    <span>Dinas Kesehatan Kota Serang</span>
                </div>

                <div class="col_full">
                    <table class="table table-hover">
                        <tbody>
                        
                        <tr class="active">
                        <tr>
							<td>
                                <label>Nama Lengkap :</label>
                            </td>
							<td>
                                <?php echo $nama; ?>
                            </td>
						</tr>
                        <tr>
                            <td>
                                <label>Umur :</label>
                            </td>
                            <td>
                                <?php echo $umur; ?> Bulan
                            </td>
                            <td>
                                <label>Panjang Badan :</label>
                            </td>
                            <td>
                                <?php echo $panjang; ?> Cm
                            </td>
                            <td>
                                <label>Berat Badan :</label>
                            </td>
                            <td>
                                <?php echo $berat; ?> Kg
                            </td>
                        </tr>
                        <tr>
                            <?php
                            if($status == "Obesitas"){
                                $class = "danger";
                            }elseif($status == "Normal"){
                                $class = "success";
                            }else{
                                $class = "warning";
                            }
                            ?>
                            <td colspan="7" class="<?php echo $class; ?>">
                                Berdasarkan Hasil Uji Ketelitian, Gizi Balita Dinyatakan
                                <strong>
                                <?php
                                if($status == "buruk"){
                                    echo "buruk";
                                }else{
                                    echo $status;
                                }
                                ?>
                                </strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>


                <?php
                $query_sign = mysqli_query($con, "SELECT * FROM `user` WHERE `username`='$username'");
                if($tampil_sign = mysqli_fetch_array($query_sign)){
                    $nama = $tampil_sign['fullname'];
                    $nip = $tampil_sign['id'];
                }
                ?>
                <div class="fright">
                    Mengetahui Penguji
                    <br><br><br><br>
                    <table class="table table-hover">
                        <tbody>
                        <tr><?php echo $nama; ?></tr>
                        <tr>
                            <td>NIP. <?php echo $nip; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </section><!-- #content end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>