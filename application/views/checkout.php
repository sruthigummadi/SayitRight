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
                    <li class="thing active">
                        <a class="link" href="BuyfromusForm">buy from us</a>
                    </li>
                    <li class="thing">
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
        <section class="productpart checkoutpart wrapper">
            <h2>
                <span>Buy From Us</span>
                Buy From Us
            </h2>
            <div class="logindetails">
                <div class="row">
                    <div class="c-50">
                        <h3>Contact Information</h3>
                        <form action = "/WDM_project5/index.php/CheckoutForm" method = "post">
                        <input type="text" name="email" id="email" placeholder="Enter Email">
                        <h3>Shiping Address</h3>
    
                        <div class="row">
                            <div class="c-50">
                                <input type="text" name="fname" id="fname" placeholder="Enter First name">
                            </div>
                            <div class="c-50">
                                <input type="text" name="lname" id="lname" placeholder="Enter Last name">
                            </div>
                        </div>
                        <input type="text" name="address" id="address" placeholder="Enter Address">
                        <input type="text" name="apartment" id="apartment" placeholder="Enter Apartment, suite, etc">
                        <input type="text" name="city" id="city" placeholder="Enter City">
    
                        <div class="row">
                            <div class="c-50">
                                <div class="choicewrapper">
                                    <select name="language" id="language">
                                        <option name = "language" value="Spanish">Spanish</option>
                                        <option name = "language" value="English">English</option>
                                    </select>
                                </div>
                            </div>
                            <div class="c-50">
                                <input type="text" name="zip" id="zip" placeholder="Enter Postal Code">
                            </div>
                        </div>
    
                        <button name = "buyBtn" class="btn gradient pull-right";>Send message</button>
    
                    </div>
                    <div class="c-50">
<?php
$product=$this->Common_model->OpenCart();
foreach($product->result_array() as $row)
{
echo '<img src="'.$row['pimg'].'" width="55%" height="300px" align="right"/>';
echo '<div class="c-50" style="float:right; width:50%; ">';
echo '<p style="font-family: sans-serif; font-size: 18px;" align="left">$'.$row['pprice'].'';
echo '<input type="text" name = "quantity" id = "quantity" placeholder="Enter Quantity">';
}
?>
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