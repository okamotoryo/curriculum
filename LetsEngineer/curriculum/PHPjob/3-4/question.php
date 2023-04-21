<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>クイズ</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
    // POST送信で送られてきた名前を受け取って変数を作成
    if(isset($_POST['my_name'])){
      $my_name = $_POST['my_name'];
    }else{
      $my_name = '';
    }

    // ①画像を参考に問題文の選択肢の配列を作成してください。
    $question1 = array('80', '22', '20', '21');
    $question2 = array('PHP', 'Python', 'JAVA', 'HTML');
    $question3 = array('join', 'select', 'insert', 'update');

    // ② ①で作成した、配列から正解の選択肢の変数を作成してください
    $answer1 = $question1[0];
    $answer2 = $question2[3];
    $answer3 = $question3[0];
  ?>
  <p>お疲れ様です<?php echo $my_name ?>さん</p>
  <!--フォームの作成 通信はPOST通信で-->
 
    <h2>①ネットワークのポート番号は何番？</h2>
    <form method="post" action="answer.php">
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($question1 as $value){ ?>
      <input type="radio" name="answer1" value="<?php echo $value; ?>" ><?php echo $value; ?><br>
    <?php } ?>
    </form>
    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <form method="post" action="answer.php">
    <?php foreach($question2 as $value){ ?>
      <input type="radio" name="answer2" value="<?php echo $value; ?>"><?php echo $value; ?><br>
    <?php } ?>
    </form>
    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <form method="post" action="answer.php">
    <?php foreach($question3 as $value){ ?>
      <input type="radio" name="answer3" value="<?php echo $value; ?>"><?php echo $value; ?><br>
    <?php } ?>
    </form>
    <form method="post" action="answer.php">
    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
    <input type="hidden" name="answer1_correct" value="<?php echo $answer1; ?>">
    <input type="hidden" name="answer2_correct" value="<?php echo $answer2; ?>">
    <input type="hidden" name="answer3_correct" value="<?php echo $answer3; ?>">
    <input type="submit" value="回答する">
  </form>
</body>
</html>
