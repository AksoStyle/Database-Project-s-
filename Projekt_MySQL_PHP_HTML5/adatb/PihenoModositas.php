<?php
    $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
        mysqli_query($conn, 'SET NAMES UTF-8');
        mysqli_query($conn, "SET character_set_results=utf8");
        mysqli_set_charset($conn, 'utf8');
    echo'<a href="index.html" >Vissza</a>';
    echo '<h2>Pihenői adatok módosítása</h2>';

    if(mysqli_select_db($conn, 'munkahely')){
        $select = "SELECT `SzobaID`, `Iroaszal`, `Szék` FROM iroda";
        $res = mysqli_query($conn, $select);

        echo '<table border=1>';
        echo '<tr>';
        echo '<th>SzobaID</th>';
        echo '<th>Fotel</th>';
        echo '<th>Kanapé</th>';
        echo '<th>Kávéfőző</th>';
        echo '</tr>';

        while(($current_row = mysqli_fetch_assoc($res))!=null) {
            echo '<form method="POST" action="PihenotModosit.php">';
            echo '<tr>';
            echo '<td>'.'<input type=number name="SzobaID" value="'. $current_row['SzobaID'].'"</td>';
            echo '<td>'.'<input type=number name="Fotel" value="'. $current_row['Fotel'].'"</td>';
            echo '<td>'.'<input type=number name="Kanapé" value="'. $current_row['Kanapé'].'"</td>';
            echo '<td>'.'<input type=number name="Kávéfőző" value="'. $current_row['Kávéfőző'].'"</td>';
            echo '</td>'.'<input type=submit name=update value=frissít />
                  </td>';
        }
    }
?>