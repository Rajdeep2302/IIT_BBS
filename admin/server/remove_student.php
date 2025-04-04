<?php
include '../../server/database.php';

// Check if regid is passed via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['regid'])) {
    $regid = mysqli_real_escape_string($conn, $_POST['regid']);

    // Delete the student from the database
    $query = "DELETE FROM student WHERE regid = '$regid'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo json_encode(['status' => 'success', 'message' => 'Student removed successfully']);
        header('Location: ../users.php');
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to remove student']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>
