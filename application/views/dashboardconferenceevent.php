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
                    <li class="thing active">
                        <a class="link" href="DashboardEventForm">Home</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="ConferencesEventForm">Conferences</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="EventsEventForm">Events</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="MyConferencesEventForm">My Conferences</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="MyEventsEventForm">My Events</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="SettingEventForm">Settings</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main>

        <section class="dashboardpart">
            <div class="wrapper">
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('DashboardConferenceEventForm'); ?>
                <strong align = "center"><h1>Welcome to Event Dashboard Page</h1></strong>
                <div class="column" name = "event">
                <label for = "event"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Conferences</h3></label>
                <div class = "column">
                <label for="conferencename">Conference&nbsp;&nbsp;</label>
                <input type = "text" id = "conferencename" name = "conferencename" placeholder="Enter the Conference Name"> 
                </div>
                <br>
                <div class = "column">
                <label for="description">Description&nbsp;&nbsp;</label>
                <input type = "text" id = "description" name = "description" placeholder="Add Description"> 
                </div>
                <br>
                <div class = "column">
                <label for="date">Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type = "text" id = "date" name = "date" placeholder="YYYY-MM-DD"> 
                </div>
                <br>
                <div class = "column">
                <label for="sede">Sede &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type = "text" id = "sede" name = "sede" placeholder="Place"> 
                </div>
                <br>
                <div align = "center">
                <input type = "submit" value = "Add Conference" id="submitButton" name = "addConferenceButton">
                </div>
                </div>
                </form>  
                </div>
        </section>
    </main>

     <footer class="backgroundcolour">6
        <div class="footer-text wrapper">
            <hr>
            <strong>Copyrights &copy; 2019 All rights reserved | This web is made with &hearts; by <span style="color: #0000ff">DiazApps </span> </strong>     
        </div>
        
    </footer>
</body>

</html>