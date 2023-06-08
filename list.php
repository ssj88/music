<?php

$con = mysqli_connect('localhost','root','','music');

mysqli_select_db($con, 'music');

    $emotion=$_REQUEST["emotion"];
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Emotion</title>
    <link rel="stylesheet" type="text/css" href="list.css">
</head>

<form action="validation.php" method="post">
    <form action="test.php"
method="post" enctype="multipart/form-data">
<body>
    <div class="jak">

    <a href="home.php" class="btn btn-danger" role="button">Back</a>
        <a href="logout.php" class="btn btn-success" role="button" style="float:right">Logout</a>

</div>
<div class="content">

<h1>EMOTION DETECTED</h1>

<?php 
    echo "<h1>".$emotion."</h1>";
?>

<div class="nav">
    <ul>
        <li><a  href="play.php?lang=2&emotion=<?php echo $emotion;?>">Malayalam</a></li>
        <li><a href="play.php?lang=1&emotion=<?php echo $emotion;?>">English</a></li>
        <li><a  href="play.php?lang=3&emotion=<?php echo $emotion;?>">Hindi</a></li>
    </ul>



</div>
</div>
</body>
</html>