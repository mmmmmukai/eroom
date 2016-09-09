<!DOCTYPE html>
<html>
<head>
<title>パスワードを変更する</title>
</head>
<body>
  <h1>CHANGE PASSWORD</h1>
  <?php
    echo validation_errors();
    echo $this->session->flashdata('alert');
    echo $this->session->flashdata('error');
    echo form_open('/user/change_password/action/');
    echo form_label('古いパスワード', 'old_password'); 
    echo form_password('old_password');
    echo "<br>";
    echo form_label('新しいパスワード', 'new_password');
    echo form_password('new_password');
    echo "<br>";
    echo form_label('新しいパスワード確認', 'new_password_confirm');
    echo form_password('new_password_confirm');
    echo "<br>";

    echo "<br>";
    echo form_submit('submit', '変更する');
    echo form_close();
  ?>
</body>
</html>