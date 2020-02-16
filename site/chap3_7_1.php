<?php
$team = ["A", "B", "C", "D", "E"];
foreach($team as $t1){
  foreach($team as $t2){
    var_dump($t1 . "vs" . $t2);
  }
}
?>