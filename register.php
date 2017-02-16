<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="resources/customize.css">
<style> 
div.abc{
    background-color: black;
    color: white;
    margin: 20px 0 20px 0;
    padding: 80px;
} 

</style>

</head>
<body>

<div class="abc" >

<nav class="navbar navbar-inverse">
  <div class="container-fluid"  >
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
<Br>
<div>
 <form   method="post" action="conm.php">   
<h1> enter you details. </h1>

 <div class="form-group col">
  <label for="example-text-input" class="col-2 col-form-label" value="enter you firt name"  >First name</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="fname" >
  </div>
<Br>
   <div class="form-group col">
  <label for="example-text-input" class="col-2 col-form-label" value="enter you last name" >Last name</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="lname">
  </div>

  <div class="form-group col-12">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email" value="enter your email"  name="email">
  </div>
<BR>

<div class="form-group row">
  <label for="example-tel-input" class="col-4 col-form-label"  >Telephone</label>
  <div class="col-10">
    <input class="form-control" type="tel"  id="example-tel-input" name="phone">
  </div>
<br>

   <button type="submit" class="btn btn-danger btn-block" align="center">submit</button>
  </form>
</div>

</body>
</html>