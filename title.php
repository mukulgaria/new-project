<?php include(database.php)?>
<html>
<head><title>Registration Page</title>
</head>
<body>
<div class="header">
  <h2>Register Here</h2>
</div>
<form method="post" action="title.php">
<?php include(error.php)?>
<div class="input-group">
  <label>Username</label
    <input type="text" name="username" value="<?php echo $username;?>">
  </div>
  <div class="input-group">
    <label>phone_number</label>
    <input type="text" name="phone" value="<?php echo $phone;?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="text" name="email" value="<?php echo $email;?>">
    </div>
    <div class="input-group">
      <label>password</label>
      <input type="text" name="password" />
    </div>
  <div class="input-group">
    <button type="submit" class="btn" name="reg_user">Register</button>
  </div>
  <p>Aready a register?<a href="login1.php">Sign In</p>
</body>
</html>
