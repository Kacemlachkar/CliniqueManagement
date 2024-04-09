<?php
include_once('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $departmentName = $_POST['departmentName'];
    $description = $_POST['description'];

    // Insert department into the database
    $sql = "INSERT INTO Department (DepartmentName, Description) 
            VALUES ('$departmentName', '$description')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: departments.php"); // Redirect to departments page after successful insertion
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
