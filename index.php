<?php
// 開始タグ
echo 'こんにちは<br>こんばんは';//echo=テキスト出力,<br>=改行
?><br>
<!-- 終了タグ -->

<?php echo 80+20?><br>

<?php echo '合計金額は'.(100+30).'円です．'?><br>
<!-- 文字列と数字は文字列演算子(.)を使用する -->
<!-- 計算は() -->

<?php $var = '100円';//変数宣言=$(ダラー)
echo '価格は'.$var.'です．<br>';//改行タグは中に入れる
echo "価格は{$var}です．<br>";

$price_a=100;
$price_b=80;
$price_diff=$price_a-$price_b;

echo '八百屋Aでは大根が'.$price_a.'円でした<br>';
?>

<!-- 組み込み関数 -->
<?php
echo mb_strlen('こんにちは！');//文字数カウント
echo '<br>';
echo mb_strlen(123);
echo '<br>';
$hello = 'hello';
echo mb_strlen($hello);//変数も入れれる
echo '<br>';
echo time();//1970年1月1日0時0分0秒からの通算秒
// 引数のない関数
?>

<br><br>
<!-- 商品価格と個数の計算式 -->
<?php
$price1=1000;//商品価格
$quantity1=1;//個数
$total_price1=$price1*$quantity1;//合計金額
echo '合計金額は'.$total_price1.'円です';
?>

<br><br>

<!-- 自作関数(関数の定義) -->
<?php
function calculation(){
  echo 2000*2;
}
calculation();//関数の実行
?>

<br><br>

<!-- 引数の概念を入れた自作関数 -->
<?php
function totalPrice($price,$quantity){//関数の定義
  echo '合計金額は'.number_format($price*$quantity).'円です';//任意の処理
}
totalPrice(1000,2);//値を代入
totalPrice(2000,2);
?>
<!-- 引数は任意の名前でOK -->
<!-- 関数は引数を取れる -->

<br><br>

<!-- 戻り値 -->
<?php
function getTotalPrice($price,$quantity){
  return $price * $quantity;//return=データとして使えるように返す*関数ではない
}
getTotalPrice(2000,5);//値として戻すだけ

function TaxIncludedPrice($price,$quantity){
  echo getTotalPrice($price,$quantity)*1.1;
}
TaxIncludedPrice(2000,5);
?>

<!-- 関数は何かを表示するためだけのものではなく，
戻り値としてその関数で実行した値をさらに別の関数で使ったり
いろんなPHPの処理の中で関数の実行結果を使いまわせる． -->


<!-- 変数のスコープ -->
<?php
$a =10;
echo '<br>';
function number(){
  global $a;//グローバル宣言
  $a=8;
  echo $a;
}
number();
echo '<br>';
echo $a;

global $post //$post=wordpressが持ってる変数

?>


<br><br>


<!-- 配列 -->
<?php
$math ='数学';

$subjects = array('数学','英語','歴史');
// $subjects= ['数学','英語','歴史'];でもOK
// 配列は一つの変数に複数のデータを持たせることができる

echo $subjects [1] ;//キーは角カッコで囲む

print_r($subjects);//配列の中身を表示
// 配列を一気に出力することもできる

// 配列の修正・追加・初期化
$subjects[1]='フランス語';//修正
$subjects[]='国語'//追加
// $subjects = array(); //初期化
?>

<!-- キーに任意の値をつけられる-連想配列 -->
<?php
$subjects_rensou = array(
  'math' =>'数学'//1というキーをmathに置き換えた
);
echo $subjects_rensou['math'];
?>


<br><br>


<!-- 条件分岐 -->
<?php
$a=5;
$b=3;
if($a+$b==8){ //条件分(true or falseが返される)
  echo $a . '+' . $b . 'は8です';
}
?>
<!-- '等しくない'は!= -->

<br><br>

<!-- 値の有無による条件分岐 -->
<?php
$hello = 'hello';
if($hello){
  echo $hello;
}
?>

<br><br>

<?php
$a=5;
$b=3;
if($a == $b){
  echo $a . 'と' . $b . 'は同じ値です';
}else{
  echo $a . 'と' . $b . 'の値は異なります';
}
?>

<!-- elseifは条件式の追加 丸括弧必要-->
<!-- if文は上から優先に処理されていくので重複していないか注意 -->

<br><br>

<!-- 複数の条件式 -->
<?php
$age = 22 ;
$job = 'student';
if ($age <= 18 || $age >= 60){
  echo '入場料は1,000円です';
}elseif($age <=25 && $job == 'student'){
  echo '入場料は1,200円です';
}else{
  echo '入場料は1,500円です';
}
?>

<br><br>

<!-- 条件分岐のネスト -->
<?php
$who = '木村';
$greeting = 'おはようございます';
if ($who == '木村'){
  if ($greeting){
    echo '木村さん'.$greeting;
  }else{
    echo '木村さんには挨拶をしない';
  }
}elseif($who == '田村'){
  echo 'どうも';
}else{
  echo 'スルー';
}
?>

<br><br>

<!-- for文 (ループ・繰り返し処理)-->
<?php
for($i=1;$i<=10;$i++){//++=インクリメント
  echo $i.'<br>';
  if($i==5){
    break;
  }
} 
?>
<!-- 式1:最初のループ処理時に実行
式２：各ループ処理の開始時に実行
式３：各ループ処理の終了時に実行 -->

<br>

<!-- foreach文 -->
<?php
$subjects = array('数学','英語','歴史');
echo '<br>';
foreach($subjects as $value){
  echo $value.'<br>';
}
?>
<!-- 配列から各要素の値を取り出して処理をする -->

<br>

<!-- キーの名前を一緒に取り出す -->
<?php
$subjects = array('数学','英語','歴史');
$subjects = array(
  'math' =>'数学',
  'english' => '英語',
  'history' => '歴史'
);
foreach($subjects as $key => $value){
// $subjects=任意の変数(配列orオブジェクト)
// $key => $value =各ループにおいて要素のキーと値を入れる任意の変数
  echo $key.'は'. $value.'<br>';
}
?>

<!-- 多次元配列＝連想配列を作り，その連想配列の値をさらに他の連想配列で作る -->
<!-- 値が配列になっている -->