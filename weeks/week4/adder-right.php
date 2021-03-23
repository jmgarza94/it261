<?php  //adder-wrong.php

if (isset($_POST['num1'],
          $_POST['num2'])) {
$num1 = (int)$_POST['num1'];
$num2 = (int)$_POST['num2'];
$myTotal = $num1 + $num2;
echo '<h2>You added '. $num1 .' and '.$num2;
echo '<p style="color:red;"> and the answer is <br> '. $myTotal .'!</p>';
echo'<p><a href="">Reset page</a></p>';
} 
?>
<html lang="en">
<head>
<title>My Adder Assignment</title>
<style>

p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:black;
        text-decoration:underline;
        font-size:3em;
        margin: 40px 0px;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:2px solid blue;
        padding:15px;
    }

    label {
        padding-bottom: 10px;
    }
    
    input{
        margin-bottom:10px;
    }
    h1 {
        text-align: center;
    }


</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<label>Enter the first number: </label>
<input type="text" name="num1">
<br>
<label>Enter the second number: </label>
<input type="text" name="num2">
<br>
<input type="submit" value="Add Em!!"> </form>

<!--line 6 unnecessary dash when assigning variable-->
<!--Removed the color styling form line 8 and placed it earlier, within the opening <p> tag-->
<!--added semicolon at the end of line 8-->
<!--added language to opening HTML-->
<!--added closing PHP tag to line 10, removed from previous line-->
<!--removed the backslash from line 20 in the opening form tag-->
<!-- added extra quote to the end of the value on line 22 -->
<!-- Removed the 2 parentheses from the end of the first line of the if statement, and placed them at the end of the 3rd line -->
<!-- removed curly bracket from line 3, placed at end of line 5 after the 2 closing parentheses-->
<!-- changed semicolon at end of line 3 to a comma, added comma to line 4 -->
<!-- removed semi colon from line 5 -->
<!-- fixed multiple quotation mark erros on line 8 -->
<!-- added closing p tag on line 9 -->
<!-- removed quote, semicolon, curly bracket, closing php tag from very last line -->
<!-- checked if num2 was set along with num1 -->
<!-- pulled variables outside of the if conditional -->
<!-- added the POST method to form -->
<!-- add opening label to first line of form -->
<!-- num1 was capitalized on first line of form, not consistent with case (Num1) vs (num1)-->
<!-- opening tag for 2nd number changed from closing tag, add closing tag at end -->
<!-- line 7 case not consistent (Num2) vs (num2)-->




</body>
</html>