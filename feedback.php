<?php
session_start();
if(isset($_SESSION['id'])){
    $username = $_SESSION['id'];
} else {
    // Handle the case where the username is not set in the session
	echo "id is not present";
}
?>

<html>
<head>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
        function updateTeacherOptions() {
            var subjectSelect = document.getElementById("subject");
            var teacherSelect = document.getElementById("teachername");

            // Get the selected subject
            var selectedSubject = subjectSelect.value;

            // Clear previous teacher options
            teacherSelect.innerHTML = "";

            // Add teachers based on the selected subject
            if (selectedSubject === "Ethical Hacking") {
                teacherSelect.options.add(new Option("Dr. Deepak Singh Tomar", "Dr. Deepak Singh Tomar"));
            } else if (selectedSubject === "DIP") {
                teacherSelect.options.add(new Option("Dr. Jyoti Bharti", "Dr. Jyoti Bharti"));
            }else if (selectedSubject === "Humanity") {
                teacherSelect.options.add(new Option("Dr. Ashish Pradhan", "Dr. Ashish Pradhan"));
            } else if (selectedSubject === "Cryptograpy") {
                teacherSelect.options.add(new Option("Dr. Namita Tiwari", "Dr. Namita Tiwari"));
            } else if (selectedSubject === "Network Security") {
                teacherSelect.options.add(new Option("Dr. Vasudev Dehalwar", "Dr. Vasudev Dehalwar"));
            }
			 // Add more options for other subjects

            // You can add more cases for other subjects and teachers here

            // You can also set the selected teacher based on the subject if needed
            // For example: teacherSelect.value = "Dr. Deepak Singh Tomar";
        }
    </script>
</head>
<body>
<div class="login" style="width:500px;">
	<h1 align="center">Student Feedback</h1> 
	<h5 align="center">Please provide your feedback below:</h5>
<form method="post" action="action.php">


<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">



<p align="center">MANIT CSE semester-7th </p>
<hr><br><br>
<b>Subject</b>
<select name="sub" id = "subject" style="width:200px;" onchange="updateTeacherOptions()">
	<option value="Ethical Hacking" selected="selected">Ethical Hacking</option>
	<option value="DIP">DIP</option>
	<option value="Humanity">Humanity</option>
	<option value="Cryptograpy">Cryptograpy</option>
	<option value="Network Security">Network Security</option>
</select>
<br>
<b>Teacher Name</b>
<select name="teachername" id = "teachername" style="width:200px;">
	<option>Dr. Deepak Singh Tomar</option>
	<option>Dr. Jyoti Bharti</option>
	<option>Dr. Ashish Pradhan</option>
	<option>Dr. Namita Tiwari</option>
	<option>Dr. Vasudev Dehalwar</option>
</select>	
<br><br>

<b>Personality</b>
<br>
	<input type="radio" name="f1" value="1" checked>Bad 
	<input type="radio" name="f1" value="2">Average 
	<input type="radio" name="f1" value="3">Good 
	<input type="radio" name="f1" value="4">Very Good 
	<input type="radio" name="f1" value="5">Excellent 
<br><br>

<b>Subjective Knowledge</b>
<br>
	<input type="radio" name="f2" value="1" checked>Bad 
	<input type="radio" name="f2" value="2">Average 
	<input type="radio" name="f2" value="3">Good 
	<input type="radio" name="f2" value="4">Very Good 
	<input type="radio" name="f2" value="5">Excellent 
<br><br> 

<b>Attitute towards college property</b>
<br>
	<input type="radio" name="f3" value="1" checked>Bad 
	<input type="radio" name="f3" value="2">Average 
	<input type="radio" name="f3" value="3">Good 
	<input type="radio" name="f3" value="4">Very Good 
	<input type="radio" name="f3" value="5">Excellent 
<br><br>

<b>Amount of knowledge you get</b>
<br>
	<input type="radio" name="f4" value="1" checked>Bad 
	<input type="radio" name="f4" value="2">Average 
	<input type="radio" name="f4" value="3">Good 
	<input type="radio" name="f4" value="4">Very Good 
	<input type="radio" name="f4" value="5">Excellent 
<br><br>

<b>Puntuality in coming class</b>
<br>
	<input type="radio" name="f5" value="1" checked>Bad 
	<input type="radio" name="f5" value="2">Average 
	<input type="radio" name="f5" value="3">Good 
	<input type="radio" name="f5" value="4">Very Good 
	<input type="radio" name="f5" value="5">Excellent 
<br><br>

<b>His/Her capability of controlling Mass</b>
<br>
	<input type="radio" name="f6" value="1" checked>Bad 
	<input type="radio" name="f6" value="2">Average 
	<input type="radio" name="f6" value="3">Good 
	<input type="radio" name="f6" value="4">Very Good 
	<input type="radio" name="f6" value="5">Excellent 
<br><br>

<b> Way of Teaching</b>
<br>
	<input type="radio" name="f7" value="1" checked>Bad 
	<input type="radio" name="f7" value="2">Average 
	<input type="radio" name="f7" value="3">Good 
	<input type="radio" name="f7" value="4">Very Good 
	<input type="radio" name="f7" value="5">Excellent 
<br><br><br>
 <input type="submit" name="Submit" value="Submit"/>
 </form>
 </div>