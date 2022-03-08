<?php
    $conn = mysqli_connect('localhost', 'root','','munkahely') or die("Hibás csatlakozás!");
        mysqli_query($conn, 'SET NAMES UTF-8');
        mysqli_query($conn, "SET character_set_results=utf8");
        mysqli_set_charset($conn, 'utf8');
    echo'<a href="index.html" >Vissza</a>';
    echo '<h2>Számítógép adatok módosítása</h2>';

    if(mysqli_select_db($conn, 'munkahely')){
        $select = "SELECT `Rendszer`, `SzámítógépID`, `Processzor`, `GPU` FROM számítógép";
        $res = mysqli_query($conn, $select);

        echo '<table border=1>';
        echo '<tr>';
        echo '<th>Rendszer</th>';
        echo '<th>SzámítógépID</th>';
        echo '<th>Processzor</th>';
        echo '<th>GPU</th>';
        echo '</tr>';

        while(($current_row = mysqli_fetch_assoc($res))!=null) {
            echo '<form method="POST" action="SzamitogepetModosit.php">';
            echo '<tr>';
            echo '<td>'.'<input type=text name="Rendszer" value="'. $current_row['Rendszer'].'"</td>';
            echo '<td>'.'<input type=number name="SzamitogepID" value="'. $current_row['SzámítógépID'].'"</td>';
            echo '<td>'.'<input type=text name="Processzor" value="'. $current_row['Processzor'].'"</td>';
            echo '<td>'.'<input type=text name="GPU" value="'. $current_row['GPU'].'"</td>';
            echo '</td>'.'<input type=submit name=update value=frissít />
                  </td>';
        }
    }
?>