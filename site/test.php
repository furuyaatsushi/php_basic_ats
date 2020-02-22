<?php
$total = 0;
foreach(range(1,100) as $num){
  $num4 = $num * $num * $num * $num;
  $total = $total + $num4;
}
var_dump($total);
?>