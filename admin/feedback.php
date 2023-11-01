<?php
include('../dbconn.php');
?>	

<html>
<head>
    <title>Feedback</title>
	<link rel="stylesheet" href="feedback.css">
</head>

<body>
    <div class="login" style="width:600px;">
        <h1 align="center">Teacher Feedbacks</h1>
		<table>
		<tr>
			<th>Name</th>
			<th>Subject</th>
			<th>Feedback</th>
		</tr>
		<?php
		// $result = mysql_query("SELECT * from feedback");
		$result = $mysqli->query("SELECT * FROM feedback");

		// if (!$result) {
		// 	die('Query Error: ' . $mysqli->error);
		// }
		while($row = $result->fetch_array(MYSQLI_ASSOC)) {
		echo '
		<tr>
			<td>'.$row['name'].'</td>
			<td>'.$row['sub'].'</td>
			<td>'.$row['fb'].'/35</td>
		</tr>
		';
		}
		?>
		</table>
		<a href="../index.php" style="display:block;text-align:center;text-decoration:none;">Go To Home</a>
		<a href="../student/add.html" style="display:block;text-align:center;text-decoration:none;">Add Student</a>
		<a href="../student/remove.html" style="display:block;text-align:center;text-decoration:none;">Remove Student</a>
		<a href="../student/list.php" style="display:block;text-align:center;text-decoration:none;">List Students</a>
		
    </div>
</body>

</html>