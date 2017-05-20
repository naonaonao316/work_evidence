<?php

$start_end_day_of_week = array(
                           'Sunday' => array(
                             'start_day_of_week' => 'Sunday',
                             'end_day_of_week' => 'Saturday'),
                           'Monday' => array(
                             'start_day_of_week' => 'Monday',
                             'end_day_of_week' => 'Sunday'),
                           'Tuesday' => array(
                             'start_day_of_week' => 'Tuesday',
                             'end_day_of_week' => 'Monday'),
                           'Wednesday' => array(
                             'start_day_of_week' => 'Wednesday',
                             'end_day_of_week' => 'Tuesday'),
                           'Thursday' => array(
                             'start_day_of_week' => 'Thursday',
                             'end_day_of_week' => 'Wednesday'),
                           'Friday' => array(
                             'start_day_of_week' => 'Friday',
                             'end_day_of_week' => 'Thursday'),
                           'Saturday' => array(
                             'start_day_of_week' => 'Saturday',
                             'end_day_of_week' => 'Friday'),
                         );

$from = isset($_GET["from"]) ? $_GET["from"] : "1970-01-01";
$to   = isset($_GET["to"])   ? $_GET["to"] : date("Y-m-d", time());

$day_of_week_from = date("l", strtotime($from));
$day_of_week_to   = date("l", strtotime($to));

$start_day_of_week = isset($_GET["start_day_of_week"]) ? $_GET["start_day_of_week"] : "Sunday";

$start_day_of_week_config = $start_end_day_of_week[$start_day_of_week]["start_day_of_week"];
$end_day_of_week_config   = $start_end_day_of_week[$start_day_of_week]["end_day_of_week"];

echo "from: $from";
echo "<br>";
echo "to: $to";
echo "<br>";
echo "day of week (from): $day_of_week_from";
echo "<br>";
echo "day of week (to): $day_of_week_to";
echo "<br>";
echo "start_day_of_week: $start_day_of_week_config";
echo "<br>";
echo "end_day_of_week: $end_day_of_week_config";

$start_date_of_week_from = start_date_of_week($start_day_of_week_config, $day_of_week_from, $from);
$end_date_of_week_from   = end_date_of_week($end_day_of_week_config, $day_of_week_from, $from);

$start_date_of_week_to   = start_date_of_week($start_day_of_week_config, $day_of_week_to, $to);
$end_date_of_week_to     = end_date_of_week($end_day_of_week_config, $day_of_week_to, $to);

echo "<br>";
echo "start date of week (from): $start_date_of_week_from";
echo "<br>";
echo "end date of week (from): $end_date_of_week_from";

echo "<br>";
echo "start date of week (to): $start_date_of_week_to";
echo "<br>";
echo "end date of week (to): $end_date_of_week_to";
echo "<br>";
echo "<br>";

$index = 0;

$target_date = "";

while(1) {
  if ($index == 0) {
    echo "end_date_of_week: $to";
    echo "<br>";
    $target_date = $start_date_of_week_to;
    echo "start_date_of_week: $target_date";
    echo "<br>";
  } else {
    $target_date = date("Y-m-d", strtotime("-1 day", strtotime($target_date)));
    echo "end_date_of_week: $target_date";
    echo "<br>";
    $target_date = date("Y-m-d", strtotime("-6 day", strtotime($target_date)));
    if ($target_date <= $from) {
      $target_date = $from;
    }
    echo "start_date_of_week: $target_date";
    echo "<br>";
  }
  $index++;
  if ($target_date <= $from) {
    break;
  }
}

function start_date_of_week($start_day_of_week_config, $target_day_of_week, $target_date) {
  $start_date_of_week = "";
  if ($start_day_of_week_config == $target_day_of_week) {
    $start_date_of_week = $target_date;
  } else {
    $start_date_of_week = date("Y-m-d", strtotime("last $start_day_of_week_config", strtotime($target_date)));
  }
  return $start_date_of_week;
}

function end_date_of_week($end_day_of_week_config, $target_day_of_week, $target_date) {
  $end_date_of_week = "";
  if ($end_day_of_week_config == $target_day_of_week) {
    $end_date_of_week = $target_date;
  } else {
    $end_date_of_week = date("Y-m-d", strtotime("next $end_day_of_week_config", strtotime($target_date)));
  }
  return $end_date_of_week;
}
?>
