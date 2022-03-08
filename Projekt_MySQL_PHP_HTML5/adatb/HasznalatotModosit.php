<?php
    $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
    mysqli_query($conn, 'SET NAMES UTF-8');
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_set_charset($conn, 'utf8');

    $DolgozoiID = $_POST['DolgozóiID'];
    $SzobaID = $_POST['SzobaID'];
    $datum = $_POST['Mikor'];

    $change = "UPDATE `használ`
              SET `DolgozóiID` ='$DolgozoiID', `SzobaID` = '$SzobaID', `Mikor` = '$datum'
              WHERE `használ`.`DolgozóiID` = '$DolgozoiID'";

    mysqli_query($conn, $change);
    header("location: HasznalatModositas.php");
?>