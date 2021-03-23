<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

date_default_timezone_set('America/Los_Angeles');

$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['people.php']= 'People';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';
$nav['../index.php']= 'Portal Page';

//create my random function here

function makeLinks($nav) {
    $myReturn = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $myReturn .= '<a class="active" href="'.$key.'">'.$value.'</a>';
        } else {
            $myReturn .= '<a href="'.$key.'">'.$value.'</a>';
        } //end else
    } //end foreach
    return $myReturn;
} //end function


function randPics() {

        $photos[0] = 'photo1';
        $photos[1] = 'photo2';
        $photos[2] = 'photo3';
        $photos[3] = 'photo4';
        $photos[4] = 'photo5';

        $i = rand(0, 4);

        $selectedImage = 'images/' . $photos[$i] . '.jpg';
        echo '<img src="' . $selectedImage . '" alt="' . $photos[$i] . '">';

    }


switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our Website project';
        $body = 'home';
        break;

    case 'about.php':
        $title = 'About page of our Website project';
        $body = 'about';
        break;

    case 'daily.php':
        $title = 'Daily page of our Website project';
        $body = 'daily';
        break;

    case 'people.php':
        $title = 'People page of our Website project';
        $body = 'people';
        break;

    case 'contact.php':
        $title = 'Contact page of our Website project';
        $body = 'contact';
        break;

    case 'gallery.php':
        $title = 'Gallery page of our Website project';
        $body = 'gallery';
        break;

    case '../index.php':
        $title = 'Home page of our Website project';
        $body = 'home';
        break;

    default:

    $body = 'inner';
    $title = 'Our wonderful website';
}