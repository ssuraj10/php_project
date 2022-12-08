<!doctype html>
<?php session_start();        
 
        if(isset($_POST['Submit'])){
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';		
              if ($Username  &&  $Password ){

                        $_SESSION['Username']=$Username;
						$_SESSION['Password']=$Password;
						
                        header("location:Login.php");
                        exit;
                } else {

                       
                }
        }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assesment</title>
	<link rel="stylesheet" type="text/css" href="styles.css">


</head>
<body>
<div class="container">
<h3>Sign Up</h3>
<form action="" method="post" name="Login_Form">
<input autocomplete="off" type="text" name="Username"  placeholder="username">
<input autocomplete="off" type="password" name="Password" class="form-control" placeholder="password">
<input name="Submit" type="submit" value="Sin up" class="btn float-right login_btn">

Already have an account?<a href="Login.php">Sign In</a>

</form>
</div>

</body>
</html>