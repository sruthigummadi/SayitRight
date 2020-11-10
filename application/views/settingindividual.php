<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SayItRight</title>
<link rel="shortcut icon" href="sruthigummadi.uta.cloud/gummadisayitright/img/logo.jpg">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?php echo base_url();?>css/sayitright.css">
</head>

<body>
    <header class="backgroundcolour">
        <nav class="navigation navigationsg navigationa wrapper">
            <a class="navigationlogo" href="home.php">
                <img src="sruthigummadi.uta.cloud/gummadisayitright/img/logo.jpg" alt="" srcset="">
            </a>
            <div class="fit navigationfit" id="navigationText">
                <ul class="navigationnav mr-auto">
                    <li class="thing">
                        <a class="link" href="DashboardIndividualForm">Home</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="ConferencesIndividualForm">Conferences</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="EventsIndividualForm">Events</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="MyConferencesIndividualForm">My Conferences</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="MyEventsIndividualForm">My Events</a>
                    </li>
                    <li class="thing">
                        <a class="link active" href="SettingIndividualForm">Settings</a>
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
                    <form action = "/WDM_project5/index.php/SettingIndividualForm" method = "post">
                        <div class = "row" >
                                    <div class = "column" id="regForm" style = "width:65%">
                                        <label for="fname">First Name</label>
                                        <input type = "text" id = "fname" name = "fname" placeholder="First Name" 
                                               value=<?php echo $posts->fname;?>>
                                        <br><br>
                                        <label for="lname">Last Name</label>
                                        <input type = "text" id = "lname" name = "lname" placeholder="Las† Name"
                                               value=<?php echo $posts->lname;?>>
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
                                    <div class = "column" id = "regForm2">
                                       <label for="work">work</label>
                                       <input type = "text" id = "phone" name = "work" placeholder="place" 
                                              value=<?php echo $posts->work;?>>  
                                    </div>
                                    <div class = "column" id = "regForm2">
                                       <label for="password">Password</label>
                                       <input type = "password" id = "password" name = "password" placeholder="Contrasena" 
                                              value=<?php echo $posts->password;?>>  
                                    </div>
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