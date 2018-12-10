<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Prayer Request</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="usernamee" value="<?php echo $_SESSION['username']; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Prayer</label>
  	  <input type="text" name="prayer" value="<?php echo $prayer; ?>">
  	</div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="save_prayer">Submit Prayer</button>
  	</div>
  </form>
</body>
</html>