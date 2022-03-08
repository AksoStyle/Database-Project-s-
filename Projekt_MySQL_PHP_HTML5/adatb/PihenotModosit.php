<?php
    $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
    mysqli_query($conn, 'SET NAMES UTF-8');
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_set_charset($conn, 'utf8');

    $SzobaID = $_POST['SzobaID'];
    $Fotel = $_POST['Fotel'];
    $Kanapé = $_POST['Kanapé'];
    $Kávéfőző = $_POST['Kávéfőző'];

    $change = "UPDATE `pihenő`
              SET `SzobaID` ='$SzobaID', `Fotel` = '$Fotel', `Kanapé` = '$Kanapé', `Kávéfőző` = '$Kávéfőző'
              WHERE `pihenő`.`SzobaID` = '$SzobaID'";

    mysqli_query($conn, $change);
    header("location: PihenoModositas.php");
?>