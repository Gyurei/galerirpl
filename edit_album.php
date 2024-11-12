<?php
    session_start();
    if(!isset($_SESSION['UserID'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Album</title>
</head>
<body>
    <h1>Edit Album</h1>
    <p>Welcome <b><?=$_SESSION['NamaLengkap']?></b></p>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="album.php">Album</a></li>
        <li><a href="foto.php">Foto</a></li>
        <li><a href="Logout.php">Log Out</a></li>
    </ul>
    <form action="update_album.php" method="post">
        <?php
            include "koneksi.php";
            $AlbumID=$_GET['AlbumID'];
            $sql=mysqli_query($conn,"select*from album where albumid='$AlbumID'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="AlbumID" value="<?=$data['albumid']?>" hidden>
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="NamaAlbum" value="<?$data['NamaAlbum']?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="Deskripsi" value="<?$data['Deskripsi']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="Submit" value="Ubah"></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>
</body>
</html>