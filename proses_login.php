<?php
$action = $_GET['action'];

if($action == "login"){
    include 'koneksi.php';

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if(!empty($username) && !empty($password)){
        $query = mysqli_query($con, "SELECT * FROM `pustakawan` WHERE `user`='$username' AND `pass`='$password'");
        $data=mysqli_num_rows($query);
        if($data==1){
          header('location: dashboard.php');
          }else {
            echo "<script>alert('Username and Password Incorrect!'); window.location ='index.php' </script>";
		    }
    }else {
        echo "<script>alert('Please Input Username and Password!'); window.location ='index.php' </script>";
		}

}elseif($action == "logout"){
    echo "<script>alert('Logout Success!'); window.location ='index.php' </script>";
}
?>
