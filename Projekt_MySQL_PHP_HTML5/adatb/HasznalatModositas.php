<?php
    $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
        mysqli_query($conn, 'SET NAMES UTF-8');
        mysqli_query($conn, "SET character_set_results=utf8");
        mysqli_set_charset($conn, 'utf8');
    echo'<a href="index.html" >Vissza</a>';
    echo '<h2>Használati adatok módosítása</h2>';

    if(mysqli_select_db($conn, 'munkahely')){
        $select = "SELECT `DolgozóiID`, `SzobaID`, `Mikor` FROM használ";
        $res = mysqli_query($conn, $select);

        echo '<table border=1>';
        echo '<tr>';
        echo '<th>DolgozóiID</th>';
        echo '<th>SzobaID</th>';
        echo '<th>Mikor</th>';
        echo '</tr>';

        while(($current_row = mysqli_fetch_assoc($res))!=null) {
            echo '<form method="POST" action="HasznalatotModosit.php">';
            echo '<tr>';
            echo '<td>'.'<input type=number name="DolgozóiID" value="'. $current_row['DolgozóiID'].'"</td>';
            echo '<td>'.'<input type=text name="SzobaID" value="'. $current_row['SzobaID'].'"</td>';
            echo '<td>'.'<input type=date name="Mikor" value="'. $current_row['Mikor'].'"</td>';
            echo '</td>'.'<input type=submit name=update value=frissít />
                  </td>';
        }
    }
?>