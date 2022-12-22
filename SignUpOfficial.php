<!DOCTYPE html>
<html>
<head>
  <title>Register form</title>
  <link rel="stylesheet" href="SignUpCSS.css">
</head>
<body bgcolor = "#e3dac9">
  <div class= "blue">
    <h1>Create Your Account</h1>
	<h3>Welcome to our - favourite coffee</h3>
  </div>
<form action="registeredpage.php" target="_blank" autocomplete="on">
  <div class= "adjust1">
    <div>
      <label for="name">Full Name:</label><br>
      <input type="text" id="name" name="name" required><br><br>
    </div>
    <div>
	  <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br><br>
    </div>
    <div>
	  <label for="password">Password:</label><br>
      <input type="password" id="password" name="password" min="6" max="15" required><br><br>
    </div>	
    <div>
      <label for="bdaymonth">Birthday:</label><br>
      <input type="month" id="bdaymonth" name="bdaymonth" required><br>
    </div>
    <div >
	  <p style="padding: 10px; border: 2px #e3dac9;">PLEASE CHOOSE YOUR GENDER</p>
      <select name="gender" id="gender" required>
      <option value="">-Select Gender-</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="rathernotsay">Rather not say</option>
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
      <a href="https://www.termsfeed.com/live/5bc220f2-f518-4aa1-985e-e17cfea1854a">Terms and Condition</a> and <a href="https://www.termsfeed.com/live/ee904d8d-179e-4774-851e-aa44107edf53">Policy Privacy</a>
    </p>
    <p>
      Already have an account? <a href="login.html">Login here</a>
    </p>
	
    <a href = "file:///C:/xampp/htdocs/signup/registeredpage.php" >
    <input type="submit" value="Sign Up" name = " "/>
	</a>
    <input type="Reset" value="Reset" />
  </div>

</form>

</body>
</html>