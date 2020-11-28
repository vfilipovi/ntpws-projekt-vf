

<?php

# Stop Hacking attempt
define('__APP__', TRUE);

# Database connection
include("dbconn.php");

session_start();

$user_id = $_GET['id'];
//echo "$clanak_id";

// Retrieve news data sets:
$sql = "DELETE FROM korisnici WHERE id = $user_id";

if (mysqli_query($conn, $sql)) {
  mysqli_close($conn);
  header('Location: index.php?menu=12');
} else {
  echo "Greška prilikom brisanja";
}
