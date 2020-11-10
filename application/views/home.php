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
                    <li class="thing active">
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
        <section class="homebanner">
            <div class="wrapper clearfix">
                <div class="text">
                    <h2>
                        For good <br>
                        communication <br>
                        <span class="red">Say it Right</span> is <br>
                        a tool that you should use
                    </h2>
                    <h6>
                        You can see our video tutorial of use just by pressing this <br> 
                        button.
                    </h6>
        
                    <div class="playbutton">
                        <a href="" class="playbtn">
                            <i class="fas fa-play"></i>
                        </a>
                        watch this video
                    </div>
                </div>
            </div>
        </section>
        <section class="subscribepart">
            <div class="wrapper">
                <div class="box">
                    <h2>
                        Subscribe Our Newsletter
                    </h2>
                    <p>
                        We won't send ant kind of spam
                    </p>
                </div>

                <div class="ipbox">
                	<?php echo validation_errors(); ?>
                    <?php echo form_open('HomeForm'); ?>
                    <input type="text" placeholder="Enter email address" name = "email">
                    <button type="submit" name="submit" class="gradient"/>SUBSCRIBE</button>
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