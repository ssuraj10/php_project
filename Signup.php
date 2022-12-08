<!doctype html>
<?php session_start(); 
        
 
        if(isset($_POST['Submit'])){
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
				$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
           
                if ($Username  &&  $Password && $Email){

                        $_SESSION['Username']=$Username;
						$_SESSION['Password']=$Password;
						$_SESSION['Email']=$Email;
						
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">


</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
			</div>
			<div class="card-body">
				<form action="" method="post" name="Login_Form">
             
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input autocomplete="off" type="text" name="Username" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input autocomplete="off" type="email" name="Email" class="form-control" placeholder="Enter Your Email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input autocomplete="off" type="password" name="Password" class="form-control" placeholder="password">
					</div>
					
					<div class="form-group">
						<input name="Submit" type="submit" value="Sin up" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Already have an account?<a href="Login.php">Sign In</a>
				</div>
				
			</div>
		</div>
	</div>
</div>

</body>
</html>