<?php
//Switches


date_default_timezone_set('America/Los_Angeles');

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
// echo '<br>';
switch ($today) {

    case 'Monday':
        $pic = 'Ali.jpg';
        $boxer = 'Monday\'s Boxer of the Day is Muhammad Ali';
        $alt = "Muhammad Ali";
        $content = '<p class="content">Muhammad Ali, born Cassius Marcellus Clay Jr., is the most recognized boxer in the history of the sport. Regarded as one of the greatest boxers of all time,
        Ali had an amazing professional career, won the gold medal in the 1930 Summer Olympics, and was a very outspoken high-profile figure for African Americans during the civil rights movement.
        Muhammad Ali had an illustrious professional boxing career, with significant victories over Sonny Liston, Joe Frazier and George Foreman. He was also named Ring Magazine\'s Fighter of the Year six times, 
        and the only fighter to be ranked as the world\'s best heavyweight by BoxRec twelve times.</p>';
        $background = 'pink';
        break;

    case 'Tuesday':
        $pic = 'Pacquiao.jpg';
        $boxer = 'Tuesday\'s Boxer of the Day is Manny Pacquiao';
        $alt = "Manny Pacquiao";
        $content = '<p class="content">Manny \'Pacman\' Pacquiao is a Filipino professional boxer and Senator of the Philippines. He is regarded as one of the greatest boxers of all time. He is the only 
        eight-division world champion in the history of the sport, having won twelve world titles. He is an active professional boxer, holding the WBA welterweight title since July 2019.
        He is generally regarded as the greatest Southpaw Boxer of all time, and has numerously been called the best active boxer in the world throughout the years.
        </p>';
        $background = 'blue';
        break;


    case 'Wednesday':
        $pic = 'Tyson.jpg';
        $boxer = 'Wednesday\'s Boxer of the Day is \'Iron\' Mike Tyson';
        $alt = "Mike Tyson";
        $content = '<p class="content">\'Iron\' Mike Tyson is one of the most recognized facing in boxing history. Also known as \'The Baddest Man on the Planet\', Mike Tyson was known for his 
        devastating knockouts, his speed and strength for someone his size, and his phenomenal boxing record. The Brooklyn raised heavyweight was the undisputed world heavyweight champion
        from 1987 to 1990. He holds the record for youngest heavyweight boxer to win a world title, at just 20 years old.</p>';
        $background = 'red';
        break;

    case 'Thursday':
        $pic = 'Jones.jpg';
        $boxer = 'Thursday\'s Boxer of the Day is Roy Jones Jr.';
        $alt = "Roy Jones Junior";
        $content = '<p class="content">Roy Jones Jr. was considered one of greatest and most notable boxers of all time. Aside from his illustrious professional boxing career, he has also foudn success as 
        a boxing commentator, boxing trainer, rapper and actor. Hefought professionally from 1989 to 2018, with a record of 66 wins and 9 losses. He has held world titles in 4 different divisions.
        He is known for his unorthodox, \'hands-down\' fighting style, slick head movement and devastating knockouts.</p>';
        $background = 'grey';
        break;

    case 'Friday':
        $pic = 'Mayweather.jpg';
        $boxer = 'Friday\'s Boxer of the Day is Floyd \'Money\' Mayweather';
        $alt = "Floyd Mayweather Junior";
        $content = '<p class="content">
        Floyd Mayweather is the modern day great of boxing. Retiring with a perfect record of 50 wins and 0 losses. In his early days known as \'Pretty Boy Floyd\'
         and later years of his career as \'Money Mayweather\', 
         Floyd Mayweather is almost synonymous with modern day boxing, and one would be hard pressed to find someone who hasn\'t heard his name.</p>';
        $background = 'purple';
        break;

    case 'Saturday':
        $pic = 'Sugar.jpg';
        $boxer = 'Saturday\'s Boxer of the Day is \'Sugar\' Ray Robinson';
        $alt = "Sugar Ray Robinson";
        $content = '<p class="content">\'Sugar\' Ray Robinson was an International Boxing Hall of Fame inductee, having competed professionally from 1940 to 1965. He built a professional record of 40-0 before taking his
        first loss to the great Jake LaMotta. He is widely regarded as one of the greatest boxers of all time, and paved the way for many of the other great boxers to come after him. His nickname
        \'Sugar\' was even adopted by another one of the greats, \'Sugar\' Ray Leonard.</p>';
        $background = 'yellow';
        break;

    case 'Sunday':
        $pic = 'Chavez.jpg';
        $boxer = 'Sunday\'s Boxer of the Day is Julio Cesar Chavez';
        $alt = "Julio Cesar Chavez";
        $content = '
        <p class="content">>Julio Cesar Chavez is to this day considered the greatest Mexican boxer off all time, with the \'Mexican Style\' of boxing is often attributed to Chavez.
        With his rise to the top, his victories created a newfound national pride among his fans, with Chavez having inspired \'Corridos\', or Mexican folk songs about national pride. 
        Chavez amassed an incredible record of 89-0 before suffering his first loss on his 90th professional bout.</p>';
        $background = 'green';
        break;
}

// include('includes/config.php');
// include('includes/header.php');


?>

<!doctype html>
<html lang="en">

<head>
    <title>Daily Switch Assignment</title>
    <link rel="stylesheet" href="css/daily.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta charset="UTF-8">

</head>

<body class="<?php echo $background; ?>">
    <div class="wrapper">
        <header>
            <div class="banner">
                <h1>Joey's Daily Assignment</h1>
            </div>
            <div class="navbar">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="daily.php">Daily</a>
                <a href="">People</a>
                <a href="contact.php">Contact</a>
                <a href="gallery.php">Gallery</a>
                <a href="../index.php">Portal Page</a>
            </div>
        </header>

        <h1> <?php echo $boxer; ?> </h1>
        <div class="mainContainer">
            <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
            <?php echo $content; ?>

            <div class="daySwitch">
                <h2>Check out our other boxers below!</h2>
                <ul>
                    <li><a style="color:<?php if ($today == 'Monday') {
                                            echo 'pink';
                                        } else {
                                            echo 'blue';
                                        }; ?>" href="daily.php?today=Monday">Monday</a></li>
                    <li><a  style="color:<?php if ($today == 'Tuesday') {
                                            echo 'black';
                                        } else {
                                            echo 'blue';
                                        }; ?>" href="daily.php?today=Tuesday">Tuesday</a></li>
                    <li><a style="color:<?php if ($today == 'Wednesday') {
                                            echo 'red';
                                        } else {
                                            echo 'blue';
                                        }; ?>"  href="daily.php?today=Wednesday">Wednesday</a></li>
                    <li><a style="color:<?php if ($today == 'Thursday') {
                                            echo 'black';
                                        } else {
                                            echo 'blue';
                                        }; ?>"  href="daily.php?today=Thursday">Thursday</a></li>
                    <li><a style="color:<?php if ($today == 'Friday') {
                                            echo 'purple';
                                        } else {
                                            echo 'blue';
                                        }; ?>"  href="daily.php?today=Friday">Friday</a></li>
                    <li><a style="color:<?php if ($today == 'Saturday') {
                                            echo 'yellow';
                                        } else {
                                            echo 'blue';
                                        }; ?>"  href="daily.php?today=Saturday">Saturday</a></li>
                    <li><a style="color:<?php if ($today == 'Sunday') {
                                            echo 'green';
                                        } else {
                                            echo 'blue';
                                        }; ?>"  href="daily.php?today=Sunday">Sunday</a></li>
                </ul>
            </div>
        </div>

        <?php include('includes/footer.php');  ?>