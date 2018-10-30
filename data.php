<?php
header('Content-type: application/json;charset=utf-8');
$myArr = Array();
//此處生成 50 條資料，模仿資料庫資料
for ($i = 1; $i < 51; $i++) {
    $d = array($i,$i,$i,$i,$i,$i);
    Array_push($myArr, $d);
}
$obj=json_encode($myArr, JSON_PRETTY_PRINT);

$text1 = '{
    "data":';
$text2 = '}';

echo $text1.$obj.$text2 ;
?>