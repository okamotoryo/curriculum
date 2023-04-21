<?php
if (isset($_POST['numbers'])) {
  $numbers = $_POST['numbers'];
  $result = getFortune($numbers);
  $today = date("Y/m/d H:i:s");
  echo  $today ."の運勢は" ."<br>";
  if (isset($_POST['numbers'])) {
    $numbers = $_POST['numbers'];
    $random_index = rand(0, strlen($numbers) - 1);
    $random_number = substr($numbers, $random_index, 1);
    echo "選ばれた数字は" . $random_number."<br>";
  }
  echo  $result ;
}



function getFortune($numbers) {
  // 入力された数字から1文字抜き出す
  $index = rand(0, strlen($numbers) - 1);
  $fortune = substr($numbers, $index, 1);

  // 結果を判定する
  switch ($fortune) {
    case 0:
      return "凶";
    case 1:
    case 2:
    case 3:
      return "小吉";
    case 4:
    case 5:
    case 6:
      return "中吉";
    case 7:
    case 8:
      return "吉";
    case 9:
      return "大吉";
  }
}
?>