<?php
//if statements

//if(ther is a condition) {
//    do something
//}

// $temperature = '15';
// if($temperature <= 60) {
//     echo 'It\'s not too hot';
// } else {
//     echo 'It could be hot';
// }

$temperature = '90';
if($temperature <= 60) {
    echo 'It\'s not too hot';
} elseif($temperature <= 70) {
    echo 'It\'s getting warmer..';
} elseif($temperature <= 80) {
    echo 'It\'s getting hot!';
} else {
    echo 'It is very hot!';
}

$salary = '200000';
if($salary == 200000) {
    echo 'I\'m happy';
}

// salary is still 200,000. If I make quota of selling 800,000, I will then make 10% of my salary as bonus. What will be my total salary?
//If I sell only 750,000, then I will only make 5% bonus
//If I sell only 500,000, then I will not get any bonus
echo '<br>';

$salary = 200000;
$sales = 499000;

if($sales <= 500000) {
    //salary remains the same
    $salary *= 1;
    echo $salary;
} elseif($sales <= 799000) {
    $salary *= 1.05;
    echo $salary;
} elseif($sales >= 800000) {
    $salary *= 1.1;
    echo $salary;
} else {
    echo 'No bonus';
}