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
        background: beige;
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
        padding: 20px;
    }

    .box h2 {
        color: red;
        text-align:center;
    }

    .errorBox {
        width: 400px;
        margin: 20px auto;
        background: beige;
        padding: 10px;
        border: 1px solid black;
    }

    .errorBox h2 {
        text-align: center;
        color: red;
    }

    .errorBox p {
        font-weight: bold;
        text-align: center;
    }

</style>
</head>

<body>
<form action="" method="post">
        <fieldset>
        <label>Name</label>
        <input type="text" name="name">
        <label>How many miles will you be driving?</label>
        <input type="text" name="miles">
        <label>How many hours per day would you like to be driving?</label>
        <input type="text" name="hours">
        <label>Price per gallon</label>
        <ul>
        <li><input type="radio" name="ppg" value="3.00">$3.00</li>
        <li><input type="radio" name="ppg" value="3.50">$3.50</li>
        <li><input type="radio" name="ppg" value="4.00">$4.00</li>
        </ul>
        <label>Fuel Efficiency</label>
        <select name="efficiency">
            <option value="NULL" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'NULL') echo 'selected = "unselected"' ;?>>Select one</option>
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
            if (empty($_POST['name'])) {
                echo '<div class="errorBox">
                <h2>Please enter your name</p>
                </div>';
            }
            if (empty($_POST['miles'])) {
                echo '<div class="errorBox">
                <h2>Please enter a valid distance</h2>
                </div>';
            }
            if (empty($_POST['hours'])) {
                echo '<div class="errorBox">
                <h2>Please enter how many hours you will travel per day</h2>
                </div>';
            }  
            if (empty($_POST['ppg'])) {
                echo '<div class="errorBox">
                <h2>Please select a gas price</h2>
                </div>';
            } 

            if ($_POST['efficiency'] == 'NULL') {
                echo '<div class="errorBox">
                <h2>Please choose your fuel efficiency</h2>
                </div>';
            }

            if(isset($_POST['name'],
                     $_POST['miles'],
                     $_POST['hours'],
                     $_POST['ppg'],
                     $_POST['efficiency']))
                            
                        {
                            $name = $_POST['name'];
                            $miles = $_POST['miles'];
                            $hours = $_POST['hours'];
                            $ppg = $_POST['ppg'];
                            $efficiency = $_POST['efficiency'];
                            $totalCost = ($miles / $efficiency) * $ppg;
                            $totalFormat = number_format($totalCost, 2);
                            $days = 24 / $hours;
                            $daysFormat = number_format($days, 1);
    ?>
    <div class="box">
            <?php
                echo '<h2>Calculator Results</h2>';
                echo '<br>';
                echo '<p>'.$name.', you will be driving <b>'.$miles.' miles</b></p>';
                echo '<p>Your vehicle has an efficiency rating of <b>'.$efficiency.' miles per gallon</b>';
                echo '<p>Your total cost for gas will be <b>$'.$totalFormat.' dollars</b></p>';
                echo '<p>You will be driving a total of '.$hours.' hours, equating to '.$daysFormat.' days';
                //You will be driving a total of 
                // echo $efficiency;
            ?>
        </div>
        
        <?php  
             } //end elseif
            } //close server request method
        ?>
</body>
</html>