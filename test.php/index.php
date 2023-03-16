<?php
// PHPの研修カリキュラム2-1
?>
<?php
/*
PHPの
研修
カリキュラム
1-1
*/
?>
<?php
// index.php
$message = "Hello World!";
var_dump ($message);
// echo $message;の次の行から続き
$x = 8;
$y = 5.55;
echo `<br>`;
var_dump ($x);

echo '<br>';
var_dump ($y);

echo `<br>`;
$flag = true;
var_dump($flag);

$emp = null;
var_dump($emp);

$en_words = "Hello World";
var_dump($en_words);
echo '<br>';
$ja_words = 'こんにちは';
var_dump($ja_words);

echo '<br>';
$name = '山田';
echo "こんにちは。$name さん";

echo '<br>';
$color = 'bLue';
echo "Sky is ${color}color";

// 変数：データにつけるラベル（変更可能）
// 定数：変更不可
define("ADMIN_EMAIL","y-i-group@gmail.com");
define("LIST_COUNT",15);
echo '<br>';
echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;
echo '<br>';

//連結演算子　文字列
echo "hello"."world";
echo '<br>';

echo 1+1;
echo '<br>';
echo 10/5;
echo '<br>';
echo 5%3;
echo '<br>';
$x=0;
$x +=7;
echo $x;

echo '<br>';
$age=18;

if($age >=20){
    echo "お酒が飲めるぞ！";
 } else{
    echo "お酒は二十歳になってから！";
 }
 
 echo '<br>';
 $is_student = true;
 if($is_student){
    echo 'あなたは学生です。';
 }

 echo '<br>';

 //年齢
 $age= 24;
 //学生かどうか？
 $is_student=true;
 if ($age < 25 &&  $is_student){
   echo '学割パックがもらえるよ';
 }
 elseif ($age <25){
 echo '若者応援割引が使えるよ';
 }

 echo '<br>';
 
 $blood='B';
 switch($blood){
   case'A';
   print'A型です';
   break;
   case'B';
   print'B型です';
   break;
 }

 echo'<br>';
//名前
 $name="taro";
 $pass="pass";
//taroかどうか
$is_name=true;
$is_pass=true;

 if($is_name&$is_pass){
   echo'ログイン成功です';
 }
else{
echo'入力情報が間違っています';
}


    /*
<html>
    <p>I say that <?php echo  "Hello World!!";?></p>
    </html>
    */

  echo'<br>';

  $age=24;
  $is_student=true;

  if($age <25 && $is_student){
    echo'学割パックが使えるよ';
  }
  elseif($age<25){
    echo'若者応援割引が使えるよ';
  }

  echo'<br>';

  // 例として、血液型を診断する条件分岐
$blood = 'B';
if($blood == 'A') {
  echo "A型です";
} elseif($blood == 'B') {
  echo "B型です";
} elseif($blood == 'O') {
  echo "O型です";
} elseif($blood == 'AB') {
  echo "AB型です";
 } else {
  echo "A/B/O/ABから選択してください";
}

echo'<br>';
$blood='A';
switch($blood){
  case'A':
  print'A型です';
  break;
}

echo'<br>';
$name = "";

echo($name != "") ? '名前を受け付けました' : '名前を入力してください';

echo'<br>';

$string = '1';
$int = 1;

if (1 === $string) {
  echo '変数stringはint型です。';
} else {
  echo '変数stringはstring型です。';
}
// 「変数stringはstring型です」が出力される

if (1 === $int) {
  echo '変数stringはint型です。';
} else {
  echo '変数stringはstring型です。';
}
// 「変数stringはint型です。」が出力される


echo'<br>';

$username = "taro";
$password = "pass";
$input_username = "taro";
$input_password = "pass";

if ($input_username === $username && $input_password === $password) {
    echo "ログイン成功です";
} else if ($input_username === $username) {
    echo "パスワードが間違っています。";
} else if ($input_password === $password) {
    echo "名前が間違っています。";
} else {
    echo "入力情報が間違っています";
}

echo'<br>';

$num=0;
while($num<10){
  echo $num;
  $num++;
}

echo'<br>';

$num=0;
do{
  echo $num;
  $num++;
}while($num<10);

echo'<br>';

for($i=0;$i<10;$i++){
  echo $num;
}

echo'<br>';

$num=0;
while($num<10){
  echo $num;
  $num++;
  if($num==5){
    break;
  }
}

echo'<br>';

$i=0;
while($i<=100){
  echo $i . "\n";
  $i++;
}

echo'<br>';

$counteise=["America","Japan","China","Korea"];

echo $counteise[0];
echo $counteise[1];
echo $counteise[2];
echo $counteise[3];



echo'<br>';

$fruits = ["りんご", "みかん", "ぶどう"];

// 0番目のりんごを出力
echo $fruits[0];
echo `<br />`;
// 1番目のみかんを出力
echo $fruits[1];
echo `<br />`;
// 2番目のぶどうを出力
echo $fruits[2];
echo `<br />`;
// 配列全体を出力
var_dump($fruits);

echo'<br>';

$fruits=["apple"=>"りんご","orange"=>"みかん","grape"=>"ぶどう"];
// りんごを出力
echo $fruits["apple"];
// みかんを出力
echo $fruits["orange"];
// ぶどうを出力
echo $fruits["grape"];

echo'<br>';

$array = array(
  "apple" => "りんご",
  "orange" => "みかん",
  "grape" => "ぶどう"
);

$value = $array["apple"]; // "りんご"


echo'<br>';

$countries = ["America", "Japan", "China", "Korea"];
var_dump($countries);

array(4) {
  [0]=> string(7) "America"
  [1]=> string(5) "Japan"
  [2]=> string(5) "China"
  [3]=> string(5) "Korea"
}

?>
