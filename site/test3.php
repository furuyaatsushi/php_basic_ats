<?php
$num = 0;
$cnt = 0;
while($num < 10){
  $num = $num + 1/$cnt;
  $cnt = $cnt + 1;
}
var_dump($cnt);
?>