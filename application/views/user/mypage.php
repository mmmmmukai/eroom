<!DOCTYPE html>
<html>
<head>
<title>MYPAGE</title>
</head>
<body>
  <p><?php echo $this->session->flashdata('alert')?></p>
  <a href="/user/change_password/"><p>パスワードを変更する</p></a>
  <a href="/user/logout/"><p>ログアウト</p></a>
</body>
</html>
