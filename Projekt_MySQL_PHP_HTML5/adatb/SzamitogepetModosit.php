<?php
    $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
    mysqli_query($conn, 'SET NAMES UTF-8');
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_set_charset($conn, 'utf8');

    $Rendszer = $_POST['Rendszer'];
    $SzgepID = $_POST['SzamitogepID'];
    $CPU = $_POST['Processzor'];
    $GPU = $_POST['GPU'];

    $change = "UPDATE `számítógép`
              SET `Rendszer` ='$Rendszer', `SzámítógépID` = '$SzgepID', `Processzor` = '$CPU', `GPU` = '$GPU'
              WHERE `számítógép`.`SzámítógépID` = '$SzgepID'";

    mysqli_query($conn, $change);
    header("location: DolgozoModositas.php");
?>