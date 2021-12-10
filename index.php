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

echo $subjects [1] ;//キーは角カッコで囲む

print_r($subjects);//配列の中身を表示
// 配列を一気に出力することもできる

// 配列の修正・追加・初期化
$subjects[1]='フランス語';//修正
$subjects[]='国語'//追加
// $subjects = array(); //初期化

?>

