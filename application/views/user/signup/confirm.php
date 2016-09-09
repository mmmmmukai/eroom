<!DOCTYPE html>
<html>
<head>
<title>USER SIGNUP</title>
</head>
<body>

  <h1>USER SIGNUP</h1>
  <p>email:<?php echo $_SESSION['register']['email']?></p>
  <p>password:********</p>
  <?php
    echo form_open('/user/signup/complete/');
    echo form_submit('submit', 'CONFIRM');
    echo form_close();
  ?>
</body>
</html>
