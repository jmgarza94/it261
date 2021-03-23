<?php
//our functions

function sayHello() {
    echo 'Hello PHP function!!';
}

sayHello();  //calling the function
echo '<br>';

function sayHello2  ($name) {
    echo 'Hello '.$name.'';
}
sayHello2('Joey');
echo '<br>';
sayHello2('Jose');
echo '<br>';
sayHello2('Jesus');
echo '<br>';


function sayHello3 ($name, $age) {
    echo 'Hello '.$name.', and you are '.$age.' years old!';
}
sayHello3('Joey', 27);
echo '<br>';
sayHello3('Jose', 63);
echo '<br>';
sayHello3('Jesus', 26);
echo '<br>';
echo '<br>';
echo '<h2>Math Problems</h2>';
echo '<br>';
function cube($n) {
    $cubing = $n * $n * $n;
    echo $cubing;
}

cube(3);

echo '<h2>Celcius Converter</h2>';

function celciusConverter($temp) {
    $far = ($temp * 9/5) + 32;
    echo $far;
}

celciusConverter(0);

echo '<h2>Area and volume math problem</h2>';
echo '<br>';
function areaVolume($val1, $val2, $val3) {
    $area = $val1 * $val2;
    $volume = $val1 * $val2 * $val3;
    //you cannot return 2 arguments, but we can return an array
    return array($area, $volume);
}

$result = areaVolume(10,5,8); //how do we echo the array
echo '<b>Area: </b>'.$result[0].'';
echo '<br>';
echo '<b>Volume: </b>'.$result[1].'';
echo '<br>';

function areaVolume2($val1a, $val2a, $val3a) {
    $area = $val1a * $val2a;
    $volume = $val1a * $val2a * $val3a;
    //you cannot return 2 arguments, but we can return an array
    return array($area, $volume);
}
echo '<br>';
echo '<br>';
list($myArea, $myVolume) = areaVolume2(10,5,8);
echo $myArea;
echo '<br>';
echo $myVolume;