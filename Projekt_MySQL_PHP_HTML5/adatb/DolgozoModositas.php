<?php
    $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
        mysqli_query($conn, 'SET NAMES UTF-8');
        mysqli_query($conn, "SET character_set_results=utf8");
        mysqli_set_charset($conn, 'utf8');
    echo'<a href="index.html" >Vissza</a>';
    echo '<h2>Dolgozói adatok módosítása</h2>';

    if(mysqli_select_db($conn, 'munkahely')){
        $select = "SELECT `DolgozóiID`, `Név`, `Születési Dátum`, `Lakcim` FROM dolgozó";
        $res = mysqli_query($conn, $select);

        echo '<table border=1>';
        echo '<tr>';
        echo '<th>DolgozóiID</th>';
        echo '<th>Név</th>';
        echo '<th>Születési Dátum</th>';
        echo '<th>Lakcím</th>';
        echo '</tr>';

        while(($current_row = mysqli_fetch_assoc($res))!=null) {
            echo '<form method="POST" action="DolgozotModosit.php">';
            echo '<tr>';
            echo '<td>'.'<input type=number name="DolgozóiID" value="'. $current_row['DolgozóiID'].'"</td>';
            echo '<td>'.'<input type=text name="Név" value="'. $current_row['Név'].'"</td>';
            echo '<td>'.'<input type=date name="Születési Dátum" value="'. $current_row['Születési Dátum'].'"</td>';
            echo '<td>'.'<input type=text name="Lakcim" value="'. $current_row['Lakcim'].'"</td>';
            echo '</td>'.'<input type=submit name=update value=frissít />
                  </td>';
        }
    }
?>