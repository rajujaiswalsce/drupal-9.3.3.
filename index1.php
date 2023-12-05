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
    
$arr = [[1,2,3],
[4,5,6],
[7,8,9]];
$x = 0;
$y = 0;

for($i=0;$i<count($arr);$i++){
for($j=0;$j<count($arr[$i]);$j++){
if($i === $j){
$x += $arr[$i][$j] . "<br>"; 
}else if($i === 2-$j){
$y += $arr[$i][$j] . "<br>"; 
}
}
}
 echo  $x;

 ?>
 <?php
// 2. Write a program to print half pyramid structure
// 1
// 12
// 123
// 1234
// 12345

 $n = 5;
 $y = "";
 for($i = 1;$i<=$n;$i++){
  
     for($j = $i;$j<=$i;$j++){
      $y = $y . $i;
     }
    //  echo $y . '</br>';
 }


// 1
// 22
// 333
// 4444
// 55555

$n = 5;
 
 for($i = 1;$i<=$n;$i++){
  $z = "";
     for($j = 0;$j<$i;$j++){
      $z = $z . $i;
     }
    //  echo $z . '</br>';
 }
//  *
//  **
//  ***
//  ****
//  *****
$n = 5;
 
 for($i = 1;$i<=$n;$i++){
  $str = "";
     for($j = 0;$j<$i;$j++){
      $str = $str . "*" ;
     }
    //  echo $str . '</br>';
 }
?>


<?php
// 4. Reverse a number
// Input
// Integer - 12345
// Output
// Integer - 54321

$arr = 12345;
$str = (string)$arr;
for($i= strlen($arr) - 1;$i>=0;$i--){
    //  echo $str[$i];
}
?>

<?php
// 5. Print first 10 fibonacci numbers
  $n=10;
  function fib($n){
  if($n === 0){
        return 0; 
  }else if($n === 1){
        return 1; 
  }else{
    return (fib($n-2)+fib($n-1));
  }
} 
 for ($i = 0; $i < $n; $i++){
  // echo fib($i) ." " ;
   }

?>
<?php
// 3. Write a program to print half pyramid structure
//     *
//    ***
//   ****
//  *****
// ******

$n = 5;
$str = "";
for($i=1;$i<=$n;$i++){
  for($j = 0;$j<$n-$i;$j++){
      $str = $str . "_";
  }
     for($k=0;$k<$i;$k++){
      $str = $str . "*";
     }
  
  $str = $str . "</br>";
}
echo $str;

// 1
// 22
// 333
// 4444
// 55555


