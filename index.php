<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background-color: #f0f0f0; }
        .welcome-container { text-align: center; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); }
        h1 { color: #333; }
        p { color: #666; }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Team 2 Demonstration App with Fontend<>Backend connectivity</h1>
        <p>The below results are gather from a MySQL DB container running on openshift</p>
		<p>The source code is held in github, and when changes ar epushed the appliciton is automatically rebuilt</p>
		<p>The source has been changed</p>
	<table>
	<tr><th>Name</th><th>Roll Number</th></tr>

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
    echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["rollnumber"]. "</td></tr>";
  }
} else {
  echo "0 results";
}
echo "<table>";

$conn->close();
?>

</body>
</html>
