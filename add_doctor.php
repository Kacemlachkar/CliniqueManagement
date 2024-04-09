<?php
include_once('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $departmentID = $_POST['departmentID'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];

    // Insert doctor into the database
    $sql = "INSERT INTO Doctor (FirstName, LastName, DepartmentID, ContactNumber, Email) 
            VALUES ('$firstName', '$lastName', $departmentID, '$contactNumber', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: doctor.php"); // Redirect to doctor page after successful insertion
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
