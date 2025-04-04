<?php
    // DLELETE THE COOKIES
    setcookie("regid", "", time() - 3600, "/");
    header("Location: ../index.php");
?>