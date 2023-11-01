<?php 
include("dbconn.php");	
// include("index.php");
session_start();	
if(isset($_POST["Submit"])){
$sub=$_POST["sub"];
$value=$_POST["f1"]+$_POST["f2"]+$_POST["f3"]+$_POST["f4"]+$_POST["f5"]+$_POST["f6"]+$_POST["f7"];
// $sql = "UPDATE feedback SET fb = ((fb + ".$value.") / 2) WHERE SUB = '".$sub."'";

// // Prepare the statement
// // $stmt = $mysqli->prepare($sql);
// $stmt = $mysqli->prepare($sql);
// session_start();
// $user_id = $_SESSION['id'];
// echo "User ID: " . $id;

// echo $id;
//
// $temp = "select '$sub' from entry WHERE SUB = '$sub'";
// $result = mysqli_query($mysqli, $temp);
// $row = mysqli_fetch_assoc($result);
// $studentCount = $row['studentCount'];

 
// echo $value;
// echo $studentCount;

$id = $_POST["id"];
echo "Scholar : ".$id."\nsub : ".$sub;
// echo "\n";

// echo "ram ram";

$temp = "select `$sub` from entry where scholar='$id'";
$result = mysqli_query($mysqli, $temp);
// while ($row = mysqli_fetch_row($result)) {
//     printf ("%s \n", $row[0]);
//   }
$row = mysqli_fetch_assoc($result);
$final = $row[$sub];
echo "  ";
if($final==0){
    $sql = "UPDATE feedback SET fb = ((fb*studentCount + $value) / (studentCount+1)) WHERE SUB = '$sub'";
    $sql1 = "UPDATE feedback SET studentCount = (studentCount+1) WHERE SUB = '$sub'";
    // $studentCount = $studentCount +1;

    // Execute the query
    if (mysqli_query($mysqli, $sql)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }

    $sql2 = "UPDATE entry SET `$sub` = 1  WHERE scholar = '$id'";
    mysqli_query($mysqli, $sql1);
    mysqli_query($mysqli, $sql2);
}else{
    echo "You have already filled the form!";
}
// if ($stmt) {
//     // Bind parameters and execute the statement
//     $stmt->bind_param("is", $value, $sub);
//     $stmt->execute();

//     // Close the statement
//     $stmt->close();
// } 
// mysql_query("UPDATE feedback SET fb = ((fb+".$value.")/2) WHERE SUB='".$sub."'");
}
?>

<html>
<head>
    <title>feedback</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login" style="width:360px;">
        <h1 align="center">Thanks For your Feedback</h1>
            <a href="/" style="display: block;text-align:center;text-decoration:none;">Logout</a>
            <a href="changePassword.php" style="display: block;text-align:center;text-decoration:none;">Change Password</a>
    </div>
    <script>
    <?php
    // Check if the "success" query parameter is set to 1
    if (isset($_GET['success']) && $_GET['success'] == 1) {
        echo "alert('Password changed successfully!');";
        echo "window.location.href = 'action.php';";
    }
    ?>
</script>
</body>


</html>