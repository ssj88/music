<title>Playlist</title>


<div class="table-box">

   		 <div class="col-twelve" >


	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">
         
<link rel="stylesheet" href="styleplay.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<h5><center>SONG LIST</center></h5> 
		 <div class="row contact-form"> 
   		<div class="col-twelve"> 

<?php

$con = mysqli_connect('localhost','root','','music');

mysqli_select_db($con, 'music');

  $lang=$_REQUEST['lang'];
  $emotion=$_GET['emotion'];

  if ($lang=='1')
  {
	  $sel ="SELECT * FROM `musictable` WHERE `language`='english' and `emotion`='$emotion'";
	  
  }
  elseif($lang=='2')
  {
	 $sel ="SELECT * FROM `musictable` WHERE `language`='malayalam' and `emotion`='$emotion'"; 
  }
  elseif($lang=='3')
  {
	 $sel ="SELECT * FROM `musictable` WHERE `language`='hindi' and `emotion`='$emotion'"; 
  }
  $result = mysqli_query($con,$sel) or die(mysqli_error());
	 ?>



   <div class="filter">

        
                
                <a href="list.php?emotion=<?php echo $emotion; ?>" class="btn btn-danger" role="button">Back</a>
                <a href="logout.php" class="btn btn-success" role="button" style="float:right">Logout</a>

        
   </div>
	<table>
  <tr>
    <th>Title</th>
    <th>Artist Name</th>
    <th>Music</th>
  </tr>

<?php
  $con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'music');
while($row=mysqli_fetch_array($result))
{?>


  <tr>
    <td><?php echo $row['title'];?></td>

    <td><?php echo $row['artist'];?></td>
    
    <td><audio controls>
  <source src="<?php echo $row['location']; ?>" type="audio/mp3">
  </audio controls>


  </td>
  </tr>

<?php  
}
?>  
</table>
</center></h5>
</fieldset>

</div></div></div></div>
</section>
</div></div>
