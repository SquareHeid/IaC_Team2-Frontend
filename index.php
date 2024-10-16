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
    echo <h1>Team 2 Demonstration App</h1>
    echo <h2> Uses a PHP front end to query a MySQL backend database, deployed via Openshift and with source code controlled via github VCS.
    echo "<table style="border:2px solid black">";
    echo "<tr style='border:1px solid black; background-color: grey'><th>Name</th><th>Roll Number</th></tr>";
    echo "<tr style='border:1px solid black; background-color: light-grey'><td>" . $row["firstname"]. "</td><td>" . $row["rollnumber"]. "</td></tr>";
    echo "<table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
