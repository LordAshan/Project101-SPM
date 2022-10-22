<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>

body  {
  background-image: url("https://cdn.mos.cms.futurecdn.net/9Z2PRLPXJ3u6JuuHybp5uL-1200-80.jpg");
  font-family: Arial, Helvetica, sans-serif;
}
 
form {
        border: 3px solid #f1f1f1;
        width: 25%;
        height: 80px;
    
    }

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.loginbtn {
  width: auto;
  padding: 10px 18px;
  background-color: ##33B887;
}

.container {
  padding: 16px;
}

span.psw {
  float: left;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: left;
  }
  .loginbtn {
     width: 20%;
     display: block;
     float: right;
  }
}

h1{
    float:center;
}
</style>
</head>
<body>

<br><br><br><br><br><br>
<div>
<h1>PUZZLE</h1>


<form action="/action_page.php" method="post">


  <div  style="background-color:#f1f1f1" class="container">

    <h6>please login to continue</h6>

    <input type="text" placeholder="Enter Username" name="uname" required>

    <input type="password" placeholder="Enter Password" name="psw" required>
    
  </div>

  <div class="container"  style="background-color:#f1f1f1">
    
    <span class="psw"><a href="#">Forgot password?</a></span>
    <button type="submit" class="loginbtn">Login</button>
    
  
  </div>

</div>
</form>

    
</body>
</html>