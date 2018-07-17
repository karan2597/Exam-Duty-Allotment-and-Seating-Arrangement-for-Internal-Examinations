<?php
    session_start();
    $_SESSION['loggedIn'] = false;
    header("Location: alt.php");
?>
