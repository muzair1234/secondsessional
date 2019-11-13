<?php

$servername="localhost";
$username="root";
$password="";
$dbname="secondsessional";


$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection failed:::".$conn->connect_error);
}
else{
	echo "Connect succefully";
}

if(isset($_POST['addd']))
{


$id=$_POST['id'];
$name=$_POST['name'];

$Lname=$_POST['lname'];
$CNIC=$_POST['cnic'];
	
$query ="INSERT INTO practice (id,name,lname,cnic) VALUES ('$id','$name','$Lname','$CNIC')";


if($conn->query($query) == TRUE)
{
  echo "new record added";
}
else{
	echo "error ". $query ."<br>".$conn->error;
}


}
?>






<!DOCTYPE html>
<html>
<head>
	<title>Boostrapp</title>

<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</head>
<body>

<form  method="POST">
	
<input type="text" name="id">
<br>
<br>
<br>
<input type="text" name="name">
<br>
<br>
<br>
<input type="text" name="lname">
<br>
<br>
<br>
<br>
<input type="text" name="cnic">
<br>
<br>

<button type="submit"  value="Submit" name="addd">click me </button>


</form>


</body>
</html>