-- Create the database
CREATE DATABASE CliniqueManagement;

-- Use the created database
USE CliniqueManagement;

-- Create the Department table
CREATE TABLE Department (
    DepartmentID INT AUTO_INCREMENT PRIMARY KEY,
    DepartmentName VARCHAR(255),
    Description TEXT
);

-- Create the Patient table
CREATE TABLE Patient (
    PatientID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    DateOfBirth DATE,
    Gender ENUM('Male', 'Female', 'Other'),
    ContactNumber VARCHAR(20),
    Email VARCHAR(255)
);

-- Create the Doctor table
CREATE TABLE Doctor (
    DoctorID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    DepartmentID INT,
    ContactNumber VARCHAR(20),
    Email VARCHAR(255),
    FOREIGN KEY (DepartmentID) REFERENCES Department(DepartmentID)
);

-- Create the Staff table
CREATE TABLE Staff (
    StaffID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    DepartmentID INT,
    Position VARCHAR(255),
    ContactNumber VARCHAR(20),
    Email VARCHAR(255),
    FOREIGN KEY (DepartmentID) REFERENCES Department(DepartmentID)
);

-- Create the Appointment table
CREATE TABLE Appointment (
    AppointmentID INT AUTO_INCREMENT PRIMARY KEY,
    PatientID INT,
    DoctorID INT,
    DepartmentID INT,
    AppointmentDate DATE,
    StartTime TIME,
    Status ENUM('Scheduled', 'Completed', 'Canceled'),
    FOREIGN KEY (PatientID) REFERENCES Patient(PatientID),
    FOREIGN KEY (DoctorID) REFERENCES Doctor(DoctorID),
    FOREIGN KEY (DepartmentID) REFERENCES Department(DepartmentID)
);

-- Create the FinancialServicesUnit table
CREATE TABLE FinancialServicesUnit (
    TransactionID INT AUTO_INCREMENT PRIMARY KEY,
    PatientID INT,
    DoctorID INT,
    StaffID INT,
    TransactionDate DATE,
    Amount DECIMAL(10, 2),
    Description TEXT,
    FOREIGN KEY (PatientID) REFERENCES Patient(PatientID),
    FOREIGN KEY (DoctorID) REFERENCES Doctor(DoctorID),
    FOREIGN KEY (StaffID) REFERENCES Staff(StaffID)
);
