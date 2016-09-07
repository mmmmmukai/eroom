<!DOCTYPE html>
<html>
<head>
  <title>USER SIGNUP</title>
</head>
<body>
  <h1>USER SIGNUP</h1>
  <?php
    echo validation_errors();
    echo $this->session->flashdata('alert');
    echo $this->session->flashdata('error');
    echo form_open('/user/signup/confirm/');
    echo form_label('Email', 'email'); 
    echo form_input('email', set_value('email'));
    echo "<br>";
    echo form_label('Password', 'password');
    echo form_password('password', '');
    echo "<br>";
    echo form_submit('submit', 'SIGNUP!');
    echo form_close();
  ?>

</body>
</html>
