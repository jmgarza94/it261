<?php

$firstName = '';
$lastName = '';
$email = '';
$age = '';
$genre = '';
$theater = '';
$comments = '';
$agree = '';
$phone = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$ageErr = '';
$genreErr = '';
$theaterErr = '';
$commentsErr = '';
$agreeErr = '';
$phoneErr = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //if a field is empty, we are going to create an error variable
    if (empty($_POST['firstName'])) {
        $firstNameErr = 'Please enter your first name';
    } else {
        $firstName = $_POST['firstName'];
    }

    if (empty($_POST['lastName'])) {
        $lastNameErr = 'Please enter your last name';
    } else {
        $lastName = $_POST['lastName'];
    }

    if (empty($_POST['email'])) {
        $emailErr = 'Please enter your email';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phoneErr = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phoneErr = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        }
    }

    if (empty($_POST['age'])) {
        $ageErr = 'Please select an age rating';
    } else {
        $age = $_POST['age'];
    }

    if (empty($_POST['genre'])) {
        $genreErr = 'Please choose your favorite genres';
    } else {
        $genre = $_POST['genre'];
    }

    if ($_POST['theater'] == 'NULL') {
        $theaterErr = 'Please select your favorite movie theater';
    } else {
        $theater = $_POST['theater'];
    }

    if (empty($_POST['comments'])) {
        $commentsErr = 'How can we help you?';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['agree'])) {
        $agreeErr = 'You must agree!';
    } else {
        $agree = $_POST['agree'];
    }

    function myGenres() {
        $myReturn = '';
        //if my genres array is not empty, implode it
        if(!empty($_POST['genre'])) {
            $myReturn = implode(', ', $_POST['genre']);
        } return $myReturn;


    }// close myGenres


    if (isset(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['age'],
        $_POST['genre'],
        $_POST['theater'],
        $_POST['comments'],
        $_POST['agree']
        //$_POST['phone']
    )) {

        $to = 'josele.garza94@outlook.com';
        $subject = 'Test email for my contact page, ' . date('m/d/y');
        $body = 'First and Last name: ' . $firstName . ' ' . $lastName . '' . PHP_EOL . '
                Email: ' . $email . '' . PHP_EOL . '
                Phone Number: ' . $phone . ''. PHP_EOL . '
                Age: ' . $age . '' . PHP_EOL . '
                Comments: '. $comments .''. PHP_EOL.'
                Theater: ' . $theater . ''. PHP_EOL .'
                Favorite Genres: '.myGenres().'';

                $headers = array(
                    'From' => 'no-reply@garzawebdesigns.com',
                    'Reply-to' => ''.$email.''

                );


        if (
            $_POST['firstName'] != '' &&
            $_POST['lastName'] != '' &&
            $_POST['email'] != '' &&
            $_POST['genre'] != '' &&
            $_POST['comments'] != '' &&
            $_POST['agree'] != '' &&
            $_POST['phone'] != '' &&
            preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']) &&
            $_POST['theater'] != 'NULL'
        ) {

            mail($to, $subject, $body, $headers);
            header('Location:thx.php');
        }
    } //closing isset
} //end server request

