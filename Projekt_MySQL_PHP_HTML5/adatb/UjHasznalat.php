<?php

      $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
              mysqli_query($conn, 'SET NAMES UTF-8');
              mysqli_query($conn, "SET character_set_results=utf8");
              mysqli_set_charset($conn, 'utf8');


    $Dolgozo = $_POST['DolgozoiID'];
    $SzobaID = $_POST['SzobaID'];
    $datum = $_POST['Datum'];
    

    if( !(isset($Dolgozo)) && !(isset($SzobaID)) && !(isset($datum))) die("Valamelyik blokk nincs kitoltve!");
      $sql = "INSERT INTO `használ`(`DolgozóiID`, `SzobaID`, `Mikor`) VALUES ($Dolgozo, $SzobaID, '$datum')";

      if ($conn->query($sql) === TRUE) {
           
           header("Location: index.html");

          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

    mysqli_close($conn);
?>