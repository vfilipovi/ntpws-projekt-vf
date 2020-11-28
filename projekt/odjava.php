

<?php

# Stop Hacking attempt
define('__APP__', TRUE);

# Start session
session_start();


unset($_POST);
unset($_SESSION['user']);

$_SESSION['user']['valid'] = 'false';

print '<h2>Odjavljeni ste!</h2>';


?>
