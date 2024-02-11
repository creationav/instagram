<?php include('server.php') ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="login_form_container">
    <div class="login_form">
      <h2>Login</h2>
      <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input_group">
          <i class="fa fa-user"></i>
          <input name="username" type="text" placeholder="Username" class="input_text" autocomplete="off" />
        </div>
        <div class="input_group">
          <i class="fa fa-unlock-alt"></i>
          <input name="password" type="password" placeholder="Password" class="input_text" autocomplete="off" />
        </div>


        <div class="button_group" id="login_button">
          <button type="submit" class="btn" name="login_user"><a>Login</a></button>

        </div>
        <br>
        <br>
        <div class="fotter">
          <a>
            Not yet a member? <a href="register.php" class="text-white">Sign up</a>
          </a>

        </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="login.js"></script>
</body>

</html>