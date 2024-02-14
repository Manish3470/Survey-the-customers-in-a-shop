<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
      $questionfour=$_POST['questionfour'];
      $con=new mysqli('localhost','root','','form');
if($con){
      //echo "Connection successful";
$sql="insert into data(questionfour)values('$questionfour')";
$result=mysqli_query($con,$sql);
if($result){echo  header('location:five.php');;
     
}else{
      die(mysqli_error($con));
}
}
else{
      die(mysqli_error($con));
}
}?>