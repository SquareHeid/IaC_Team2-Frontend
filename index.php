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

echo "<h1>Team 2 Demonstration App</h1>";
echo "<h2> Uses a PHP front end to query a MySQL backend database, deployed via Openshift and with source code controlled via github VCS.</h2>";
echo "<table>";
echo "<tr><th>Name</th><th>Roll Number</th></tr>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["rollnumber"]. "</td></tr>";
  }
} else {
  echo "0 results";
}
echo "<table>";

$conn->close();
?>
