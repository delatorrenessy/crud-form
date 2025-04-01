<?php
//including the database connection file
include_once("connection.php");
//getting id of the data from url
$id = $_GET['id'];
// Select data based on the id
$sql = "SELECT name, email FROM tbl_users WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($row) {
    $name = $row['name'];
    $email = $row['email'];
} else {
    echo "No record found for this ID.";
}
//select statement end
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    // Simple validation (you can add more as needed)
    if (!empty($name) && !empty($email)) {
        // Process the form (save to a database) "UPDATE tbl_users SET email = '$newEmail' WHERE id = $id";
        $sql = "UPDATE tbl_users SET name = '$name', email = '$email' ".
        "WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    } else {
        echo "<p>Please fill in all fields.</p>";
    }
} 
?>
<html><body>
    <h2>PHP Form Update</h2>
    <a href="index.php">Home</a>
	<br/><br/>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name;?>" 
        required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" 
        value="<?php echo $email;?>" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body></html>
