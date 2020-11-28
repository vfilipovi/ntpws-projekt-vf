

<?php
print '
                        <h1 class="naslovCentar">Prijava</h1>
                        <div id="signin">';


if ($_POST['_action_'] == FALSE) {
    print '
                            <form action="" name="myForm" id="myForm" method="POST">
                                <input type="hidden" id="_action_" name="_action_" value="TRUE">
                                <label for="username">Username:*</label>
                                <input type="text" id="username" name="username" value="" required>
                                                        
                                <label for="password">Password:*</label>
                                <input type="password" id="password" name="password" value="" pattern=".{4,}" required>
                                                        
                                <input type="submit" value="Submit">
                            </form>';
} else if ($_POST['_action_'] == TRUE) {

    $query  = "SELECT * FROM korisnici";
    $query .= " WHERE username='" .  $_POST['username'] . "'";
    $result = @mysqli_query($conn, $query);
    $row = @mysqli_fetch_array($result, MYSQLI_ASSOC);

    if (password_verify($_POST['password'], $row['password'])) {
        echo "uspjesan login";
        #password_verify https://secure.php.net/manual/en/function.password-verify.php
        $_SESSION['user']['valid'] = 'true';
        $_SESSION['user']['id'] = $row['id'];
        $_SESSION['user']['firstname'] = $row['ime'];
        $_SESSION['user']['lastname'] = $row['prezime'];
        $_SESSION['user']['role'] = $row['role'];
        $_SESSION['message'] = '<p>Dobrodošli, ' . $_SESSION['user']['ime'] . ' ' . $_SESSION['user']['prezime'] . '</p>';
        # Redirect to admin website
        header("Location: index.php");
    }

    # Bad username or password
    else {
        unset($_SESSION['user']);
        $_SESSION['message'] = '<p>You entered wrong email or password!</p>';
        echo "neispravni podaci";
        //header("Location: prijava.php");
    }
}


print '
	</div>';
?>

