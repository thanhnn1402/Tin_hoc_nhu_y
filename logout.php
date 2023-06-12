<?php
    require('./admin/config/config.php');

    if(isset($_SESSION['user_logged'])) {
        unset($_SESSION['user_logged']);

        header('location: login.php');
    }
?>