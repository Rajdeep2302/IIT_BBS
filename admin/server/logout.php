<?php
    // DLELETE THE COOKIES
    setcookie("adminID", "", time() - 3600, "/");
    header("Location: ../index.php");
?>