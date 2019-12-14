<!-- create by @akjeyaramaji for delete the particular row from a table -->

    <?php

    $regno = $_GET["regno"];

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "alumini";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // sql to delete a record
    $sql = "DELETE FROM alumni_register WHERE regno='".$regno."' ";
    
    if ($conn->query($sql) === TRUE) {
        echo "Regno: ".$regno." Record was deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();

    ?>