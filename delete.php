<?php
//including the database connection file
include_once("connection.php");
//getting id of the data from url
$id = $_GET['id'];
$sql = "DELETE FROM tbl_users WHERE id = $id";
if ($conn->query($sql) === TRUE) {
    //redirecting to the display page (index.php in our case)
    header("Location:index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>