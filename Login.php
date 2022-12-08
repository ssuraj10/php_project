<!doctype html>

<?php session_start();      
        if(isset($_POST['Submit'])){
                $Username_local = isset($_SESSION['Username']) ? $_SESSION['Username'] : '';
                $Password_local =isset($_SESSION['Password']) ? $_SESSION['Password'] : '';
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : ''; 
                if ($Username == $Username_local && $Password == $Password_local){
                   
                            $_SESSION['UserData']['Username']=$Password;
                            header("location:index.php");
                            exit;
                        }else{
                            $msg="<span style='color:red'>Invalid Login Details</span>";
                        }
                       
                } 
        
?>
<script>
var Username = localStorage.getItem('Username'), Password = localStorage.getItem('Password');
document.cookie = 'Username' + "=" + Username ;
document.cookie = 'Password' + "=" + Password;
</script>
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
	<div>
		<div>
			<div>
				<h3>Sign In</h3>
			</div>
            <?php if(isset($msg)){?>
            <div class="card-error pl-5">
				<h3><?php echo $msg;?></h3>
			</div>
            <?php } ?>
			<div>
				<form action="" method="post" name="Login_Form">
				<input autocomplete="off" type="text" id="Username"  name="Username" class="form-control" placeholder="username">
				<input autocomplete="off" type="password" name="Password" class="form-control" placeholder="password">
				<input name="Submit" id="Submit" type="submit" value="Login" class="btn float-right login_btn">
				</form>
			</div>
			<div>
				<div>
					Don't have an account?<a href="Signup.php">Sign Up</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>