<?php
    define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

    $nav['index.php'] = 'Home';
    $nav['about.php'] = 'About';
    $nav['daily.php'] = 'Daily';
    $nav['people.php'] = 'People';
    $nav['contact.php'] = 'Contact';
    $nav['gallery.php'] = 'Gallery';

        function makeLinks($nav) {
            $myReturn = '';
            foreach($nav as $key => $value) {
                if(THIS_PAGE == $key) {
                    $myReturn .= '<li><a class="active" href="'.$key.'">'.$value.'</a></li>';
                } else {
                    $myReturn .= '<li><a href="'.$key.'">'.$value.'</a></li>';
                } //end else
            } //close foreach
            return $myReturn;
        } //close function

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Testing my Index page with a Function for my Nav</title>
<style>
    .active {
        color: red;
    }
</style>
</head>

<body>
<h1>This is a test for my navigation function</h1>
<nav>
<ul>
    <?php echo makeLinks($nav); ?>
</ul>

</nav>
</body>
</html>