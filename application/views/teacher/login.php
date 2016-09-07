<!DOCTYPE html>
<html>
<head>
  <title>TEACHER LOGIN</title>
</head>
<body>

<?php
  echo validation_errors();
  echo $this->session->flashdata('alert');
  echo $this->session->flashdata('error');
  echo form_open('/teacher/login/action/');
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
