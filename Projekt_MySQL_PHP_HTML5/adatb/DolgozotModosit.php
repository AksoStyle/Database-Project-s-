<?php
    $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
    mysqli_query($conn, 'SET NAMES UTF-8');
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_set_charset($conn, 'utf8');

    $DolgozoiID = $_POST['DolgozóiID'];
    $name = $_POST['Név'];
    $bdate = $_POST['Születési Dátum'];
    $address = $_POST['Lakcim'];

    $change = "UPDATE `dolgozó`
              SET `DolgozóiID` ='$DolgozoiID', `Név` = '$name', `Születési Dátum` = '$bdate', `Lakcim` = '$address'
              WHERE `dolgozó`.`DolgozóiID` = '$DolgozoiID'";

    mysqli_query($conn, $change);
    header("location: DolgozoModositas.php");
?>