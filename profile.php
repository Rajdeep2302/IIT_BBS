<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<?php
session_start();
include("./server/database.php"); // Database connection

// Check if user is logged in
if (!isset($_COOKIE["regid"])) {
    die("User not logged in. <a href='signin.php'>Login here</a>");
}

// Fetch student data
$user_id = $_COOKIE["regid"];
$stmt = $conn->prepare("SELECT * FROM student WHERE regid = ?");
$stmt->bind_param("s", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if student exists
if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
} else {
    die("Student not found.");
}

$stmt->close();
$conn->close();
?>

<body class="bg-gray-100 flex min-w-screen flex-col items-center justify-between min-h-screen">
    <?php
    include "./landing/header.php";
    ?>

    <div class="max-w-3xl w-full bg-white p-8 rounded-lg shadow-lg  mt-[200px]">

        <!-- Student Information -->
        <h2 class="text-3xl font-bold text-blue-600 text-center mb-4">Student Information</h2>
        <div class="bg-gray-200 p-4 rounded-md">
            <p class="text-lg"><strong>Name:</strong> <span><?php echo htmlspecialchars($student['name']); ?></span></p>
            <p class="text-lg"><strong>Reg ID:</strong> <span><?php echo htmlspecialchars($student['regid']); ?></span></p>
            <p class="text-lg"><strong>Email:</strong> <span><?php echo htmlspecialchars($student['email']); ?></span></p>
            <p class="text-lg"><strong>Mobile:</strong> <span><?php echo htmlspecialchars($student['number']); ?></span></p>
        </div>

        <!-- Enrolled Courses Table -->
        <h3 class="text-2xl font-semibold text-gray-700 mt-6">Enrolled Courses</h3>
        <div class="mt-4 overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left">Course Name</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Instructor</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Duration</th>
                    </tr>
                </thead>
                <tbody id="courseTable">
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Web Development</td>
                        <td class="border border-gray-300 px-4 py-2">Dr. Smith</td>
                        <td class="border border-gray-300 px-4 py-2">3 Months</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    include "./landing/footer.php";
    ?>
</body>

</html> 

