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
                        <a class="link" href="DashboardBusinessForm">Home</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="ConferencesBusinessForm">Conferences</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="EventsBusinessForm">Events</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="MyConferencesBusinessForm">My Conferences</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="MyEventsBusinessForm">My Events</a>
                    </li>
                    <li class="thing active">
                        <a class="link" href="SettingBusinessForm">Settings</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<main>
        <section class="settingpart">
            <div class="logindetails">
                <div class="heading">
                    Welcome to your profile

                </div>
                <div class="content clearfix">
                    <form action="" method="post">
                    <form action = "/WDM_project5/index.php/SettingBusinessForm" method = "post">
                        <div class = "row" >
                                    <div class = "column" id="regForm" style = "width:65%">
                                        <label for="lname">Last Name</label>
                                        <input type = "text" id = "lname" name = "lname" placeholder="Las† Name"
                                               value=<?php echo $posts->lname;?>>
                                        <br><br>
                                        <label for="type_of_business">Type of Business</label>
                                        <input type = "text" id = "type_of_business" name = "type_of_business"
                                               value=<?php echo $posts->type_of_business;?>>
                                    </div>
                                    <div class = "column" style = "width:10%">
                                    </div>
                        </div>

                        <div class = "row">
                                <div class = "column" id = "regForm1">
                                       <label for="email">Email</label>
                                       <input type = "text" id = "email" name = "email" placeholder="Email" 
                                              value=<?php echo $posts->email;?>> 
                                </div>
                        </div>

                        <div class = "row">
                                       <label for="password">Password</label>
                                       <input type = "password" id = "password" name = "password" placeholder="Contrasena" 
                                              value=<?php echo $posts->password;?>>  
                        </div>

                                <div align = "center">
                                    <button class="btn gradient pull-right" value = "SubmitButton" id="submitButton4" name = "submitButton4" type = "submit">save changes</button>
                                </div>
                                    
                        </div>
                    </div>
                </form>
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