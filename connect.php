<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
      $questionone=$_POST['questionone'];
      $con=new mysqli('localhost','root','','form');
if($con){
      //echo "Connection successful";
$sql="insert into data(questionone)values('$questionone')";
$result=mysqli_query($con,$sql);
if($result){
      header('location:two.php');
}else{
      die(mysqli_error($con));
}
}
else{
      die(mysqli_error($con));
}
}?>