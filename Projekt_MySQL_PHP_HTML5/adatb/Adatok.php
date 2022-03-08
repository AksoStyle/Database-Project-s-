<?php
     $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
      mysqli_query($conn, 'SET NAMES UTF-8');
      mysqli_query($conn, "SET character_set_results=utf8");
      mysqli_set_charset($conn, 'utf8');

      echo'<h1>Adatbázis adatai:</h1>';
      //echo '<a href="lekerdezesek.php">Lekérdezések</a></br>';
      echo '<a href="index.html" >Adatok felvétele</a>';
      echo'<h2>Dolgozó tábla:</h2>';
      if ( mysqli_select_db($conn, 'munkahely') ){
        $sql = "SELECT * FROM dolgozó";

        $res = mysqli_query($conn, $sql) or die ('Hibás utasítás!');

         echo '<table border=1>';
         echo '<tr>';
         echo '<th>DolgozóiID</th>';
         echo '<th>Név</th>';
         echo '<th>Születési Dátum</th>';
         echo '<th>Lakcím</th>';
         echo '</tr>';

         while (($current_row = mysqli_fetch_assoc($res))!= null) {
            echo '<tr>';
            echo '<td>' . $current_row["DolgozóiID"] . '</td>';
            echo '<td>' . $current_row["Név"] . '</td>';
            echo '<td>' . $current_row["Születési Dátum"] . '</td>';
            echo '<td>' . $current_row["Lakcim"] . '</td>';
            echo '</tr>';
      }
      echo '</table>';
      mysqli_free_result($res);
      } else {
        die('Nem sikerült csatlakozni az adatbázishoz.');
      }

      echo'<h2>Helyiség tábla:</h2>';
            if ( mysqli_select_db($conn, 'munkahely') ){
              $sql = "SELECT * FROM helyiség";

              $res = mysqli_query($conn, $sql) or die ('Hibás utasítás!');

               echo '<table border=1>';
               echo '<tr>';
               echo '<th>SzobaID</th>';
               echo '</tr>';

               while ( ($current_row = mysqli_fetch_assoc($res))!= null) {
                  echo '<tr>';
                  echo '<td>' . $current_row["SzobaID"] . '</td>';
                  echo '</tr>';
            }
            echo '</table>';
            mysqli_free_result($res);
            } else {
              die('Nem sikerült csatlakozni az adatbázishoz.');
            }
      echo'<h2>Iroda tábla:</h2>';
                  if ( mysqli_select_db($conn, 'munkahely') ){
                    $sql = "SELECT * FROM iroda";

                    $res = mysqli_query($conn, $sql) or die ('Hibás utasítás!');

                     echo '<table border=1>';
                     echo '<tr>';
                     echo '<th>SzobaID</th>';
                     echo '<th>Iróasztal</th>';
                     echo '<th>Szék</th>';
                     echo '</tr>';

                     while ( ($current_row = mysqli_fetch_assoc($res))!= null) {
                        echo '<tr>';
                        echo '<td>' . $current_row["SzobaID"] . '</td>';
                        echo '<td>' . $current_row["Iroaszal"] . '</td>';
                        echo '<td>' . $current_row["Szék"] . '</td>';
                        echo '</tr>';
                  }
                  echo '</table>';
                  mysqli_free_result($res);
                  } else {
                    die('Nem sikerült csatlakozni az adatbázishoz.');
                  }
      echo'<h2>Pihenő tábla:</h2>';
                        if ( mysqli_select_db($conn, 'munkahely') ){
                          $sql = "SELECT * FROM pihenő";

                          $res = mysqli_query($conn, $sql) or die ('Hibás utasítás!');

                           echo '<table border=1>';
                           echo '<tr>';
                           echo '<th>SzobaID</th>';
                           echo '<th>Fotel</th>';
                           echo '<th>Kanapé</th>';
                           echo '<th>Kávéfőző</th>';
                           echo '</tr>';

                           while ( ($current_row = mysqli_fetch_assoc($res))!= null) {
                              echo '<tr>';
                              echo '<td>' . $current_row["SzobaID"] . '</td>';
                              echo '<td>' . $current_row["Fotel"] . '</td>';
                              echo '<td>' . $current_row["Kanapé"] . '</td>';
                              echo '<td>' . $current_row["Kávéfőző"] . '</td>';
                              echo '</tr>';
                        }
                        echo '</table>';
                        mysqli_free_result($res);
                        } else {
                          die('Nem sikerült csatlakozni az adatbázishoz.');
                        }
      echo'<h2>Számítógép tábla:</h2>';
                              if ( mysqli_select_db($conn, 'munkahely') ){
                                $sql = "SELECT * FROM számítógép";

                                $res = mysqli_query($conn, $sql) or die ('Hibás utasítás!');

                                 echo '<table border=1>';
                                 echo '<tr>';
                                 echo '<th>Rendszer</th>';
                                 echo '<th>SzámítógépID</th>';
                                 echo '<th>Processzor</th>';
                                 echo '<th>GPU</th>';
                                 echo '</tr>';

                                 while ( ($current_row = mysqli_fetch_assoc($res))!= null) {
                                    echo '<tr>';
                                    echo '<td>' . $current_row["Rendszer"] . '</td>';
                                    echo '<td>' . $current_row["SzámítógépID"] . '</td>';
                                    echo '<td>' . $current_row["Processzor"] . '</td>';
                                    echo '<td>' . $current_row["GPU"] . '</td>';
                                    echo '</tr>';
                              }
                              echo '</table>';
                              mysqli_free_result($res);
                              } else {
                                die('Nem sikerült csatlakozni az adatbázishoz.');
                              }
                    echo'<h2>Telefon tábla:</h2>';
                        if ( mysqli_select_db($conn, 'munkahely') ){
                          $sql = "SELECT * FROM telefon";

                          $res = mysqli_query($conn, $sql) or die ('Hibás utasítás!');

                           echo '<table border=1>';
                           echo '<tr>';
                           echo '<th>DolgozóiID</th>';
                           echo '<th>Telefonszám</th>';
                           echo '<th>Típus</th>';
                           echo '</tr>';

                           while ( ($current_row = mysqli_fetch_assoc($res))!= null) {
                              echo '<tr>';
                              echo '<td>' . $current_row["DolgozóiID"] . '</td>';
                              echo '<td>' . $current_row["Telefonszám"] . '</td>';
                              echo '<td>' . $current_row["Tipus"] . '</td>';
                              echo '</tr>';
                        }
                        echo '</table>';
                        mysqli_free_result($res);
                        } else {
                          die('Nem sikerült csatlakozni az adatbázishoz.');
                        }



     mysqli_close($conn);
?>