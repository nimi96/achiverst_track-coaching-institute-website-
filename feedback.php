<!DOCTYPE html>
<html>
<head>
	<title>feedback</title>
<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
<style> 
div.xyz{
    background-color: black;
    color: white;
    margin: 20px 0 20px 0;
    padding: 80px;
} 

</style>
</head>
<body>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Achievers Track</a>
    </div>
    <ul class="nav navbar-nav">
      
      <li><a href="courses.php">courses </a></li>
      <li><a href="feedback.php">feedback</a></li>
      <li><a href="register.php">register</a></li>
    </ul>
  </div>
</nav>
<br> 
<br>
<form   action="" method="post"   >   


<div class="xyz"> 
<div class="form-group col">
  <label for="example-text-input" class="col-2 col-form-label" value="enter you firt name">First name</label>
  <div class="col-10">
    <input class="form-control" type="text" name="fname" >
  </div>
<Br>
   <div class="form-group col">
  <label for="example-text-input" class="col-2 col-form-label" value="enter you last name">Last name</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="lname" >
  </div>
<br>
 <div class="form-group col-12">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email" value="enter your email"  name="email" >
  </div>
  <br> <br>
  <div class="form-group">
    <label for="exampleTextarea" align="center">comment::</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"  name="comment"></textarea>
  </div>

<button type="submit" class="btn btn-success  btn-block">Submit</button>


</div>


 </form>

 
</body>
</html>



<?php  


$user='root';
$pass='happyaf';
$db='testdb';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$comment=$_POST['comment'];



$db=new mysqli('localhost',$user,$pass,$db) or
die("unable to connect");
echo "goodwork";

$sql = "INSERT INTO feedback(fname, lname, email,comment)
VALUES ('$fname', '$lname', '$email','$comment')";



if ($db->query($sql) === TRUE) {
    echo "<h1>", "<bR>" ,"your feedback  has been posted " ,"<br>" ,"faith in humanity  restored "  ;

} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();






?>