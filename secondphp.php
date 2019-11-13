<?php
//database conectivity
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "secondsessional";


$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error)
{

die("connection failed".$conn->connect_error);
}
else{
	echo "connection success";
}


if(isset($_POST['register']))
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
	<title></title>
</head>
<body>
<form  action="secondphp.php"  method="POST">
	
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

<button type="submit"  value="Submit" name="register">click me </button>

<br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br>

<input type="text" name="cnic2" placeholder="enter search">






<?php
if(isset($_POST[''])){    
$CNIC=$_POST['cnic2'];	

$s="SELECT id,name,lname FROM practice WHERE cnic ='$CNIC'";
    $q=mysqli_query($conn,$s); 
      while($row=mysqli_fetch_array($q)){ ?>

      <?php echo $row['name'];?>
      <?php echo $row['id'];?>
      <?php echo $row['lname'];?>
      
    <?php }}  ?>




<?php
if(isset($_POST['register'])){    
$CNIC=$_POST['cnic2'];	
// sql to delet a record
$sql = "DELETE FROM practice WHERE id>'14'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;

    }
    }  ?>




  <?php 
  if(isset($_POST[''])){
   $CNIC=$_POST['cnic2'];

   $sql="UPDATE practice 
         SET name='uzzziii'
         WHERE cnic='$CNIC'";
  if($conn->query($sql) ===TRUE)
  {
  	echo "Record updated successfully";
  }
  else{
  	echo " updated  error detected :". $conn->error;
  }
  }
  ?>






</form>




</body>
</html>