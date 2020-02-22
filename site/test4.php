<?php
$total = 0;
foreach(range(1,33333) as $cnt){
  if($cnt % 3 == 0){
    $total = $total + $cnt;
  }
  else if(strpos($cnt,"3") !== false){
    $total = $total + $cnt;
  }
  else{
  }
}
var_dump($total);
?>