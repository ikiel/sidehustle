<?php
    session_start();
    if ($_SESSION['login'] !== true && !isset($_SESSION['id'])) {
        header("Location: index.php");
    }

    $current_user_session = $_SESSION['id'];
?>