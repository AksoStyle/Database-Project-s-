<?php
    $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
        mysqli_query($conn, 'SET NAMES UTF-8');
        mysqli_query($conn, "SET character_set_results=utf8");
        mysqli_set_charset($conn, 'utf8');
    echo'<a href="index.html" >Vissza</a>';
    echo '<h2>Telefon adatok módosítása</h2>';

    if(mysqli_select_db($conn, 'munkahely')){
        $select = "SELECT `DolgozóiID`, `Telefonszám`, `Tipus` FROM telefon";
        $res = mysqli_query($conn, $select);

        echo '<table border=1>';
        echo '<tr>';
        echo '<th>DolgozóiID</th>';
        echo '<th>Telefonszám</th>';
        echo '<th>Típus</th>';
        echo '</tr>';

        while(($current_row = mysqli_fetch_assoc($res))!=null) {
            echo '<form method="POST" action="TelefontModosit.php">';
            echo '<tr>';
            echo '<td>'.'<input type=number name="DolgozóiID" value="'. $current_row['DolgozóiID'].'"</td>';
            echo '<td>'.'<input type=text name="Telefonszám" value="'. $current_row['Telefonszám'].'"</td>';
            echo '<td>'.'<input type=text name="Tipus" value="'. $current_row['Tipus'].'"</td>';
            echo '</td>'.'<input type=submit name=update value=frissít />
                  </td>';
        }
    }
?>