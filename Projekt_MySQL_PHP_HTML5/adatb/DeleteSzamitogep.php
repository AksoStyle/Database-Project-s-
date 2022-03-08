<?php

        $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
    	mysqli_query($conn, 'SET NAMES UTF-8');
        mysqli_query($conn, "SET character_set_results=utf8");
        mysqli_set_charset($conn, 'utf-8');

        $sor ="'".$_POST["sor"]."'";

        $stmt = 'DELETE FROM `számítógép` WHERE `számítógép`.`SzámítógépID` LIKE' .$sor;

        echo $stmt;

       if (mysqli_query($conn, $stmt)) {
         echo "Record deleted successfully";
       } else {
         echo "Error deleting record: " . mysqli_error($conn);
       }
        header("location: SzamitogepTorles.php");
?>