<?php
$array    = [];
$array[1] = 4;
$array[2] = 0;
$array[3] = 4;
$array[4] = 1;

$col_num = 1;

$date_range = 5;

echo "before:";
echo "<br>";

var_dump($array);

for ($i = 1; $i <= sizeof($array); $i++) {
  if ($array[$i] == 0) {
    $array[$i] = $date_range;
    break;
  }
  $col_num++;
}

if (sizeof($array) < $col_num) {
  $array[$col_num] = $date_range;
}

echo "after:";
echo "<br>";

var_dump($array);

echo "<br>";
echo "colnum: $col_num";
echo "<br>";
foreach ($array as $key => $value) {
  if ($array[$key] > 0) {
    $array[$key]--;
  }
}

var_dump($array);
echo "<br>";
foreach ($array as $key => $value) {
  if ($array[$key] > 0) {
    $array[$key]--;
  }
}

var_dump($array);
?>
