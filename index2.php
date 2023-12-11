<?php
$mat = [[1,2,3],
        [4,5,6],
        [7,8,9]
];

$bag = "";
$bag1 = "";
$n = count($mat);
for ($i=0; $i < count($mat); $i++) { 
for ($j=0; $j < count($mat[$i]); $j++) { 
    if($i === $j){
        $bag .= $mat[$i][$j] . " ";
    }
    elseif($i + $j === $n - 1){
        $bag1 .= $mat[$i][$j] . " ";
    }

}
}
echo "First Digonal Matrix: ".$bag . "<br>";
echo  "Second Diagonal Matrix: ".$bag1 . "<br>"; 

$array = [[1,2,3,4],
          [5,6,7,8,9],
          [10,11,12,13],
          [14,15,16,17]];
$n = count($array);
$bag = "";
for($i=0;$i<$n;$i++){
    if($i%2 === 0){
        for ($j=0; $j < count($array[$i]); $j++) { 
            $bag .= $array[$i][$j] . " ";
        }
    }else{
        for ($j=count($array[$i]) - 1; $j >=0 ; $j--) { 
            $bag .= $array[$i][$j] . " ";
        }
    }
}      
echo $bag ."<br>";

$str = "rajujaiswal";
$mid_num = floor(strlen($str) / 2) ;
echo $str[$mid_num] . "<br>";

$str = "Welcome India";
$bag = "";
for($i=strlen($str)-1;$i>=0;$i--){
    $bag .= $str[$i];
}
echo $bag ."<br>";

$arr = [10,20,30,30,40,50,50,60];
$arr1 = [];
for ($i=0; $i < count($arr); $i++) { 
      if($arr[$i] === $arr[$i+1]){
        continue;
      }
    array_push($arr1,$arr[$i]);
}
print_r($arr1);
echo "<br>";

$arr = [10,20,30,30,40,50,50,60];
$bag = "";
for ($i=0; $i < count($arr); $i++) { 
      if($arr[$i] !== $arr[$i+1]){
          $bag .= $arr[$i] . " ";
      }else{
        $i++;
      }
    
}
echo $bag;
echo "<br>";
$array_mat = [[1,2,3,4],
              [5,6,7,8],
              [9,10,11,12],
              [13,14,15,16]];
$n = count($array_mat);
$bag = "";
$top = 0;
$bottom = $n - 1;
$left  = 0;
$right = $n - 1;

for ($i=$bottom; $i>=$top ; $i--) { 
    $bag .= $array_mat[$i][$left] . " ";
}
$left++;
for ($i=$left; $i <= $right ; $i++) { 
    if($i == $i){
        $bag .= $array_mat[$i][$i] . " ";
    }
}              
$bottom--;
for ($i=$bottom; $i >= $top ; $i--) { 
    $bag .= $array_mat[$i][$right] . " ";
}
echo $bag ."<br>";

$arr_mat = [[1,2,3,4],
            [5,6,7,8],
            [9,10,11,12],
            [13,14,15,16]];
$bag = "";
$m  = count($arr_mat);
$top = 0;
$bottom = $m-1;
$left = 0;
$right = $m - 1;
for ($i=$left; $i<=$right; $i++) { 
    $bag .= $arr_mat[$top][$i] . " ";
}
 $top++;
for ($i=$top; $i <=$bottom ; $i++) { 
    $bag .= $arr_mat[$i][$n-$i-1] . " ";
}
$left++;
for ($i=$left; $i <=$right ; $i++) { 
    $bag .= $arr_mat[$bottom][$i] . " ";
}
echo $bag . "<br>";

// Add Target Number:-
function myFun($arr,$k){
for ($i=0; $i <count($arr) ; $i++) { 
    for ($j=$i+1; $j < count($arr) ; $j++) { 
        if($arr[$i] + $arr[$j] == $k){
           return $i . " " . $j;
        }
    }
}
return -1;
}
$arr = [10,15,14,23,25,30];
$k = 40;
echo myFun($arr,$k) . "<br>";
// Diff Target Number:-
function myFun1($arr,$k){
    for ($i=0; $i <count($arr) ; $i++) { 
        for ($j=$i+1; $j < count($arr) ; $j++) { 
            if(abs($arr[$i] - $arr[$j]) == $k){
               return $i . " " . $j;
            }
        }
    }
    return -1;
    }
    $arr = [10,15,14,23,25,30];
    $k = 10;
    echo myFun1($arr,$k) ."<br>";
// Multiple Target Number:-
function myFun2($arr,$k){
for ($i=0; $i <count($arr) ; $i++) { 
    for ($j=$i+1; $j < count($arr) ; $j++) { 
        if($arr[$i] * $arr[$j] == $k){
           return $i . " " . $j;
        }
    }
}
return -1;
}
$arr = [10,15,14,23,25,30];
$k = 140;
echo myFun2($arr,$k) . "<br>";    

// $arr = [5,10,15,12,23,11,52,6];
// sort($arr);
// //  print_r($arr);
//  for ($i=0; $i < count($arr); $i++) { 
//     if($arr[$i] != $arr[0]){
//         echo $arr[$i];
//         return;
//     }
//  }
// echo "<br>";

$array_mat1 = [
               [1,2,3,4,22],
               [4,5,6,7,22],
               [8,9,10,11,22],
               [12,13,14,15,22],
               [16,17,18,19,22]
              ];

$n = count($array_mat1);
$left = 0;
$right = $n - 1;
$top = 0;
$bottom = $n - 1;
$bag = "";
$count = 0;
while($count<$n*$n){
for ($i=$left; $i <=$right && $count<$n*$n ; $i++) { 
    $bag .= $array_mat1[$top][$i] . " ";
    $count++;
}

$top++;
for ($i=$top; $i <= $bottom && $count<$n*$n ; $i++) { 
    $bag .= $array_mat1[$i][$right] . " ";
    $count++;
}
$right--;
for ($i=$right; $i>=$left && $count<$n*$n; $i--) { 
    $bag .= $array_mat1[$bottom][$i] . " ";
    $count++;
}
$bottom--;
for ($i=$bottom; $i>=$top && $count<$n*$n; $i--) { 
    $bag .= $array_mat1[$i][$left] . " ";
    $count++;
}
$left++;

}
echo $bag;



