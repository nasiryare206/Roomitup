<h1>Thank you for completing the survey</h1>

<h2>Your responses are: </h2>

<?php
     	
	
	
	$firstname = $_POST['first'];
	$lastname = $_POST['last']
	$age  = $_POST['age'];
	$gender  = $_POST['gender'];
	$grade  = $_POST['grade'];
	$sports = $_POST['sports'];
	
	
    echo "<h4> Your full name is $firstname $lastname</h4>";
	echo "<h4>Your age is $age </h4>";
	echo "<h4> You are a $gender</h4>";
	echo "<h4> Your grade in this class is $grade</h4>";
	echo "<h4> Your favorite sport is $sports</h4>";
	
     
?>
