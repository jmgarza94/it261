<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Celcius Form</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <legend>Our Celcius Form</legend>
            <label>Enter your Celcius value</label>
            <input type="text" name="cel">
            <input type="submit" value="Convert it!">
            <a href="">Reset</a>
        </fieldset>
    </form>
<?php
//f = (c * 9/5) + 32
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['cel'])) {
        $cel = $_POST['cel'];
        $far = ($cel * 9/5) + 32;
        if($far <= 32) {
            echo '<p class="cool">'.$far.' is very cold!</p>';
        } elseif ($far <= 50) {
            echo '<p class="not-cool">'.$far.' is a little chilly!</p>';
        } elseif ($far <= 80) {
            echo '<p class="hot">'.$far.' is getting warmer!</p>';
        }  else {
            echo '<p class="hot">'.$far.' is hot!</p>';
        
        }
            //close else
}  //close isset
}  //close server request method
?>

</body>
</html>