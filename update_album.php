<?php
    include "koneksi.php";
    session_abort_start();
    $AlbumID=$_POST['AlbumID'];
    $NamaAlbum=$_POST['NamaAlbum'];
    $Deskripsi=$_POST['Deskripsi'];
    $sql=mysqli_guery($conn,"update album set namalbum='$NamaAlbum', deskripsi='$Deskripsi' where albumid='$AlbumID'");
    header("location:album.php");
?>