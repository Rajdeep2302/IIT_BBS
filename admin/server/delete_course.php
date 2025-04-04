<?php
include '../../server/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['course_id'])) {
    $courseId = $_POST['course_id'];

    // Fetch image filename to delete the file from the server
    $imageQuery = "SELECT image FROM courses WHERE id = ?";
    $stmt = mysqli_prepare($conn, $imageQuery);
    mysqli_stmt_bind_param($stmt, "i", $courseId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $imageFile);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    // Delete the course record
    $deleteQuery = "DELETE FROM courses WHERE id = ?";
    $stmt = mysqli_prepare($conn, $deleteQuery);
    mysqli_stmt_bind_param($stmt, "i", $courseId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Delete the image from uploads folder
    if ($imageFile && file_exists("uploads/" . $imageFile)) {
        unlink("uploads/" . $imageFile);
    }
}

header("Location: ../courses.php");
exit;
