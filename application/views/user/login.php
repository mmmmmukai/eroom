<!DOCTYPE html>
<html>
<head>
  <title>USER LOGIN</title>
</head>
<body>
  <h1>USER LOGIN</h1>
  <?php
    echo validation_errors();
    echo $this->session->flashdata('alert');
    echo $this->session->flashdata('error');
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
