<?php

      $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
              mysqli_query($conn, 'SET NAMES UTF-8');
              mysqli_query($conn, "SET character_set_results=utf8");
              mysqli_set_charset($conn, 'utf8');


    $Rendszer = $_POST['rendszer'];
    $szgepID = $_POST['szgepID'];
    $Processzor = $_POST['Processzor'];
    $GPU = $_POST['GPU'];



    if (!(isset($Rendszer))) die("nincs kitoltve a rendszer blokk!");
      $sql = "INSERT INTO `számítógép`(`Rendszer`,`SzámítógépID`,`Processzor`,`GPU`) VALUES ('$Rendszer', $szgepID, '$Processzor','$GPU')";

      if ($conn->query($sql) === TRUE) {
           
           header("Location: index.html");

          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

    mysqli_close($conn);
?>