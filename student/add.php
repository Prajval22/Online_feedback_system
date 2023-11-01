<!-- 



<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        a {
            display: block;
            text-align: center;
            text-decoration: none;
            padding: 10px;
            margin: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="add.html">Add Student</a>
    <a href="..\admin\index.php">Back To Admin</a>
</body>
</html> -->

<?php
include('../dbconn.php');
session_start();
$studentData = null;

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $password = $_POST['password'];

    // Sanitize user input to prevent SQL injection
    $name = $mysqli->real_escape_string($name);
    $rollno = $mysqli->real_escape_string($rollno);
    $password = $mysqli->real_escape_string($password);

    $query1 = "SELECT * FROM student WHERE id = '$rollno'";
    $result = $mysqli->query($query1);

    if ($result->num_rows > 0) {
        // The row with the specified value exists
        $studentData = "Student is already exist: $rollno.";
    } else {

        $sql = "INSERT INTO student (name, id, password) VALUES ('$name', '$rollno', '$password')";

        if (mysqli_query($mysqli, $sql)) {
            $studentData = "Record updated successfully.";
        } else {
            $studentData = "Error updating record: " . mysqli_error($connection);
        }

        $sql1 = "INSERT INTO entry (scholar) VALUES ('$rollno')";
        if (mysqli_query($mysqli, $sql1)) {
            $studentData .= "Record updated successfully.";
        } else {
            $studentData .= "Error updating record: " . mysqli_error($connection);
        }

        // Close the database connection
        $mysqli->close();
    }
} else {
    $studentData = "Error in the connection";
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .action-links {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .action-links a {
            display: block;
            text-align: center;
            text-decoration: none;
            padding: 10px;
            margin: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .action-links a:hover {
            background-color: #0056b3;
        }

        .student-data {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }

        .student-data h2 {
            color: #007BFF;
        }
    </style>
</head>
<body>
    
    <div class="action-links">
        <a href="add.html">Add Student</a>
        <a href="..\admin\index.php">Back To Admin</a>
    </div>
    <?php if ($studentData) : ?>
        <div class="student-data">
            <h2>Student Information</h2>
            <p>ID: <?php echo $rollno; ?></p>
            <p>Name : <?php echo $name; ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
