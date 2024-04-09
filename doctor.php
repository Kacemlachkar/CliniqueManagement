<?php include_once('db_connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Clinic Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#patients">Patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="doctor.php">Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#appointments">Appointments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="departments.php">Departments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#staff">Staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#financial_services">Financial Services</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <h2>Doctors</h2>
    <!-- Add search form -->
    <form action="doctor.php" method="get" class="mb-3">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Enter Doctor ID" name="doctorID">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>
    <!-- End of search form -->
    <a href="add_doctor_form.php" class="btn btn-primary mb-3">Add Doctor</a>
    <table class="table">
        <thead>
            <tr>
                <th>DoctorID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>DepartmentID</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Actions</th> <!-- Add a column for actions -->
            </tr>
        </thead>
        <tbody>
            <?php
            // Check if a doctor ID is provided in the query string
            if (isset($_GET['doctorID'])) {
                $doctorID = $_GET['doctorID'];
                // Fetch doctor details by ID
                $sql = "SELECT * FROM Doctor WHERE DoctorID = $doctorID";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['DoctorID'] . "</td>";
                        echo "<td>" . $row['FirstName'] . "</td>";
                        echo "<td>" . $row['LastName'] . "</td>";
                        echo "<td>" . $row['DepartmentID'] . "</td>";
                        echo "<td>" . $row['ContactNumber'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>
                                <a href='edit_doctor_form.php?id=" . $row['DoctorID'] . "' class='btn btn-primary btn-sm'>Edit</a>
                                <a href='delete_doctor.php?id=" . $row['DoctorID'] . "' class='btn btn-danger btn-sm'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No doctor found with ID: $doctorID</td></tr>";
                }
            } else {
                // If no doctor ID is provided, show all doctors
                $sql = "SELECT * FROM Doctor";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['DoctorID'] . "</td>";
                        echo "<td>" . $row['FirstName'] . "</td>";
                        echo "<td>" . $row['LastName'] . "</td>";
                        echo "<td>" . $row['DepartmentID'] . "</td>";
                        echo "<td>" . $row['ContactNumber'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>
                                <a href='edit_doctor_form.php?id=" . $row['DoctorID'] . "' class='btn btn-primary btn-sm'>Edit</a>
                                <a href='delete_doctor.php?id=" . $row['DoctorID'] . "' class='btn btn-danger btn-sm'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No doctors found</td></tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
