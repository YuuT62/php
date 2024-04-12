<?php
for ($i=2; $i<=10; $i+=2){
    // echo $i;
    // echo "<br>";
}
$count=20;

while($count<=100){
    if($count%3 == 0){
        $count++;
        continue;
    }
    if($count == 20){
        break;
    }
    echo $count++ . "<br>";
}

$num = 3;
do{
    // echo "num = ".$num++ . "<br>";
}while($num<3);

// FizzBuzz問題
for($i=1; $i<=50; $i++){
    if($i%3 == 0 && $i%5 == 0){
        echo "FizzBuzz<br>";
    }elseif($i%3 == 0){
        echo "Fizz<br>";
    }elseif($i%5 == 0){
        echo "Buzz<br>";
    }else{
        echo $i."<br>";
    }
}

for($i=1; $i<=5; $i++){
    for($j=1; $j<=5; $j++){
        echo "●";
    }
    echo "<br>";
}