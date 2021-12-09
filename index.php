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

<?php
$price1=1000;//商品価格
$quantity1=1;//個数
$total_price1=$price1*$quantity1;//合計金額
echo '合計金額は'.$total_price1.'円です';
?>

<!-- 自作関数 -->
<?php
function calculation(){//関数の定義
  echo 2000*2;
}
calculation();
?>