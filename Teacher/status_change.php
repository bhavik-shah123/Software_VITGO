<?php
if (isset($_POST["submit"])) {
    // Checking For Blank Fields..
    if ($_POST["acknum"] == "" || $_POST["name"] == "" || $_POST["sub"] == "") {
        echo "Fill All Fields..";
    } else {
        $acknum = $_POST['acknum'];
        $sub = $_POST['sub'];
        $conn = mysqli_connect("localhost", "root", "software", "soft");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE outing SET position='$sub' WHERE acknum='$acknum'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
}
