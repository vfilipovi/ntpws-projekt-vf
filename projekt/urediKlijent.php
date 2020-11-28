<?php



echo '<div class="row" style="width:90%" id="clanakPomak">';

// Retrieve news data sets:
$sql = "SELECT id,ime, prezime, email,username,role FROM korisnici WHERE id = $klijentid";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_array($result)) {

    print'
    <div class="card card-outline-secondary" style="margin:20px; width:90%">
        <div class="card-header">
            <h3 class="mb-0">Uredi korisnika</h3>
        </div>
        <div class="card-body">
            <form action="primjeniUrediKlijent.php" method="POST" autocomplete="off" class="form" role="form">
                <div class="form-group">
                    <label for="ime">Ime</label>
                    <input class="form-control" name="ime" id="ime" placeholder="ime" value=" ' . $row["ime"] .'" type="text">
                </div>
                <div class="form-group">
                    <label for="prezime">Prezime</label>
                    <input class="form-control" name="prezime" id="prezime" placeholder="Prezime" value=" ' . $row["prezime"] .'" type="text">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" name="email" id="email" placeholder="Email" value=" ' . $row["email"] .'" type="email">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" name="username" id="username" placeholder="Username" value=" ' . $row["username"] .'" type="text">
                </div>
                <input type="hidden" id="id" name="id" value=" ' . $row["id"] .'" ">
                <div class="form-group">
                    <button class="btn btn-success btn-lg float-right" type="submit">Pošalji</button>
                </div>
            </form>
        </div>
    </div>';
}

echo "</div>"
?>

