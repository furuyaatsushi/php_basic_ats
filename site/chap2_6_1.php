<?php
var_dump("年齢は？");
$age = trim(fgets(STDIN));
if($age >= 6 && $age <= 15){
  var_dump("義務教育の対象");
}
?>