<?php
include_once('db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>
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
        <h2>Departments</h2>
        <a href="add_department_form.php" class="btn btn-primary mb-3">Add Department</a>
        <table class="table">
            <thead>
                <tr>
                    <th>DepartmentID</th>
                    <th>Department Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM Department";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['DepartmentID'] . "</td>";
                        echo "<td>" . $row['DepartmentName'] . "</td>";
                        echo "<td>" . $row['Description'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No departments found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

