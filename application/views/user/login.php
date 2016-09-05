<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
</head>
<body>

<?php
  echo $this->session->flashdata('login_error_msg');
  echo form_open('/user/login/action/');
  echo form_label('Email', 'email'); 
  echo form_input('email', set_value('email'));
  echo "<br>";
  echo form_label('Password', 'password');
  echo form_password('password', '');
  echo "<br>";
  echo form_submit('submit', 'LOGIN!');
  echo form_close();
?>

</body>
</html>
