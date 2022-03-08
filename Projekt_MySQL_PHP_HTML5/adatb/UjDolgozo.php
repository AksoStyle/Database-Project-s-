<?php

      $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
              mysqli_query($conn, 'SET NAMES UTF-8');
              mysqli_query($conn, "SET character_set_results=utf8");
              mysqli_set_charset($conn, 'utf8');


    $Dolgozo = $_POST['DolgozoiID'];
    $Name = $_POST['Nev'];
    $Bday = $_POST['SzulDatum'];
    $Address = $_POST['Lakcim'];

    if( !(isset($Dolgozo)) && !(isset($Name)) && !(isset($Bday)) && !(isset($Address))) die("Valamelyik blokk nincs kitoltve!");
      $sql = "INSERT INTO `dolgozó`(`DolgozóiID`, `Név`, `Születési Dátum`, `Lakcim`) VALUES ($Dolgozo, '$Name', $Bday, '$Address')";

      if ($conn->query($sql) === TRUE) {
           
           header("Location: index.html");

          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

    mysqli_close($conn);
?>