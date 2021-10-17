<?php
    if( !isset($_SESSION['aMemberID'])) {
        Header("Location: ../login/login.php");
    }
?>