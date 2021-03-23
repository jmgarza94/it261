<?php

//DATE
echo date('Y');
echo '<br>';
echo date('H:i A'); //24 hr clock/Military time
echo '<br>';
echo date('h:i A'); //standard time
echo '<br>';
//echo date('h:i A'); //standard time
//echo '<br>';
echo 'set time zone to America Los Angeles';
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date('h:i A');

echo '<br>';
$todayDate = date('H:i A');
if ($todayDate <= 11) {
    echo 'Good Morning!';
} elseif ($todayDate <= 15) {
    echo 'Good Afternoon!';
} else {
    echo 'Good Evening!';
}