


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
    <title>Snake Game</title>
</head>
<body>

    <h1>Congratulation! You have logged In. <a href="logout.php">Click here</a> to Logout.</h1>
    <h3>Snake Game</h3>
    <h3>Score:<span id="scoreNumber">0</span></h3>
    <button id="newgame_menu" type="button"  class="btn btn-primary">Play</button>
</body>
<canvas class="wrap" id="snake" width="320" height="320" tabindex="1"></canvas>
<script src="index.js"></script>
</html>
