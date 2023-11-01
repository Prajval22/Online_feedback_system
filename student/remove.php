<!-- <?php
// include('../dbconn.php');
// session_start();
// if (isset($_POST["remove"])) {
//     // Get the roll number from the form
//     $rollno = $_POST["rollno"];


//     // Performing the student removal from the database
//     $sql = "DELETE FROM student WHERE id = '$rollno'";

//     if (mysqli_query($mysqli, $sql)) {
//         echo "Student with roll number $rollno has been removed successfully.";
//     } else {
//         echo "Error: " . $sql . "<br>" .$rollno." does not exist.";
//     }

  
// }
// ?>
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
    <a href="remove.html">Remove Student</a>
    <a href="..\admin\index.php">Back To Admin</a>
</body>
</html> -->

<?php
include('../dbconn.php');
session_start();
$removedStudent = null;

if (isset($_POST["remove"])) {
    // Get the roll number from the form
    $rollno = $_POST["rollno"];
    $result = $mysqli->query("SELECT id, name FROM student WHERE id = '$rollno'");
    // Performing the student removal from the database
    $sql = "DELETE FROM student WHERE id = '$rollno'";
    $removedStudent = $result->fetch_assoc();
    if (mysqli_query($mysqli, $sql)) {
        // Fetch the removed student's ID and name for display
        // $result = $mysqli->query("SELECT id, name FROM student WHERE id = '$rollno'");
        // $removedStudent = $result->fetch_assoc();
    }
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


        .removed-student {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }

        .removed-student h2 {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <!-- <a href="remove.html">Remove Student</a>
    <a href="..\admin\index.php">Back To Admin</a> -->
    <div class="action-links">
        <a href="remove.html">Remove Student</a>
        <a href="..\admin\index.php">Back To Admin</a>
    </div>
    <?php if ($removedStudent) : ?>
        <div class="removed-student">
            <h2>Student Removed Successfully</h2>
            <p>ID: <?php echo $removedStudent['id']; ?></p>
            <p>Name: <?php echo $removedStudent['name']; ?></p>
        </div>
        <?php else: ?>
        <div class="removed-student">
            <h2>Student Not Found</h2>
            <p>The provided student ID <?php echo $rollno ?> was not found in the database.</p>
        </div>
    <?php endif; ?>
</body>
</html>
