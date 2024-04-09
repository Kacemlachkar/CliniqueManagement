<?php
include_once('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $doctorID = $_POST['doctorID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    // Add other form fields for editing doctor details

    // Update doctor details in the database
    $sql = "UPDATE Doctor 
            SET FirstName = '$firstName', 
                LastName = '$lastName' 
                -- Add other fields for updating
            WHERE DoctorID = $doctorID";

    if ($conn->query($sql) === TRUE) {
        header("Location: doctor.php"); // Redirect to doctors page after successful update
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Retrieve doctor ID from query parameter
    $doctorID = $_GET['id'];

    // Fetch doctor details from the database
    $sql = "SELECT * FROM Doctor WHERE DoctorID = $doctorID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstName = $row['FirstName'];
        $lastName = $row['LastName'];
        // Add other fields for editing
    } else {
        echo "Doctor not found";
    }
}

$conn->close();
?>
