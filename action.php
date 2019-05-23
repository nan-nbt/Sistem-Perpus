<?php
$action = $_GET['action'];

require_once "koneksi.php";
if($action == "update-member"){

    $id = $_GET['id'];
    $nama = $_POST['in_nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['in_alamat'];

    $query = mysqli_query($con, "UPDATE `anggota` SET `nama_anggota`='$nama',`jk`='$jk',`alamat`='$alamat' WHERE `id_anggota`='$id'");
    if($query){
        echo "<script>alert('Update Data Anggota Success!'); window.location ='data_anggota.php' </script>";
    }else{
        echo mysqli_error($con);
    }
}elseif($action == "save-member"){
    $nama = $_POST['in_nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['in_alamat'];

    $query = mysqli_query($con, "INSERT INTO `anggota`(`nama_anggota`, `jk`, `alamat`) VALUES ('$nama','$jk','$alamat')");
    if($query){
        echo "<script>alert('Tambah Data Anggota Success!'); window.location ='data_anggota.php' </script>";
    }else{
        echo mysqli_error($con);
    }

}elseif($action == "delete-member"){
    $id = $_GET['id'];
    $query = mysqli_query($con, "DELETE FROM `anggota` WHERE `id_anggota`='$id'");
    if($query){
        echo "<script>alert('Delete Data Anggota Success!'); window.location ='data_anggota.php' </script>";
    }else{
        echo mysqli_error($con);
    }

//data buku
}elseif($action == "update-buku"){

    $id = $_GET['id'];
    $judul = $_POST['in_judul'];
    $penerbit = $_POST['in_penerbit'];
    $tahun = $_POST['in_tahun'];
    $pengarang = $_POST['in_pengarang'];

    $query = mysqli_query($con, "UPDATE `buku` SET `judul`='$judul',`penerbit`='$penerbit',`tahun`='$tahun',`pengarang`='$pengarang' WHERE `id_buku`='$id'");
    if($query){
        echo "<script>alert('Update Data Buku Success!'); window.location ='data_buku.php' </script>";
    }else{
        echo mysqli_error($con);
    }
}elseif($action == "save-buku"){
  $judul = $_POST['in_judul'];
  $penerbit = $_POST['in_penerbit'];
  $tahun = $_POST['in_tahun'];
  $pengarang = $_POST['in_pengarang'];

    $query = mysqli_query($con, "INSERT INTO `buku`(`judul`, `penerbit`, `tahun`, `pengarang`) VALUES ('$judul','$penerbit','$tahun','$pengarang')");
    if($query){
        echo "<script>alert('Tambah Data Buku Success!'); window.location ='data_buku.php' </script>";
    }else{
        echo mysqli_error($con);
    }

}elseif($action == "delete-buku"){
    $id = $_GET['id'];
    $query = mysqli_query($con, "DELETE FROM `buku` WHERE `id_buku`='$id'");
    if($query){
        echo "<script>alert('Delete Data Buku Success!'); window.location ='data_buku.php' </script>";
    }else{
        echo mysqli_error($con);
    }
//transaksi
}elseif($action == "update-peminjaman"){

    $id = $_GET['id'];
    $id_buku = $_POST['in_buku'];
    $id_anggota = $_POST['in_anggota'];
    $pinjam = $_POST['pinjam'];
    $kembali = $_POST['kembali'];

    $query = mysqli_query($con, "UPDATE `peminjaman` SET `tgl_pinjam`='$pinjam',`tgl_kembali`='$kembali',`id_buku`='$id_buku',`id_anggota`='$id_anggota' WHERE `id_pinjam`='$id'");
    if($query){
        echo "<script>alert('Update Data Peminjaman Success!'); window.location ='data_transaksi.php' </script>";
    }else{
        echo mysqli_error($con);
    }
}elseif($action == "save-peminjaman"){
  $id_buku = $_POST['in_buku'];
  $id_anggota = $_POST['in_anggota'];
  $pinjam = $_POST['pinjam'];
  $kembali = $_POST['kembali'];

    $query = mysqli_query($con, "INSERT INTO `peminjaman`(`id_buku`, `id_anggota`, `tgl_pinjam`, `tgl_kembali`) VALUES ('$id_buku','$id_anggota','$pinjam','$kembali')");
    if($query){
      echo "<script>alert('Tambah Data Peminjaman Success!'); window.location ='data_transaksi.php' </script>";
    }else{
      echo mysqli_error($con);
    }

}elseif($action == "delete-peminjaman"){
    $id = $_GET['id'];
    $query = mysqli_query($con, "DELETE FROM `peminjaman` WHERE `id_pinjam`='$id'");
    if($query){
        echo "<script>alert('Delete Data Peminjaman Success!'); window.location ='data_transaksi.php' </script>";
    }else{
        echo mysqli_error($con);
    }

}
?>
