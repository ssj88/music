<?php 
include("header.php");
?> 
<button class="submitform"><a href="dashboard.php">home</a> </button>

<div class="row contact-form">

   		 <div class="col-twelve" >

	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">
        <img src="logo1.png" alt="Logo" style="width:150px;height:120px;">
   			<h1>EMUSIFY</h1>
   			<h5>SONG LIST</h5>
		 <div class="row contact-form"> 
   		<div class="col-twelve"> 
      			<fieldset>				

  <?php
  include('connection.php');
  $lang=$_GET['lang'];
  $emotion=$_GET['emotion'];
  //echo $lang;
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
  $result = mysqli_query($con,$sel) or die(mysql_error());
	 ?>
	<table>
  <tr>
    <th>Title</th>
    <th>Album/Movie</th>
    <th>Music</th>
  </tr>
  <?php
while($row=mysqli_fetch_array($result))
{?>
  <tr>
    <td><?php echo $row['title'];?></td>
    <td><?php echo $row['album'];?></td>
    <td><?php echo "<audio controls>
  <source src=$row[music] type='audio/ogg'>
  </audio>"?></td>
  </tr>
<?php  
}
?>  
</table>

<?php
include("footer.php");
?>
