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