

<?php
# Database connection
include("dbconn.php");


$query  = "SELECT * FROM korisnici WHERE email='" .  $_POST['email'] . "' OR username='" .  $_POST['username'] . "'";
$result = @mysqli_query($conn, $query);
$row = @mysqli_fetch_array($result, MYSQLI_ASSOC);

//ukupan broj vracenih redova
$num_rows = mysqli_num_rows($result);

//ako postoji vracen podatak uz baze, dakle korisnik je vec registriran
if ($num_rows == 0) {
    # password_hash https://secure.php.net/manual/en/function.password-hash.php
    # password_hash() creates a new password hash using a strong one-way hashing algorithm
    $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 12]);

    $query  = "INSERT INTO korisnici (ime, prezime, email, username, password)";
    $query .= " VALUES ('" . $_POST['ime'] . "', '" . $_POST['prezime'] . "', '" . $_POST['email'] . "', '" . $_POST['username'] . "', '" . $pass_hash . "')";

    if (mysqli_query($conn, $query)) {
        # ucfirst() — Make a string's first character uppercase
        # strtolower() - Make a string lowercase
        echo '<p>' . ucfirst(strtolower($_POST['ime'])) . ' ' .  ucfirst(strtolower($_POST['prezime'])) . ', thank you for registration </p>
                                <hr>';
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
} else {
    echo  '<h2 class="naslovCentar" >Navedeni korisnik već postoji!</h2>';
}



?>