<?php
    $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
    mysqli_query($conn, 'SET NAMES UTF-8');
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_set_charset($conn, 'utf8');

    $SzobaID = $_POST['SzobaID'];
    $desk = $_POST['iroasztal'];
    $chair = $_POST['Szék'];
    

    $change = "UPDATE `iroda`
              SET `SzobaID` ='$SzobaID', `Iroaszal` = '$desk', `Szék` = '$chair' WHERE `iroda`.`SzobaID` = '$SzobaID'";

    mysqli_query($conn, $change);
    header("location: IrodaModositas.php");
?>