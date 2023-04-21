<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>結果</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
// [question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
// POST送信で送られてきた名前を受け取って変数を作成
if(isset($_POST['my_name'])){
  $my_name = $_POST['my_name'];
} else {
  $my_name = '';
}

// 問題と正解の配列を定義
$question1 = 'ネットワークのポート番号は何番？';
$choices1 = array('80', '22', '20', '21');
$answer1 = '80';

$question2 = 'Webページを作成するための言語は？';
$choices2 = array('PHP', 'Python', 'JAVA', 'HTML');
$answer2 = 'PHP';

$question3 = '私の名前は？';
$choices3 = array('joshin', 'josin', 'josin', 'jocin');
$answer3 = 'joshin';

// 選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
$answer1_correct = $_POST['answer1_correct'];
if($answer1 === $answer1_correct){
  $result1 = "正解！";
}else{
  $result1 = "残念･･･";
}

$answer2_correct = $_POST['answer2_correct'];
if($answer2 === $answer2_correct){
  $result2 = "正解！";
}else{
  $result2 = "残念･･･";
}

$answer3_correct = $_POST['answer3_correct'];
if($answer3 === $answer3_correct){
  $result3 = "正解！";
}else{
  $result3 = "残念･･･";
}
?>

  <p><?php echo $my_name ?>さんの結果は・・・？</p>
  <p>①の答え</p>
  <form><?php echo $result1; ?></form>
  <p>②の答え</p>
  <form><?php echo $result2; ?></form>
  <p>③の答え<p>
  <form><?php echo $result3; ?></form>
</body>
</html>