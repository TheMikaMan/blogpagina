<?php
    if(isset($_POST["submit"])){
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "db_chinees";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO menukaart(Id, NaamNL, NaamCH, Prijs, Allergieinfo, Verwerker)VALUES ('".$_POST["Id"]."','".$_POST["NaamNL"]."','".$_POST["NaamCH"]."','".$_POST["Prijs"]."','".$_POST["Allergieinfo"]."','".$_POST["Verwerker"]."')";

    if (mysqli_query($conn, $sql)) {
    echo "<script type= 'text/javascript'>alert('Product succesvol toegevoegd!');</script>";
        } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    $conn->close();
    }
    $url = $_SERVER['HTTP_REFERER']; // right back to the referrer page from where you came.
    echo '<meta http-equiv="refresh" content="0;URL=' . $url . '">';
?>

