<?php

      $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
              mysqli_query($conn, 'SET NAMES UTF-8');
              mysqli_query($conn, "SET character_set_results=utf8");
              mysqli_set_charset($conn, 'utf8');


    $Szoba = $_POST['SzobaID'];


    if( !(isset($Szoba))) die("nincs kitoltve a blokk!");
      $sql = "INSERT INTO `helyiség`(`SzobaID`) VALUES ($Szoba)";

      if ($conn->query($sql) === TRUE) {
           
           header("Location: index.html");

          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

    mysqli_close($conn);
?>