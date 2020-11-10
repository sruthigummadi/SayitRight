<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SayItRight</title>
<link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>css/sayitright.css">
</head>

<body>
    <header class="backgroundcolour">
        <nav class="navigation navigationsg navigationa wrapper">
            <a class="navigationlogo" href="home.php">
                <img src="img/logo.png" alt="" srcset="">
            </a>
            <div class="fit navigationfit" id="navigationText">
                <ul class="navigationnav mr-auto">
                    <li class="thing">
                        <a class="link" href="HomeForm">Home</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="AboutusForm">About us</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="http://sruthigummadi.uta.cloud/gummadisayitright/blog/">blog</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="BuyfromusForm">buy from us</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="ContactForm">contact</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="SignupForm">sign up</a>
                    </li>
                    <li class="thing active">
                        <a class="link" href="LoginForm">login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="toppart">
            <div class="wrapper">
                <ul class="toppart_text">
                    <li>Home</li>
                    <li><i class="fas fa-arrow-right"></i></li>
                    <li>Login</li>
                </ul>
                <h2>
                    LOGIN
                </h2>
            </div>
        </section>

        <section class="loginpart">
            <form action = "/WDM_project5/index.php/LoginForm" method = "post">
            <div class="logindetails clearfix" id = "infoBox">
                 
                 <div class="centertext">
                 <div class = "row">
                    <label for="user_type"><h5>Select the Type of User</h5></label> 
          <div class = "column" id="regForm3">
                <input type="radio" name="user_type" value="individual" align = "center"><b>Individual</b><br>
            </div>
            <div class = "column" id="regForm3">
              <input type="radio" name="user_type" value="business" align = "center"><b>Business</b><br>
            </div>
            <div class = "column" id="regForm3">
              <input type="radio" name="user_type" value="event" align = "center"><b>Event</b><br>
            </div>
        </div>                 
                 <label for="userName">Email</label>
                 <input type = "text" id = "userName" name = "userName" placeholder="Enter your Email Address">
                 <label for="pwd">Password</label>
                 <input type = "password" id = "pwd" name = "pwd" placeholder="Please Enter your Password">
                 <input type = "submit" value = "Login" id="submitButton" name = "loginButton" class="gradient btn">
                 </div>
                 
                 </div>
                 </form>
        </section>
    </main>

    <footer class="backgroundcolour">
        <div class="footer-text wrapper">
            <hr>
            <strong>Copyrights &copy; 2019 All rights reserved | This web is made with &hearts; by <span style="color: #0000ff">DiazApps </span> </strong>     
        </div>
        
    </footer>
</body>

</html>