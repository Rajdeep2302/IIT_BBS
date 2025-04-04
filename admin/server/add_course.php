<?php
include '../../server/database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['courseName'];
    $desc = $_POST['courseDesc'];
    $instructors = $_POST['courseInstructors']; // This is an array
    $price = $_POST['coursePrice'];
    $date = $_POST['courseDate'];
    $syllabus = $_POST['courseSyllabus'];

    // Convert array of instructors into comma-separated string
    $instructorStr = implode(", ", $instructors);

    // Handle file upload
    if (isset($_FILES['courseImage']) && $_FILES['courseImage']['error'] === 0) {
        $imageName = time() . '_' . basename($_FILES['courseImage']['name']);
        $uploadPath = '../../uploads/' . $imageName; // adjust path

        // Create uploads directory if not exists
        if (!file_exists('../../uploads')) {
            mkdir('../../uploads', 0777, true);
        }

        if (move_uploaded_file($_FILES['courseImage']['tmp_name'], $uploadPath)) {
            $query = "INSERT INTO courses (course_name, description, instructor, price, date, image, syllabus) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "sssssss", $name, $desc, $instructorStr, $price, $date, $imageName, $syllabus);
            mysqli_stmt_execute($stmt);
        }
    }
}

header("Location: ../courses.php");
exit;
