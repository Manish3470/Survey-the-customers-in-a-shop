<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
      $questionfive=$_POST['questionfive'];
      $con=new mysqli('localhost','root','','form');
if($con){
      //echo "Connection successful";
$sql="insert into data(questionfive)values('$questionfive')";
$result=mysqli_query($con,$sql);
if($result){echo  header('location:six.php');"data inserted successfully";
     
}else{
      die(mysqli_error($con));
}
}
else{
      die(mysqli_error($con));
}
}?>