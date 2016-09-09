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
    // echo form_label('先生を選んでください');
    // echo "<br>";
    // foreach($teacher_datas as $teacher_data)
    // {
    //   $pic_id = sprintf('%03d', $teacher_data['id']);
    //   $img_url = "/static/images/teacher/profile_pic_{$pic_id}.jpg";
    //   echo form_radio('choice_teacher', $teacher_data['id']);
    //   echo '<img src="' . $img_url . '">';
    //   echo $teacher_data['name'].'('.$teacher_data['language'].')';
    // }
    // echo "<br>";
    echo form_label('Email', 'email'); 
    echo form_input('email', set_value('email'));
    echo "<br>";
    echo form_label('パスワード', 'password');
    echo form_password('password', '');
    echo "<br>";
    echo form_label('パスワード確認', 'password_confirm');
    echo form_password('password_confirm', '');
    echo "<br>";
    // echo form_label('もっとも興味のある言語', 'interested_language');
    // $option = array(
    //   '' => '選択してください',
    //   'English' => 'English 英語',
    //   'Chinese' => 'Chinese 中国語'
    //   );
    // echo form_dropdown('interested_language', $option, set_value('interested_language'));
    echo "<br>";
    echo form_submit('submit', 'SIGNUP!');
    echo form_close();
  ?>

</body>
</html>
