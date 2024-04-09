<!-- add_department_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Clinic Management System</a>
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
        <h2>Add Department</h2>
        <form action="add_department.php" method="post">
            <div class="form-group">
                <label for="departmentName">Department Name</label>
                <input type="text" class="form-control" id="departmentName" name="departmentName" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Department</button>
        </form>
    </div>
</body>
</html>
