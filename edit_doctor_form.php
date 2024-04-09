<!-- edit_doctor_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Doctor</h2>
        <form action="edit_doctor.php" method="post">
            <input type="hidden" name="doctorID" value="<?php echo $_GET['id']; ?>">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo isset($firstName) ? $firstName : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo isset($lastName) ? $lastName : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="departmentID">Department ID</label>
                <input type="number" class="form-control" id="departmentID" name="departmentID" value="<?php echo isset($departmentID) ? $departmentID : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="contactNumber">Contact Number</label>
                <input type="text" class="form-control" id="contactNumber" name="contactNumber" value="<?php echo isset($contactNumber) ? $contactNumber : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
            </div>
            <!-- Add other form fields for editing doctor details -->
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</body>
</html>
