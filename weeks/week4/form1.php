<?php
//form part 1
//dont care about the HTML, body tag..
// form elements <input> <label> <form>
//name attribute and VALUE!!!




if (isset($_POST['name'],
        $_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo $name;
    echo $email;
} else {
    echo '
    <form action="" method="post">
    <label>NAME</label>
    <input type="text" name=""><br>
    <label>EMAIL</label>
    <input type="email" name="">
    <br>
    <input type="submit" value="Send it!"><br>
    <p><a href="">Reset</a></p>
    </form>
    ';
}

?>