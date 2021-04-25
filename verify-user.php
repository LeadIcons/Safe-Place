<?php 

   session_start();
   require_once("header.php");
   require_once("function.php");
   $db=dbcon();
   $error=[];

   if (isset($_POST["submit"])){
	   verifyuser($_POST);
   }

?>
	        <body style="text-align:center;>
					<div class="main-login">
						<?php if(!empty($error["credentials"])): ?>
						<div class="alert">
							<?php echo $error["credentials"]; ?>
						</div>
						<?php endif; ?>
						<form class="" method="post" action="#">

							<div>
								<label>Enter Username</label>
							<input type="text"  name="username"  placeholder="Enter username"/>		
							</div>

							<div>
								<button name="submit" type="submit" >Login</button>
							</div>	
								<p>Dont have an account! <a href="signup.php">Sign Up Here</a> </p>
							</div>
						</form>
					</div>
		
				
		
		
	