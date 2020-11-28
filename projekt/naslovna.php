<?php
# Database connection
include("dbconn.php");

// Retrieve news data sets:
$sql = "SELECT id, naslov, tekst,vrijemeObjave,kategorija,kratkiOpis,slikaPath FROM vijesti WHERE kategorija = 'vijest' ORDER BY vrijemeObjave DESC LIMIT 3";
$result = mysqli_query($conn, $sql);

print'<h2 class="naslovCentar">News</h2>';

while ($row = mysqli_fetch_array($result)) {

  if ($row['kategorija'] == 'vijest') {
    echo " <div class='col-lg-4 col-md-6 mb-4'>
                      <div class='card h-100'>
                      <a href=' index.php?menu=6&clanakid=" . $row['id'] ."'><img class='card-img-top' src=' " . $row['slikaPath'] . "' alt=''></a>
                      <div class='card-body'>
                        <h4 class='card-title'>
                        <a href=' index.php?menu=6&clanakid=" . $row['id'] . "'>" . $row['naslov'] . "</a>
                        </h4>
                        <p class='card-text'>" . $row['kratkiOpis'] . "</p>
                        </div>
                        </div>
                        </div>
                 ";
  }
}

?>

</div>
        <!-- /.row -->

        <h2 class="naslovCentar">Sci/Tech</h2>

        <div class="row">
          

        <?php
          # Database connection
          include("dbconn.php");


          // Retrieve news data sets:
          $sql = "SELECT id, naslov, tekst,vrijemeObjave,kategorija,kratkiOpis,slikaPath FROM vijesti WHERE kategorija = 'scitech' ORDER BY vrijemeObjave DESC  LIMIT 3";
          $result = mysqli_query($conn,$sql);


          while($row = mysqli_fetch_array($result)) {

            if($row['kategorija']=='scitech'){
                  echo " <div class='col-lg-4 col-md-6 mb-4'>
                      <div class='card h-100'>
                      <a href=' index.php?menu=6&clanakid=" . $row['id'] ."'><img class='card-img-top' src=' " . $row['slikaPath'] . "' alt=''></a>
                      <div class='card-body'>
                        <h4 class='card-title'>
                        <a href=' index.php?menu=6&clanakid=" . $row['id'] ."'>" . $row['naslov'] . "</a>
                        </h4>
                        <p class='card-text'>" . $row['kratkiOpis'] . "</p>
                        </div>
                        </div>
                        </div>
                 ";

            }
              
          }

          ?>
          
        </div>
        <!-- /.row -->

        <h2 class="naslovCentar">Auto</h2>

        <div class="row">

        <?php
          # Database connection
          include("dbconn.php");


          // Retrieve news data sets:
          $sql = "SELECT id, naslov, tekst,vrijemeObjave,kategorija,kratkiOpis,slikaPath FROM vijesti WHERE kategorija = 'auto' ORDER BY vrijemeObjave DESC LIMIT 3";
          $result = mysqli_query($conn,$sql);


          while($row = mysqli_fetch_array($result)) {

            if($row['kategorija']=='auto'){
                  echo " <div class='col-lg-4 col-md-6 mb-4'>
                      <div class='card h-100'>
                      <a href='  index.php?menu=6&clanakid=" . $row['id'] ."'><img class='card-img-top' src=' " . $row['slikaPath'] . "' alt=''></a>
                      <div class='card-body'>
                        <h4 class='card-title'>
                        <a href='  index.php?menu=6&clanakid=" . $row['id'] ."'>" . $row['naslov'] . "</a>
                        </h4>
                        <p class='card-text'>" . $row['kratkiOpis'] . "</p>
                        </div>
                        </div>
                        </div>
                 ";

            }
              
          }

          ?>
