<!DOCTYPE html>
<html>
<head>
  <title><?php echo $info['name']?>のマイページ</title>
</head>
<body>
  <?php echo $this->session->flashdata('logged_msg');?>
  <h1>講師<?php echo $info['name']?>のプロフィール</h1>
  <p>Email: <?php echo $info['email']?></p>
  <p>担当言語: <?php echo $info['language']?></p>

  <h2>講師の予定</h2>
  <a href=""><p>予定追加</p></a>
  <a href="/teacher/logout/"><p>ログアウト</p></a>
</body>
</html>
