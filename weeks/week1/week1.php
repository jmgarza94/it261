<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>IT261 Portal Page</title>
<link rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet" href="css/nav.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>

<body>
    <div class="wrapper">
    <header>
    <div class="banner">
    <h1>Joey's Portal Page</h1>
    </div>
    <div class="navbar">
  <a href="index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Assignments 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Weekly 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="weeks/week2/var.php">var.php</a>
      <a href="">var2.php</a>
      <a href="weeks/week2/heredoc.php">heredoc.php</a>
    </div>
  </div> 
</div>
    </header>
    <main>
        <h1>About Me</h1>
            <p>Hello! My name is Josele (Joey) Garza and I am currently in the Web Development Certificate program at Seattle Central.
             After finishing the program I hope to find a job in the field in Chicago to be close to family again.
            I am leaning more towards the front-end design rather than back-end coding. I plan to build up my portfolio with some freelance work before pursuing a job on a web dev team.
            </p>
            <br>
            <p>
                Outside of Web Development, I work full time at a busy brunch restaurant here in Seattle as the assistant manager and server. They have taken care of me for the time I've been in Seattle, and have made sure all of their employees
                are taken care of throughout this COVID pandemic. I plan to keep working here and paying my way through school until I finish the program. 
                In my free time I train as an amateur boxer at Seattle Boxing Gym, with hope to eventually be able to coach people one day. I also enjoy playing video games on different platforms, and spending time with my friends.
            </p>

        


    </main>

    <aside>
        <!-- <h3>Me!</h3> -->
        <img class="self-image" src="images/jboxing.jpg" alt="" /> 
        <!-- <img class="self-image" src="images/headshot.jpg" alt="" />  -->
        
      <h3>MAMP - HW1</h3>
      
      <a href="images/mamp_install.png">MAMP Install Screenshot</a>
      <br>
      <a href="images/mamp_errors.png">MAMP errors enabled</a>

    </aside>


    <footer>   
     <p><small>&copy; 2021 by Joey Garza, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>     
    </footer>
</div>

</body>
</html>