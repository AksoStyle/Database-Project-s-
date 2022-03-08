<?php

      $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
              mysqli_query($conn, 'SET NAMES UTF-8');
              mysqli_query($conn, "SET character_set_results=utf8");
              mysqli_set_charset($conn, 'utf8');


    $DolgozoiID = $_POST['dolgozoiID'];
    $Telefonszam = $_POST['telefonszam'];
    $tipus = $_POST['type'];

    if (!(isset($DolgozoiID))) die("nincs kitoltve a blokk!");
      $sql = "INSERT INTO `telefon`(`DolgozóiID`,`Telefonszám`,`Tipus`) VALUES ($DolgozoiID, $Telefonszam, '$tipus')";

      if ($conn->query($sql) === TRUE) {
           
           header("Location: index.html");

          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

    mysqli_close($conn);
?>