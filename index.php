<?php
$servername = "database";
$username = "root";
$password = "123";
$dbname = "aa_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT firstname, rollnumber FROM tb1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Roll Number</th></tr>";
    echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["rollnumber"]. "</td></tr>";
    echo "<table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
