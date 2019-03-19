<link rel="stylesheet" href="css/style.css" type="text/css">


<?php
    if(isset($_POST["submit"])){
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

    $id = $_POST["Id"];
    $nl = $_POST["NaamNL"];
    $ch = $_POST["NaamCH"];
    $pr = $_POST["Prijs"];
    $all = $_POST["Allergieinfo"];
    $ver = $_POST["Verwerker"];

    $sql = "UPDATE menukaart SET ("$nl", "$ch", "$pr", "$all", "$ver") WHERE id= "$id"";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record: " . $conn->error;
    }
    //$url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
    //echo '<meta http-equiv="refresh" content="0;URL=' . $url . '">';
    }

$conn->close();
?>
