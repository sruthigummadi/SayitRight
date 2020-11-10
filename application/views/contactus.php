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
            <a class="navigationlogo" href="home.html">
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
                    <li class="thing active">
                        <a class="link" href="ContactForm">contact</a>
                    </li>
                    <li class="thing">
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
                    <li>CONTACT</li>
                </ul>
                <h2>
                    CONTACT US
                </h2>
            </div>
        </section>

        <section class="contactpart">
            <form action = "/WDM_project5/index.php/ContactForm" method = "post">
            <div class="wrapper">                
                <div class="row">
                    <div class="col-50">               
                        <label for="fname">First Name<input type="text" placeholder="Enter your name" name="fname"></label>
                        <label for="lname">Last Name<input type="text" placeholder="Enter last name" name="lname"></label>
                        <label for="phone">Phone<input type="text" placeholder="telephone"  name="phone"></label>
                    </div>
    
                    <div class="col-50">
                        <label for="comments">Comments<textarea id="" cols="30" rows="7" placeholder="Enter message" name="comments"></textarea></label>
                    </div>
                </div>
                <button type="submit" name="submit" class="gradient pull-right btn"/>send message</button>
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