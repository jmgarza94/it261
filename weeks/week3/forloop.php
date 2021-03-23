<?php
//for loop

//celcius formula
//far = (celcius * 9/5) + 32

// $celcius = 14;
// $far = ($celcius * 9/5) +32;
// echo $far;

for($celcius = 0; $celcius <= 100; $celcius += 5) {
    $far = ($celcius * 9/5) +32;
    echo 'C:'.$celcius.' &nbsp; &nbsp; F:'.$far.'<br>';

}

echo '<br>';
echo '<br>';
echo 'I have included the extra credit of converting Miles to Kilometers, rounding Km to 1.609';
echo '<br>';

//miles and kilometers for EXTRA CREDIT!!
for($miles = 0; $miles <= 100; $miles += 5) {
    $kilo = ($miles * 1.609);
    echo 'Miles:'.$miles.' &nbsp; &nbsp; Kilometers:'.$kilo.'<br>';

}