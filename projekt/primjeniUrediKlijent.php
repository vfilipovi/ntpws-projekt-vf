

<?php


# Stop Hacking attempt
define('__APP__', TRUE);

# Database connection
include("dbconn.php");

session_start();




//$query  = "UPDATE korisnici SET ime=". $_POST['ime'] .", prezime = " .$_POST['prezime'].", email=".$POST['email'].", username=".$POST['username']." WHERE id = ". $_POST['id'].";
$query = "UPDATE korisnici set ime='" . $_POST['ime'] . "', prezime='" . $_POST['prezime'] . "', email='" . $_POST['email'] . "', username='" . $_POST['username'] . "' WHERE id='" . $_POST['id'] . "'";


if (mysqli_query($conn, $query)) {
    mysqli_close($conn);
    header('Location: index.php?menu=12');
  } else {
    echo "Greška prilikom brisanja";
  }



?>