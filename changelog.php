<!DOCTYPE HTML>
<html>
<head>

<!-- PHP code to set up the Database queries -->

<?php
$host = "159.89.34.140";
$username = "morris";
$password = "Painfulanal1!";
$dbname = "changes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Version, Changes, Date FROM `changes` WHERE 1";
$result = $conn->query($sql);
?>
	
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">	<title>Welcome!</title>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/shop.css">
<style>

  

</style>
</head>
<body lang="en-US" dir="ltr">
<div id="page container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/index.html">     Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about.html">About Me</a>
      </li>
    </div>
  </nav>
<h3 style="font-size:20px">This changelog uses a MySQL query to populate the table below with results </h3>
<br>
<br>
<br>
<hr>

<div class="row">
  <div class="column pad">

  </div>
  <div class="column version">
    <h3>Version:</h3>
  </div>
  <div class="column desc">
    <h3>Description of changes:</h3>
  </div>
  <div class="column date">
    <h3>Date:</h3>
  </div>
</div>

<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $version = $row["Version"];
        $change = $row["Changes"];
        $date = $row["Date"];
   ?>
  <div class="row">
      <div class="column version">
        <p style="font-size:15px"><?php echo $version;?></p>
      </div>
      <div class="column desc">
        <p style="font-size:15px"><?php echo $change;?></p>
      </div>
      <div class="column date">
        <p style="font-size:15px"><?php echo $date;?></p>
      </div>
  </div>
   <?php
      }
} else {
    echo "0 results";
}

$conn->close();
?>

</div>
<footer>Copyright &copy;2023-<script>document.write(new Date().getFullYear())</script>, Joshua Morris <a href="/changelog.php">Version 0.2</a></footer>
</body>
</html>