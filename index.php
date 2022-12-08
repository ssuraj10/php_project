


<html lang="en">
<?php session_start(); 

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">


</head>
<body>

    <h6 class="text-center p-4">Congratulation! You have logged In. <a href="logout.php">Click here</a> to Logout.</h6>
    <div class="row">
    <div class="col-6 a-box" style="width:10px;" >
    <div class="img-container">
    <div class="img-inner">
      <div class="inner-skew">
        <img src="https://www.shutterstock.com/image-vector/snake-mascot-esport-logo-design-260nw-1670736187.jpg">
      </div>
    </div>
  </div>
  <div class="text-container ">

    <h3>Snake Game</h3>
    <h3>Score:<span id="score_value">0</span></h3>
    <a id="newgame_menu" type="button"  class="btn btn-primary">Play</a>
</div>
</div>
<div class="col-6">
<canvas class="wrap" id="snake" width="320" height="320" tabindex="1"></canvas>
</div>

<div>
</body>
<script src="index.js"></script>
</html>
