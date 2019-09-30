<?php
$servername = "localhost";
$username = "root";
$password = "secret";

// CREATE connection
$conn = new mysqli($servername, $username, $password);

// Check connection: to check that this is working and everything is connecting. If there is an error, it will spit it out
if ($conn->connect_error) {
  die("No worky" . $conn->connect_error);
} else {
$success = "It worked!";
}

$thisPagename = $_GET["page"] ?? "Home";

?>
<html>
<body>
<header>
  <img src="websitelogo.png" alt="Picture of Logo" style="height: 100px; width: 100px; display:inline-block;">
  <nav style="display: inline-block; float: right; width: 30%;">
    <?php
    $sql = "SELECT pagename FROM test.content";
    $result = $conn->query($sql);
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
      echo "<li style=\"list-style-type:none; display:inline-block; padding-right:5%; margin-right:4%; margin-top:5%;\"><a style=\"color: black; font-size: 18px; text-decoration:none;\"href='index.php?page=" . $row['pagename'] . "'>" .$row['pagename']. "</a></li>";
    }
    echo "</ul>";
    
    ?>
  </nav>
  </header>
  <section style="width: 100%; background-color: lightgray;">
    <div>
      <?php 
      $sql = "SELECT * FROM test.content WHERE pagename = '$thisPagename'";
      $result = $conn->query($sql);
      //fetch_assoc takes sql result and returns it into an array. it takes data from query and makes it a stack of plates that we can grab
      $row = $result->fetch_assoc();
      echo "<h1 style=\"text-align:center; padding-top:2%;\">" . $row['pagetitle'] . "</h1>";
      echo "<p style=\"text-align:center;\">" . $row['pagename'] . "</p>";
      echo "<p style=\"text-align:center;\">" . $row['pagecontent'] . "</p>";
      echo "<img src=\"http://lorempixel.com/400/200/\" alt=\"Random Piture\" style=\"margin-left: 38%; margin-top:4%; padding-bottom: 6%;\"> ";
      
      ?>
      
    </div>
  </section>
  <footer style="height: 100px; width: 100%; background-color: gray;"></footer>
</body>
</html>