<?php
require '../vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->addYear(3);

$dt = Carbon::now();
echo $dt->month;

$dt = Carbon::now();
echo $dt->day;

$dt = Carbon::now();
echo $dt->hour;

$dt = Carbon::now();
echo $dt->minute;

$dt = Carbon::now();
echo $dt->second;