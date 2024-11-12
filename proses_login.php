<?php
    include "koneksi.php";
    session_start();
    $username=$_POST['Username'];
    $password=$_POST['Password'];
    $sql=mysqli_query($conn,"select*from user where username='$Username' and password='$Password'");
    $cek=mysqli_num_rows($sql);
    if($cek==1){
        while($data=mysqli_fetch_array($sql)){
            $_SESSION['Userid']=$data['Userid'];
            $_SESSION['NamaLengkap']=$data['NamaLengkap'];
        }
        header("location:home.php");
    }
    else{
        header("location:login.php");
    }
?>