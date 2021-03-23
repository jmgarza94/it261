<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
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

</style>
</head>

<body>
<form action="" method="post">
        <fieldset>
        <label>How many miles will you be driving?</label>
        <input type="text" name="miles">
        <label>Price per gallon</label>
        <ul>
        <li><input type="radio" name="ppg" value="3.00">$3.00</li>
        <li><input type="radio" name="ppg" value="3.50">$3.50</li>
        <li><input type="radio" name="ppg" value="4.00">$4.00</li>
        </ul>
        <label>Fuel Efficiency</label>
        <select name="efficiency">
            <option value="15" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'poor') echo 'selected = "selected"' ;?>>Poor efficiency</option>
            <option value="20" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'moderate') echo 'selected = "selected"' ;?>>Moderate efficiency</option>
            <option value="25" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'good') echo 'selected = "selected"' ;?>>Good efficiency</option>
            <option value="30" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'very good') echo 'selected = "selected"' ;?>>Very good efficiency</option>
        </select>
        <input type="submit" value="Calculate">
            <p><a href="">Reset</a></p>


        </fieldset>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // if (empty($_POST['miles'])) {
            //     echo '<p>Please enter a valid distance</p>';
            // } 
            // if (empty($_POST['ppg'])) {
            //     echo '<p>Please select a gas price</p>';
            // } 

            // if (empty($_POST['efficiency'])) {
            //     echo '<p>Please choose your fuel efficiency</p>';
            // }

            if(isset($_POST['miles'],
                     $_POST['ppg'],
                     $_POST['efficiency']))
                            
                        {
                            $miles= $_POST['miles'];
                            $ppg= $_POST['ppg'];
                            $efficiency= $_POST['efficiency'];
                            $totalCost = $miles * $ppg;
                            $totalFormat = number_format($totalCost, 2);
    ?>
    <div class="box">
            <?php
                echo '<p>You have driven '.$miles.' miles</p>';
                echo '<p>Your vehicle has an efficiency rating of '.$efficiency.' miles per gallon';
                echo '<p>Your total cost for gas will be $'.$totalFormat.' dollars</p>';
                // echo $efficiency;
            ?>
        </div>
        <?php  
             } else {
                echo 'Please enter a valid distance, gas price, and fuel efficiency';
             } //end elseif
        } //close server request method
        ?>
</body>
</html>