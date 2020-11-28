

<?php

# Stop Hacking attempt
define('__APP__', TRUE);

# Database connection
include("dbconn.php");

session_start();

$clanak_id = $_GET['id'];
//echo "$clanak_id";

// Retrieve news data sets:
$sql = "DELETE FROM vijesti WHERE id = $clanak_id";

if (mysqli_query($conn, $sql)) {
  mysqli_close($conn);
  //header('Location: index.php');
} else {
  echo "Greška prilikom brisanja";
}
