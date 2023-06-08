<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add song</title>
<link rel="stylesheet" href="style3.css" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<nav>
		
			
<a href="home.php" class="btn btn-danger" role="button">Back</a>
			
<a href="logout.php" class="btn btn-success" role="button" style="float:right">Logout</a>

	</nav>
	

<form action="" method='POST' enctype="multipart/form-data">
<div class="main">
	<h2>UPLOAD A SONG</h2>
	<div class="gosha">
	<center>		
	

		<label>Title of the song</label>
		<br>
		<input type="text" name="title"
		id="title" placeholder="enter your title name">

		<br><br>
		
				<label>Artist of the song</label>
		<br>

		<input type="text" name="artist" id="artist"
		placeholder="enter your artist name">
		<br><br>


		<label for="language" >Choose music Lanugage:</label>
		<select name="language" id="lang">
			<option value="english">English</option>
			<option value="malayalam">Malayalam</option>
			<option value="hindi">Hindi</option>
		</select>
		
		<br><br>

	    <label for="emotion">Choose music Emotion:</label>
	    <select name="emotion" id="lang">
			  <option value="happy">Happy</option>
			  <option value="sad">Sad</option>
			  <option value="neutral">Neutral</option>
		</select>

		<br><br>

	    <input type="file" style="text-align: center;" name="uploadedfile"  required id="uploadedfile" class='form-control'>
	    <br><br>
        
        <button type="submit" id="submit" class="btn btn-primary" name="submit" value="submit">submit</button>
        <br><br>
        </center>

</div>
</div>
</form>
</body>
</html>

<?php

	if(isset($_POST['submit']))
		 {
			 $con = mysqli_connect('localhost','root','');
			 mysqli_select_db($con, 'music');
			 $title=$_POST['title'];
			 $artist=$_POST['artist'];
			 $lang=$_POST['language'];
			 $emotion=$_POST['emotion'];
			$target_path = "data/".$title.".mp3";
			$ins="INSERT INTO `musictable`(`title`, `artist`, `emotion`,`language`,`location`) VALUES ('$title','$artist','$emotion','$lang','$target_path')";
			mysqli_query($con,$ins);
echo "<script>alert('song added successfully');</script>";

			if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
			
			echo "upload success";
			  
			} else{
				echo "There was an error uploading the file, please try again!";
			}

		 }
?>