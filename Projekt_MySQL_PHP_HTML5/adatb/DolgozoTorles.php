<?php
$conn = mysqli_connect('localhost', 'root','', 'munkahely') or die("Hibás csatlakozás!");
    	mysqli_query($conn, 'SET NAMES UTF-8');
        mysqli_query($conn, "SET character_set_results=utf8");
        mysqli_set_charset($conn, 'utf-8');
    echo'<a href="index.html" >Vissza</a>';
    echo '<h2>Dolgozó törlése</h2>';

    if(mysqli_select_db($conn, 'munkahely')) {
                    $sql = "SELECT `DolgozóiID`, `Név`, `Születési Dátum`, `Lakcim` FROM dolgozó";
                	$res = mysqli_query($conn, $sql) or die ('Hibás utasítás!');

                    echo '<table border=2>';
                    echo '<tr>';
                    echo '<th>DolgozóiID</th>';
                    echo '<th>Név</th>';
                    echo '<th>Születési Dátum</th>';
                    echo '<th>Lakcím</th>';
                    echo '</tr>';

                	while(($current_row = mysqli_fetch_assoc($res))!=null) {
                        echo '<tr>';
                        echo '<td>' . $current_row['DolgozóiID'] . ' </td>';
                        echo '<td>' . $current_row["Név"] . ' </td>';
                        echo '<td>' . $current_row["Születési Dátum"] . ' </td>';
                        echo '<td>' . $current_row["Lakcim"] . ' </td>';
                        echo '<td>
                        <form method="POST" action="DeleteDolgozo.php">
                            <input type="hidden" name="sor" value="'.$current_row["DolgozóiID"].'"/>
                            <input type="submit" name="submit" value="Dolgozó törlése" />
                        </form></td>';
                        echo '</tr>';
                	}
                    echo '</table>';

                	mysqli_free_result($res);
                } else {
                	die('Nem sikerült csatlakozni az adatábzishoz');
                }


?>