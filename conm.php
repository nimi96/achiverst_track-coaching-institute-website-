<!--<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>

<form method="post" action="conm.php"> 

firstname<input type="text" name="fname"><Br>
lastname<input type="text" name="lname"> <Br>
emmail<input type="text" name="email"><Br>
phone<input type="text" name="phone">	<Br>
<Br>
<input type="submit" name="">

</form>

</body>
</html>

-->


<?php

$user='root';
$pass='happyaf';
$db='testdb';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];


$db=new mysqli('localhost',$user,$pass,$db) or
die("unable to connect");
echo "goodwork";

$sql = "INSERT INTO testt (fname, lname, email,phone)
VALUES ('$fname', '$lname', '$email','$phone')";


if ($db->query($sql) === TRUE) {
    echo "<h1>", "<bR>" ,"you have been registred succesfully" ,"<br>" ,"faith in humanity  restored "  ;

} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>