<body>
    <form method="post" action="">
    Id: <input type="Text" id="idelete" name="idelete"><br>
    <input type="Submit" name="submit" value="Verwijder">
    </form>
</body>


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
    if(!empty($_POST['idelete']))
        $id=$_POST['idelete'];


    $query = "DELETE FROM menukaart WHERE id=$id";
    $result = mysqli_query($db, $query);
        if ( !$result ) {
        trigger_error('query failed', E_USER_ERROR);
        }

    $conn->close();
?>
