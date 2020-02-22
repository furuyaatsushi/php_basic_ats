<?php
$trib = [1, 0, 5];
foreach(range(0,25) as $cnt){
  $tribn = $trib[$cnt] + $trib[$cnt+1] + $trib[$cnt+2];
  var_dump($tribn);
  array_push($trib, $tribn);
}
?>