<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
      $questionthree=$_POST['questionthree'];
      $con=new mysqli('localhost','root','','form');
if($con){
      //echo "Connection successful";
$sql="insert into data(questionthree)values('$questionthree')";
$result=mysqli_query($con,$sql);
if($result){
      header('location:four.php');
}else{
      die(mysqli_error($con));
}
}
else{
      die(mysqli_error($con));
}
}?>