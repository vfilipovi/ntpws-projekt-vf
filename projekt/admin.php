

<?php

if(isset($_SESSION['user']['valid']) && isset($_SESSION['user']['role'])){
  if ($_SESSION['user']['valid'] == 'true' && ($_SESSION['user']['role'] == 'admin' || $_SESSION['user']['role'] == 'editor')) {

    echo "<h2 style='margin-left:25px;'>Admin ili Editor</h2>";
  
    //<!--Style za dodavanje clanka-->
    print '<div class="card card-outline-secondary" style="margin:20px; width:90%">
                      <div class="card-header">
                        <h3 class="mb-0">Dodaj novi članak</h3>
                      </div>
                      <div class="card-body">
                        <form action="index.php?menu=11" method="POST" enctype="multipart/form-data" autocomplete="off" class="form" role="form">
                          <div class="form-group">
                            <label for="naziv">Naziv članka</label> 
                            <input class="form-control" name="naziv" id="naziv" placeholder="Naziv članka" type="text">
                          </div>
                          <div class="form-group">
                            <label for="kratkiopis">Kratki opis - 100 znakova</label> 
                            <input class="form-control" name="kratkiopis" id="kratkiopis" placeholder="Kratki opis članka" type="text">
                          </div>
                          <div class="form-group">
                            <label for="autor">Autori</label> 
                            <input class="form-control" name="autor" id="autor" placeholder="Svi autori" type="text">
                          </div>
                          <div class="form-group">
                                <label for="tekst">Sadržaj članka</label>
                                <textarea class="form-control" id="tekst" name="tekst" rows="6"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="kategorija">Odabirite kategoriju</label>
                            <select class="form-control" id="kategorija" name="kategorija">
                            <option>vijest</option>
                            <option>scitech</option>
                            <option>auto</option>
                            </select>
                          </div>
                          <input type="file" name="file" id="file">
                          <div class="form-group">
                            <button class="btn btn-success btn-lg float-right" type="submit">Pošalji</button>
                          </div>
                        </form>
                      </div>
                    </div>';


  }
   else if ($_SESSION['user']['valid'] == 'true') {
    echo "<h2 style='margin-left:25px;'>Normalan Registriran korisnik - pristup zabranjen</h2>";
  } else {
    echo "<h2 style='margin-left:25px;'>Nemate ovlasti</h2>";
  }
}//prvi IF
else{
  echo "<h2 class='naslovCentar'>Nemate ovlasti</h2>";
}
  
  
  ?>
      