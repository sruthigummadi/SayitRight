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
                    <li class="thing active">
                        <a class="link" href="SignupForm">sign up</a>
                    </li>
                    <li class="thing">
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
                    <li>Sign Up</li>
                </ul>
                <h2>
                    SIGN UP
                </h2>
            </div>
        </section>

        <section class="signuppart">
            <div class="logindetails clearfix">
                <h2>Select the Type of User</h2>
                <div class="centertext">
                    <a href="SignupIndividualForm" class="gradient btn">Individual</a>
                    <a href="SignupEventForm" class="gradient btn">Event</a>
                    <a href="SignupBusinessForm" class="gradient btn">Business</a>
                </div>

                <hr>

                <div class="cbox">
                    <h5>
                        Welcome to Business Records
                    </h5>
                    <form action = "/WDM_project5/index.php/SignupBusinessForm" method = "post">
                    <div class="options">

                        <label for="type_of_business"><h5>Type of Business:</h5></label>
                        <input type="radio" name="type_of_business" value = "university" id="university">
                        <label for="university">University</label>
    
                        <input type="radio" name="type_of_business" value = "company" id="company">
                        <label for="company">Company</label>
                    </div>

                    <label for="lname"><input type="text" name = "lname" placeholder="Enter last name"></label>
                    <label for="email"><input type="text" name = "email" placeholder="Enter email"></label>
                    <label for="password"><input type="text" name = "password" placeholder="Enter password"></label>
                    <button type="submit" name="submit" class="gradient pull-right btn"/>send</button>
                 </form>   
                </div>
            </div>
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