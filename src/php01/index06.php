<?php
function text($score1, $score2, $score3){
    $total = $score1 + $score2 + $score3;
    if($total>210){
        return "合計点は".$total."なので合格です";
    }
    else{
        return "合計点は".$total."なので不合格です";
    }
}
// echo text(100,100,11);

function triangle($bottom, $hight){
    return square($bottom,$hight)/2;
}
function square($bottom,$hight){
    return $bottom*$hight;
}
function trapezoid($bottom,$top,$hight){
    return ($bottom+$top)*$hight/2;
}

echo "三角形の面積：".triangle(2,3)."<br>";
echo "四角形の面積：".square(4,6)."<br>";
echo "台形の面積：".trapezoid(8,4,5)."<br>";

var_dump(triangle(2,3));