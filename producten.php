<link rel="stylesheet" href="css/style.css" type="text/css">


<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_chinees";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, NaamNL, NaamCH, Prijs, Allergieinfo, Verwerker FROM menukaart";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

        echo '<table id="tafel">';
        echo '<tr id="tafelruft">';
        echo '<td>' . "Id: " . $row["id"].'</td>' . '<td id="nlnaam1">' ."Gerecht Nederlands: " . $row["NaamNL"]. '</td>'.'<td>' . "Gerecht Chinees:" . $row["NaamCH"]. '</td>' . '<td id="prijs1">'. " Prijs: €" . $row["Prijs"]. '</td>' . '<td>' . "Allergie info: " . $row["Allergieinfo"]. '</td>'. '<td>' . "Verwerker: " . $row["Verwerker"]. '</td>'.  "<br>";
        echo '</tr>';
        echo '</table>';

        }

    } else {
        echo "0 results";
    }
    $conn->close();
?>