?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <label>First Name</label>
            <input type="text" name="firstName" value="<?php if (isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>">
            <span class="err"><?php echo $firstNameErr; ?></span>

            <label>Last Name</label>
            <input type="text" name="lastName" value="<?php if (isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>">
            <span class="err"><?php echo $lastNameErr; ?></span>

            <label>Email</label>
            <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <span class="err"><?php echo $emailErr; ?></span>

            <label>Phone</label>
            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
            <span class="err"><?php echo $phoneErr; ?></span>

            <label>Movie Age Rating</label>
            <ul>
                <li><input type="radio" name="age" value="G" <?php if (isset($_POST['age']) && $_POST['age'] == 'G') echo 'checked="checked"'; ?> class="age">G (all ages)</li>
                <li><input type="radio" name="age" value="PG13" <?php if (isset($_POST['age']) && $_POST['age'] == 'PG13') echo 'checked="checked"'; ?> class="age">PG-13 (13yo+)</li>
                <li><input type="radio" name="age" value="R" <?php if (isset($_POST['age']) && $_POST['age'] == 'R') echo 'checked="checked"'; ?> class="age">R (17+)</li>
            </ul>
            <span class="err"><?php echo $ageErr; ?></span>


            <label>Genre</label>
            <ul>
                <li><input type="checkbox" name="genre[]" value="comedy" <?php if (isset($_POST['genre']) && in_array('comedy', $genre)) echo 'checked="checked"'; ?>>Comedy</li>
                <li><input type="checkbox" name="genre[]" value="romance" <?php if (isset($_POST['genre']) && in_array('romance', $genre)) echo 'checked="checked"'; ?>>Romance</li>
                <li><input type="checkbox" name="genre[]" value="horror" <?php if (isset($_POST['genre']) && in_array('horror', $genre)) echo 'checked="checked"'; ?>>Horror</li>
                <li><input type="checkbox" name="genre[]" value="thriller" <?php if (isset($_POST['genre']) && in_array('thriller', $genre)) echo 'checked="checked"'; ?>>Thriller</li>
                <li><input type="checkbox" name="genre[]" value="mystery" <?php if (isset($_POST['genre']) && in_array('mystery', $genre)) echo 'checked="checked"'; ?>>Mystery</li>
                <li><input type="checkbox" name="genre[]" value="action" <?php if (isset($_POST['genre']) && in_array('action', $genre)) echo 'checked="checked"'; ?>>Action</li>
                <li><input type="checkbox" name="genre[]" value="drama" <?php if (isset($_POST['genre']) && in_array('drama', $genre)) echo 'checked="checked"'; ?>>Drama</li>
                <li><input type="checkbox" name="genre[]" value="scifi" <?php if (isset($_POST['genre']) && in_array('scifi', $genre)) echo 'checked="checked"'; ?>>Sci-Fi</li>
                <li><input type="checkbox" name="genre[]" value="western" <?php if (isset($_POST['genre']) && in_array('western', $genre)) echo 'checked="checked"'; ?>>Western</li>
            </ul>
            <span class="err"><?php echo $genreErr; ?></span>

            <label>Movie Theater</label>
            <select name="theater">
                <option value="NULL" <?php if (isset($_POST['theater']) && $_POST['theater'] == 'NULL') echo 'selected="unselected"'; ?>>Select one</option>
                <option value="meridian" <?php if (isset($_POST['theater']) && $_POST['theater'] == 'meridian') echo 'selected="selected"'; ?>>Regal Meridian</option>
                <option value="pacific" <?php if (isset($_POST['theater']) && $_POST['theater'] == 'pacific') echo 'selected="selected"'; ?>>AMC Pacific Place</option>
                <option value="central" <?php if (isset($_POST['theater']) && $_POST['theater'] == 'central') echo 'selected="selected"'; ?>>Central Cinema</option>
                <option value="siff" <?php if (isset($_POST['theater']) && $_POST['theater'] == 'siff') echo 'selected="selected"'; ?>>SIFF Uptown</option>
                <option value="thornton" <?php if (isset($_POST['theater']) && $_POST['theater'] == 'thornton') echo 'selected="selected"'; ?>>Regal Thornton</option>
                <option value="oak" <?php if (isset($_POST['theater']) && $_POST['theater'] == 'oak') echo 'selected="selected"'; ?>>AMC Oak Tree</option>
            </select>
            <span class="err"><?php echo $theaterErr; ?></span>

            <label>Comments</label>
            <textarea name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
            <span class="err"><?php echo $commentsErr; ?></span>

            <label>Agree</label>
            <ul>
                <li><input type="radio" name="agree" value="agree" <?php if (isset($_POST['agree']) && $_POST['agree'] == 'agree') echo 'checked="checked"'; ?>>Agree</li>
            </ul>
            <span class="err"><?php echo $agreeErr; ?></span>

            <input type="submit" value="Send it!">

            <p><a href="">Reset</a></p>

        </fieldset>

    </form>