<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">	
  <link rel="stylesheet" type="text/css" href="style1.css">
  <title>Register form</title>
</head>
<body>
	<div class="container">
		<form method="post" action="testSign.php">
		<?php include('errors.php'); ?>
            <p class="login-text" style="font-size: 2rem; font-weight: 800;" >Create Account</p>
			<div class= "blue">
	          <p>Welcome to our - favourite coffee</p><br>
            </div>
			<div class="input-group">
              <label for="name">Full Name:</label><br>
              <input type="text" id="fullname" name="fullname" value = "<?php echo $username; ?>" required>			
			</div>
			<div class="input-group">
		      <label for="email">Email:</label><br>
              <input type="email" id="email" name="email" value = "<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
			  <label for="password">Password:</label><br>
              <input type="password" id="password" name="password" min="6" max="15" required>
            </div>
			<div class="input-group">
			    <label for="password">Confirm Password:</label><br>
				<input type="password" placeholder="Confirm Password" name="cpassword" required>
			</div>
            <div class="input-group">
			  <label for="bdaymonth">Birthday:</label><br>
              <input type="month" id="birthday" name="birthday" required>
			</div>
			<div class="input-group">
			  <p style="padding: 10px; border: 2px #e3dac9;">PLEASE CHOOSE YOUR GENDER</p>
              <select name="gender" id="gender" required>
              <option value="">-Select Gender-</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              </select>
			</div>
			<div>
	          <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 20px"> Remember Me
              </label>
	        </div>
	        <p style="color: red;">Notes: Do fill every form section</p>
			<p>
              By clicking the Sign Up button,you agree to our <br />
              <a href="https://www.termsfeed.com/live/5bc220f2-f518-4aa1-985e-e17cfea1854a">Terms and Condition</a> 
			  and <a href="https://www.termsfeed.com/live/ee904d8d-179e-4774-851e-aa44107edf53">Policy Privacy</a><br>
            </p>
			<p class="login-register-text">Have an account? <a href="Login.html">Login Here</a>.</p>
			<div class="input-group">
				<button name="submit" class="btn" name="reg_user">Register</button>
			</div>
		</form>
	</div>
</body>
</html>