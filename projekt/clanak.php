<?php

      /*# Stop Hacking attempt
      define('__APP__', TRUE);

      # Database connection
      include("dbconn.php");

      session_start();
      */

echo '<div class="row" id="clanakPomak">';

// Retrieve news data sets:
$sql = "SELECT id, naslov, tekst,vrijemeObjave,kategorija,kratkiOpis,imeAutora,slikaPath FROM vijesti WHERE id = $clanakid";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_array($result)) {

  echo "<h2 class='naslovCentar'>" . $row['naslov'] . "</h2>";
  echo "<br/><br/>";
  echo "<div class='slikaclanak' style='background-image: url(\"$row[slikaPath]\")'></div>";
  echo "<br/><br/><br/><br/>";
  echo "<p>" . $row['tekst'] . "</p>";
  echo "<br/><br/><br/><br/>";
  echo "Autor: " . $row['imeAutora'] . ", vrijeme i datum objave: " . $row['vrijemeObjave'] . "";

  if(isset($_SESSION['user']['role'])){
    if ($_SESSION['user']['role'] == 'admin') {
    echo "<div id='izbrisiButton'>";
    echo "<a href='delete.php?id=" . $row['id'] . "'> <button type='button' class='btn btn-danger'>Izbrisi</button> </a>";
    echo "</div>";
    }
  }
  

  echo "</div>";
}