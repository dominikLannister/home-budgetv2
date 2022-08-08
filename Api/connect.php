<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "budgetdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, kwota FROM wydatki";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["kwota"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
