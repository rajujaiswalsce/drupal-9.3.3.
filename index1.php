<?php

$str = "raju";
$len = strlen($str);
for ($i=0; $i < $len; $i++) { 
    $bag = "";
    for ($j=0; $j <=$i; $j++) { 
       $bag .= $str[$j];
    }
    echo $bag;
    echo "<br>";
}
$str = "Sanjeev Bhaiya Raju Ballu";
$br = explode(" ",$str);  // return break the string into array
print_r($br);
echo "<br>";
$arr  = ["sanjeevbhaiya","NeelBhaiya","vickybhaiya","kanhaiyabhaiya"];
$br1 = implode(" ",$arr); // return srting from the element of array 
print_r($br1);
echo "<br>";
$n = 5;
$fat = 1;
for($i=$n;$i>0;$i--){
    $fat *= $i;
}
echo $fat . "</br>";

// The string doesn't contain variables or escape sequences.
//The string contains variables or escape sequences.
$name = "raju";
echo '\n';   
echo  "hello , $name ";  
echo "<br>";
// 0 2 2 2
// 1 0 2 2
// 1 1 0 2
// 1 1 1 0

$n = 4;

for($i=0;$i<$n;$i++){
    $bag = "";
    for($j = 0;$j<$n;$j++){
        if($i == $j){
         $bag .= 0 . " ";
        }
        else if($i>$j){
            $bag .= 1 . " ";
        }else{
            $bag .= 2 . " ";
        }
    }
    echo $bag ."<br>";
}

$arr = [5,8,9,6,19,3,5,16];
$bag = "";
$bag1 = "";
for($i=0;$i<count($arr);$i++){
    if($arr[$i] % 2 == 0 ){
       $bag .= $arr[$i] . " ";
    }else{
        $bag1 .= $arr[$i] . " ";
    }
}
echo "Even Number is: " . $bag."<br>";
echo "Odd Number is: " . $bag1."<br>";
// second largest value in array
$arr = [4,15,26,14,89,10,12,90,8,7];
sort($arr);
$x = array_reverse($arr);
for($i = 0;$i<count($x);$i++){
    if($x[$i] != $x[0]){
        echo $x[$i];
        return;
    }
}
    




