<?php include_once('db_connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
    .hospital-bg-color {
        background-color: #27B76F; /* Replace this with the hospital color code */
    }
    table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .canvas-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .canvas-table th, .canvas-table td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
            vertical-align: top;
        }
        .key-elements-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .key-elements-list li {
            margin-bottom: 5px;
        }
        .canvas-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark hospital-bg-color">
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
</nav>>

<div class="container mt-5">
<h2 class="canvas-title">Clinic Management System Business Model Canvas</h2>
    <table class="canvas-table">
        <tr>
            <th>Key Partners</th>
            <td>
                <ul class="key-elements-list">
                    <li>Healthcare providers (Doctors, Nurses)</li>
                    <li>Medical equipment suppliers</li>
                    <li>Software developers</li>
                </ul>
            </td>
        </tr>
        <tr>
            <th>Key Activities</th>
            <td>
                <ul class="key-elements-list">
                    <li>Patient management</li>
                    <li>Appointment scheduling</li>
                    <li>Medical records management</li>
                </ul>
            </td>
        </tr>
        <tr>
            <th>Value Proposition</th>
            <td>
                <ul class="key-elements-list">
                    <li>Efficient patient care</li>
                    <li>Streamlined appointment scheduling</li>
                    <li>Accurate medical records management</li>
                </ul>
            </td>
        </tr>
        <tr>
            <th>Customer Relationships</th>
            <td>
                <ul class="key-elements-list">
                    <li>Personalized patient care</li>
                    <li>Prompt response to queries and concerns</li>
                </ul>
            </td>
        </tr>
        <tr>
            <th>Channels</th>
            <td>
                <ul class="key-elements-list">
                    <li>Online appointment booking</li>
                    <li>In-person appointments</li>
                    <li>Phone and email communication</li>
                </ul>
            </td>
        </tr>
        <tr>
            <th>Customer Segments</th>
            <td>
                <ul class="key-elements-list">
                    <li>Patients of all ages and backgrounds</li>
                    <li>Healthcare professionals</li>
                </ul>
            </td>
        </tr>
        <tr>
            <th>Cost Structure</th>
            <td>
                <ul class="key-elements-list">
                    <li>Development and maintenance of software</li>
                    <li>Staff salaries</li>
                    <li>Equipment and infrastructure costs</li>
                </ul>
            </td>
        </tr>
        <tr>
            <th>Revenue Streams</th>
            <td>
                <ul class="key-elements-list">
                    <li>Consultation fees</li>
                    <li>Treatment charges</li>
                    <li>Subscription plans for premium services</li>
                </ul>
            </td>
        </tr>
    </table>
</div>

<!-- Bootstrap JS (Optional) - Include if you need JavaScript functionalities from Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
