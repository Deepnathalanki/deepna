<html><body>
<?php

$conn = mysqli_connect("localhost","root","deepna123","test");
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}


$sno=$_POST['sno'];
$name=$_POST['name'];
$age=$_POST['age'];

mysqli_query($conn,"Insert into student(sno,sname,age) values('$sno','$name','$age')");




?>





<form action="" method="post">
				
					
						<div class="form-group"  id="topic_group">
							<label for="topic">Number:</label>
							<input type="text" required placeholder="Enter Number" name="sno">

						</div>
						
						
						<div class="form-group">
							<label for="title">Name:</label>
							<input type="text" required="" class="form-control" id="title" name="name" placeholder="Enter Notification Title" name="title">
						</div>
						<div>
						<label for="title">Age:</label>
							
							<input type="text" required placeholder="Enter age" name="age">
						</div>
						
						
						
						
	<center><button type="submit" name="submit" class="btn btn-lg btn-success btn-block">Submit</button></center>
					
</form></body>
</html>