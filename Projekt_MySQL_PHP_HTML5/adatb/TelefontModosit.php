<?php
    $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
    mysqli_query($conn, 'SET NAMES UTF-8');
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_set_charset($conn, 'utf8');

    $DolgozoiID = $_POST['DolgozoiID'];
    $Telefonszam = $_POST['Telefonszám'];
    $Tipus = $_POST['Tipus'];

    $change = "UPDATE `telefon`
              SET `DolgozóiID` =$DolgozoiID, `Telefonszám` = '$Telefonszam', `Tipus` = '$Tipus' 
              WHERE `telefon`.`DolgozóiID` = '$DolgozoiID'";

    mysqli_query($conn, $change);
    header("location: TelefonModositas.php");
?>