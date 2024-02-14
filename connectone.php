<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
      $questiontwo=$_POST['questiontwo'];
      $con=new mysqli('localhost','root','','form');
if($con){
      //echo "Connection successful";
$sql="insert into data(questiontwo)values('$questiontwo')";
$result=mysqli_query($con,$sql);
if($result){ header('location:three.php');
      
}else{
      die(mysqli_error($con));
}
}
else{
      die(mysqli_error($con));
}
}?>