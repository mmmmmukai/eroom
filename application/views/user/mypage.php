<!DOCTYPE html>
<html>
<head>
<title>MYPAGE</title>
</head>
<body>
  <p><?php echo $this->session->flashdata('logged_msg')?></p>
  <a href="/user/logout/"><p>ログアウト</p></a>
</body>
</html>
