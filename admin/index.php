<?php
include('../dbconn.php');
if(isset($_POST["Login"])){
	$id = 'admin';
	$pass = 'admin';	
	if($id==$_POST["id"]&&$pass==$_POST["pass"]) {
		header("Location: feedback.php");
		}
	else{
		echo "<script>alert('Password does not Match !!!');</script>";
		}
}

?>	

<html>
<head>
    <title>Login</title>
	<link rel="stylesheet" href="/style.css">
    <!-- <style>
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

        .container {
            max-width: 360px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid black;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        .login-form {
            text-align: center;
            border: black 2px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        a.student-login {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 3px;
        }
    </style> -->
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

        .container {
            max-width: 360px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid black;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a box shadow for a nice effect */
        }

        h1 {
            text-align: center;
        }

        .login-form {
            text-align: center;
            border: black 2px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        a.student-login {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 3px;
        }
    </style>
</head>

<body>
	<a href="../index.php" style="float:right;display:block;text-align:center;text-decoration:none;width:200px" class="student-login">Student login</a>

    <div class="login" style="width:360px;">
        <h1 align="center">Admin Login</h1>
        <form method="post" style="text-align:center;">
            <input placeholder="Username" type="text" name="id">
            <br>
            <br>
            <input placeholder="Password" type="password" name="pass">
            <br>
            <br>
            <input type="submit" value="Login" name="Login"><span></span></form>
    </div>
</body>

</html>