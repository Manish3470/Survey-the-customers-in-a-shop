
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Four Question</title>
      <style>
            body{
            text-align: center;
      
           }
           
            h2{text-decoration: underline;}
            .input{transform: scale(1.5);
            }
           .button{margin: 10%;
    }
           p{text-align: right;
      margin-right: 25%;}
      .container{background-color: rgb(107, 107, 251);
            border: 1px solid black;
      border-radius: 50px;margin-left: 15%;margin-right: 15%;}
      input[type="submit" ],input[type="button" ]{
      background-color: rgb(255, 41, 212);
      color: white;
      padding: 10px 15px;
      border: none;margin-left: 130px;margin-right: 90px;
      border-radius: 4px;
      cursor: pointer;}
      input[type="button" ]{background-color: blue;}
     .first{font-size: 13px;}
      </style>
</head>
<body><div class="container">
<form action="connectthree.php" method="post">
      <h2>Customer Survey</h2>
      <p>4/5</p>
    
    <div class="input">
    <label>4. On a scale of 1-10 how would you recommend us to your friends and family? </label><br>
    <input type="radio" name="questionfour" value="1">1
    <input type="radio" name="questionfour" value="2">2
    <input type="radio" name="questionfour" value="3">3
    <input type="radio" name="questionfour" value="4">4
    <input type="radio" name="questionfour" value="5">5
    <input type="radio" name="questionfour" value="6">6
    <input type="radio" name="questionfour" value="7">7
    <input type="radio" name="questionfour" value="8">8
    <input type="radio" name="questionfour" value="9">9
    <input type="radio" name="questionfour" value="10">10
   </div>
   
  <div class="button"> <a href="three.php" ><input type="button" value="Prev"></a>
   <a  href="sde2.html"> <input type="submit" value="Next"></a>
   </form></div></div>
      
      
</body>
</html>