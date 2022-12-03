<!doctype html>

<?php session_start();      
        if(isset($_POST['Submit'])){
                $Username_local = isset($_SESSION['Username']) ? $_SESSION['Username'] : '';
                $Password_local =isset($_SESSION['Password']) ? $_SESSION['Password'] : '';
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : ''; 
                if ($Username == $Username_local && $Password == $Password_local){
                   
                        // if( $Username  &&  $Password ==  $password ){
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
   	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
			</div>
            <?php if(isset($msg)){?>
            <div class="card-error pl-5">
				<h3><?php echo $msg;?></h3>
			</div>
            <?php } ?>
			<div class="card-body">
				<form action="" method="post" name="Login_Form">
             
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input autocomplete="off" type="text" id="Username"  name="Username" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input autocomplete="off" type="password" name="Password" class="form-control" placeholder="password">
					</div>
					
					<div class="form-group">
						<input name="Submit" id="Submit" type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="Signup.php">Sign Up</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>