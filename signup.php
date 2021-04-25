
<?php
	 session_start();
	 require_once("header.php");
	 require_once("function.php");
   	 $db=dbcon();
   	 $error=[];
  	 if (isset($_POST["submit"])){
	 register($_POST);
	 header("Location:signupsuceed.php");
   }

   if(isset($_SESSION['student'])) {

}
?>
	 
			<body style="text-align:center;">
						<form class="" method="post" action="">
							
							<div>
								<label >Your Name</label>
								<input type="text"  name="name"  placeholder="Enter your Name"/>
							</div>	</br>
							<div>
								<label >Select Course</label>
										<select name="course">
											
											<option>--Select Course--</option>
											<option>PHP</option>
											<option>JAVA</option>
											<option>JAVA SCRIPT</option>
											<option>PYTHON</option>
										</select>
								</div></br>
							<div>
								<label>Username</label>
								<input type="text"  name="username"   placeholder="Enter your Username"/>
							</div></br>
								

							<div>
								<label>Password</label>
								<input type="password" name="password"  placeholder="Enter your Password"/>
							</div></br>

							<div>
								<label >Confirm Password</label>
								<input type="password" name="confirm" placeholder="Confirm your Password"/>
							</div></br>

							<div ">
								<button name="submit" type="submit">Signup</button>
							</div></br>
							<div>
								<p>Already have an account! <a href="signin.php">Sign In Here</a> </p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
