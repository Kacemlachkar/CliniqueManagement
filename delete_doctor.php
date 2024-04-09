<?php
include_once('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $doctorID = $_GET['id'];

    // Delete doctor from the database
    $sql = "DELETE FROM Doctor WHERE DoctorID = $doctorID";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: doctor.php"); // Redirect to doctors page after successful deletion
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request";
}

$conn->close();
?>
