<?php
//Switches

// echo date('Y');
// echo '<br>';
// echo date('l');
// echo '<br>';
// echo '<br>';
// if today is Thursday, show me Thursday's content

// Global variables, capitalized, and the global variables have many attributes

// $_GET
// $_POST
// IS TODAY SET??
// isset is a function --  isset()

date_default_timezone_set('America/Los_Angeles');
$todayDate = date('H:i A');

if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l');
}
// echo '<br>';
switch($today) {
    
    
    case 'Thursday':
        $pic = 'latte.jpg';
        $coffee = 'Thursday is latte day';
        $alt = "Latte";
        $content = 'This will be my latte content';
        $background = 'pink';
        break;

    case 'Friday':
        $pic = 'americano.jpg';
        $coffee = 'Friday is Americano day';
        $alt = "Americano";
        $content = 'This will be my Americano content';
        $background = 'green';
        break;

    case 'Saturday':
        $pic = 'pumpkin.jpg';
        $coffee = 'Wednesday is Pumpkin Latte Day';
        $alt = "Pumpkin Latte";
        $content = 'This will be my Pumpkin Latte content';
        $background = 'light-blue';
        break;

    default:
        $pic = '';
        $coffee = 'There is no coffee set for this day';
        $alt = "";
        $content = 'Unfortunately there is no content for today!';
        $background = 'cyan';
        break;
    
}

?>

<!doctype html>
<html lang="en">
<head>
<title>Switch</title>
<meta charset="UTF-8">
<style>
    .pink {
        background: pink;
    }

    .green {
        background: green;
    }

    .light-blue {
        background: lightblue;
    }

    .cyan {
        background: cyan;
    }
</style>
</head>
<body class="<?php echo $background; ?>">
<h1> <?php 
    if ($todayDate <= 11) {
        echo 'Good Morning!<br>';
    } elseif ($todayDate <= 15) {
        echo 'Good Afternoon!<br>';
    } else {
        echo 'Good Evening!<br>';
    }

    echo $coffee;

?>
</h1>
<img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
<p><?php echo $content; ?></p>


<h2>Check out our daily specials below!</h2>
<ul>
    <li><a href="switch.php?today=Thursday">Thursday</a></li>
    <li><a href="switch.php?today=Friday">Friday</a></li>
    <li><a href="switch.php?today=Saturday">Saturday</a></li>
</ul>
</body>
</html>