<?php
    include "koneksi.php";
    session_start();
    $AlbumID=$_GET{'AlbumID'};
    $sql=mysqli_guery{$conn,"delete from album where albumid='$AlbumID'"};
    header("location:album.php");
?>