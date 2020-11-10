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
        <section class="toppart">
            <div class="wrapper">
                <ul class="toppart_text">
                    <li>Home</li>
                    <li><i class="fas fa-arrow-right"></i></li>
                    <li>Buy From Us</li>
                </ul>
                <h2>
                    BUY FROM US
                </h2>
            </div>
        </section>
<form method="post" action="/WDM_project5/index.php/CartForm">
<?php
     $products = $this->Common_model->ProductFetch();
     echo '<table align="'.'center'.'" cellspacing="'.'6'.'"><tr>';
     foreach($products->result_array() as $row)
      {
        echo "<td>";
        echo "<table>";
        echo '<tr><td><img src="'.$row['pimg'].'" width="210px" height="280px"></td></tr>';
        echo '<tr><td><p style="font-family:sans-serif; font-size: 11px; color:#777758;" align="center">'.$row['pdes'].'</p></td></tr>';
        echo '<tr><td><p style="font-family:sans-serif; font-size: 11px; color:#777758;" align="center">$'.$row['pprice'].'</p></td></tr>';
        echo '<tr><td  align="center"><button name="submit" style="text-transform: uppercase;font-size: 10px;font-weight: 700;border: 0;border-radius: 7px; padding: 15px 35px;outline: 0;cursor: pointer; background: linear-gradient(to right, #3fcaff, #a4ffb0)" value="'.$row['pid'].'"">Add to Cart</button></td></tr>';
        echo "</table>";
        echo "</td>"; 
      }
      echo "</tr></table>"; 
?>
</form>

        <section class="productpart wrapper">
            <h2>
                <span>Buy From Us</span>
                Buy From Us
            </h2>
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