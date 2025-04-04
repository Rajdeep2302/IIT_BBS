
<?php
//set cookie to expire in the past to delete it
setcookie("faculty_id", "", time() - 3600, "/"); // 1 hour ago
echo "<script> window.location.href='signin.php';</script>";
?>