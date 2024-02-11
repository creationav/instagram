<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="login_form_container">
	<div class="login_form">

  	<h2>Register</h2>
  
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input_group">
	  <i class="fa fa-user"></i>
  	  
  	  <input type="text" name="username" placeholder="Username"
            class="input_text"
            autocomplete="off"  value="<?php echo $username; ?>">
  	</div>

  	<div class="input_group">
  	  
  	  <input type="email" name="email" placeholder="email"
            class="input_text"
            autocomplete="off" value="<?php echo $email; ?>">
  	</div>
  	<div class="input_group">
  	  
  	  <input type="password" name="password_1" placeholder="Confirm  Password"
            class="input_text"
            autocomplete="off" >
  	</div>
  	<div class="input_group">
  	
  	  <input type="password" name="password_2" placeholder="Confirm Password"
            class="input_text"
            autocomplete="off">
  	</div>
  	<div class="button_group" id="login_button">
  	  <button type="submit" class="btn" name="reg_user"><a>Register</a> </button>
</div>
       <div class="fotter">
		<a>
  		Already a member? <a href="login.php" class="text-white" >Sign in</a>
</a>
	  
  	</div>
</div>
	
  	
  </form>
</body>
</html>