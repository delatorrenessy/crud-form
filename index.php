<?php
//including the database connection file
include_once("connection.php");
// Select data
$sql = "SELECT id, name, email FROM tbl_users";
$result = $conn->query($sql);
?>
<html>
<body>
    <h2>PHP Form Index</h2>
    <a href="index.php">Home</a> || <a href="insert.php">Add</a>
	<br/><br/>
    <?php
    if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . 
        " - Name: " . $row["name"] . 
        " - Email: " . $row["email"] . 
        " - <a href='update.php?id=" . $row["id"] . "'>Edit</a>" .
        " - <a href='delete.php?id=" . $row["id"] . "' " .
        "onClick=\"return confirm('Are you sure you want to delete?');\"" .
        ">Delete</a>" .
        "<br>";
    }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>
