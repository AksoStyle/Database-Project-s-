<?php
$conn = mysqli_connect('localhost', 'root','', 'munkahely') or die("Hibás csatlakozás!");
    	mysqli_query($conn, 'SET NAMES UTF-8');
        mysqli_query($conn, "SET character_set_results=utf8");
        mysqli_set_charset($conn, 'utf-8');
    echo'<a href="index.html" >Vissza</a>';
    echo '<h2>Iroda törlése</h2>';

    if(mysqli_select_db($conn, 'munkahely')) {
                    $sql = "SELECT `SzobaID`, `Iroaszal`, `Szék` FROM iroda";
                	$res = mysqli_query($conn, $sql) or die ('Hibás utasítás!');

                    echo '<table border=2>';
                    echo '<tr>';
                    echo '<th>SzobaID</th>';
                    echo '<th>Iroasztal</th>';
                    echo '<th>Szék</th>';
                    echo '</tr>';

                	while(($current_row = mysqli_fetch_assoc($res))!=null) {
                        echo '<tr>';
                        echo '<td>' . $current_row['SzobaID'] . ' </td>';
                        echo '<td>' . $current_row["Iroaszal"] . ' </td>';
                        echo '<td>' . $current_row["Szék"] . ' </td>';
                        echo '<td>
                        <form method="POST" action="DeleteIroda.php">
                            <input type="hidden" name="sor" value="'.$current_row["SzobaID"].'"/>
                            <input type="submit" name="submit" value="Iroda törlése" />
                        </form></td>';
                        echo '</tr>';
                	}
                    echo '</table>';

                	mysqli_free_result($res);
                } else {
                	die('Nem sikerült csatlakozni az adatábzishoz');
                }


?>