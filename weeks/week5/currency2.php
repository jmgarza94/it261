<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Basic Currency Form</title>
<style>
    * {
        padding:0;
        margin:0;
        box-sizing: border-box;
    }

    form {
        max-width: 600px;
        margin: 20px auto;
    }

    fieldset {
        padding: 10px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type=text],
    input[type=email] {
        width: 100%;
        margin-bottom:10px;
    }

    form ul {
        margin-left:20px;
        list-style-type:none;
        margin-bottom: 10px;
    }

    .box {
        width: 400px;
        margin: 20px auto;
        background: beige;
        padding: 10px;
    }

    select {
        margin-bottom: 10px;
        display:block;
    }
</style>

</head>

<body>
    <form action="" method="post">
        <fieldset>
        <label>Name</label>
        <input type="text" name="name">
        <label>Email</label>
        <input type="email" name="email">
        <label>How much money do you have?</label>
        <input type="text" name="amount">
        <label>Choose your currency</label>
        <ul>
        <li><input type="radio" name="currency" value="0.013">Rubles</li>
        <li><input type="radio" name="currency" value="0.76">Canadian</li>
        <li><input type="radio" name="currency" value="1.28">Pounds</li>
        <li><input type="radio" name="currency" value="1.18">Euros</li>
        <li><input type="radio" name="currency" value="0.0094">Yen</li>
        </ul>
        <label>Banking Institution</label>
        <select name="bank">
            <option value="NULL">Select one</option>
            <option value="boa">Bank of America</option>
            <option value="chase">Chase Bank</option>
            <option value="becu">Boeing Credit Union</option>
            <option value="mattress">Mattress</option>
        </select>
        <input type="submit" value="Convert it!">
            <p><a href="">Reset</a></p>


        </fieldset>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(empty($_POST['name'])) {
                echo '<p>Please enter a name</p>';
            } 
            if (empty($_POST['email'])) {
                echo '<p>Please enter a valid email</p>';
            } 

            if (empty($_POST['amount']) || !is_numeric($_POST['amount'])) {
                echo '<p>Please enter a valid amount</p>';
            }

            if (empty($_POST['currency'])) {
                echo '<p>Please choose a currency</p>';
            } 
            
            if($_POST['bank'] == 'NULL') {
                echo 'Choose your banking institution';
            }


            if(isset($_POST['name'],
                     $_POST['email'],
                     $_POST['amount'],
                     $_POST['currency'],
                     $_POST['bank']) && 
                       is_numeric($_POST['amount'])
                            
                       ) {
                            $name= $_POST['name'];
                            $email= $_POST['email'];
                            $amount= $_POST['amount'];
                            $currency= $_POST['currency'];
                            $bank= $_POST['bank'];
                            $total = $amount * $currency;
                            $totalFormat = number_format($total, 2);
                            ?>

         <div class="box">
            <?php
                echo '<h2>Hello '.$name.'</h2>';
                echo '<p>You now have $ '.$totalFormat.' American Dollars and we will be depositing it in '.$bank.'</p>';
                echo '<p>We will be sending you an email at '.$email.'</p>'

            ?>
        </div>
    <?php
            } //end elseif

        } //close server request method


    ?>

</body>
</html>