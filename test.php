<?php
// Connect to the MySQL database
$host = "159.89.34.140";
$username = "morris";
$password = "Painfulanal1!";
$dbname = "";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select all data from the users table
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Generate the HTML table
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "</tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>
