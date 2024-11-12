<?php
    include "koneksi.php";
    session_abort_start();
    $NamaAlbum=$_POST['NamaAlbum'];
    $Deskripsi=$_POST['Deskripsi'];
    $TanggalDibuat=date("Y-m-d");
    $UserID=$_SESSION['UserID'];
    $sql=mysqli_query($conn,"insert into user values('','$NamaAlbum','$Desksripsi','$TanggalDibuat','$UserID','$Alamat')");
    header("location:album.php");
?>