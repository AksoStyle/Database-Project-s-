<?php
$conn = mysqli_connect('localhost', 'root','', 'munkahely') or die("Hibás csatlakozás!");
    	mysqli_query($conn, 'SET NAMES UTF-8');
        mysqli_query($conn, "SET character_set_results=utf8");
        mysqli_set_charset($conn, 'utf-8');
    echo'<a href="index.html" >Vissza</a>';
    echo '<h2>Számítógép törlése</h2>';

    if(mysqli_select_db($conn, 'munkahely')) {
                    $sql = "SELECT `Rendszer`, `SzámítógépID`, `Processzor`, `GPU` FROM számítógép";
                	$res = mysqli_query($conn, $sql) or die ('Hibás utasítás!');

                    echo '<table border=2>';
                    echo '<tr>';
                    echo '<th>Rendszer</th>';
                    echo '<th>SzámítógépID</th>';
                    echo '<th>Processzor</th>';
                    echo '<th>GPU</th>';
                    echo '</tr>';

                	while(($current_row = mysqli_fetch_assoc($res))!=null) {
                        echo '<tr>';
                        echo '<td>' . $current_row['Rendszer'] . ' </td>';
                        echo '<td>' . $current_row["SzámítógépID"] . ' </td>';
                        echo '<td>' . $current_row["Processzor"] . ' </td>';
                        echo '<td>' . $current_row["GPU"] . ' </td>';
                        echo '<td>
                        <form method="POST" action="DeleteSzamitogep.php">
                            <input type="hidden" name="sor" value="'.$current_row["SzámítógépID"].'"/>
                            <input type="submit" name="submit" value="Számítógép törlése" />
                        </form></td>';
                        echo '</tr>';
                	}
                    echo '</table>';

                	mysqli_free_result($res);
                } else {
                	die('Nem sikerült csatlakozni az adatábzishoz');
                }


?>