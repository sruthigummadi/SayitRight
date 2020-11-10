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
                        <a class="link active" href="DashboardIndividualForm">Home</a>
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
                        <a class="link" href="SettingIndividualForm">Settings</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main>

        <section class="dashboardpart">
            <div class="wrapper">
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('DashboardIndividualForm'); ?>
                <div class="row">
                    <div class="column-25">
                        <div class="activitystatus">
                            <div class="content clearfix">
                                <div class="icon pull-left">
                                    <i class="fas fa-globe-americas"></i>
                                </div>
                                <div class="col-right pull-right">
                                    <span class="digit">26</span>
                                    activities performed
                                </div>
                            </div>
                            <div class="footer">
                                Total Made
                            </div>
    
                        </div>
                    </div>
    
                    <div class="column-25">
                        <div class="activitystatus green">
                            <div class="content clearfix">
                                <div class="icon pull-left">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="col-right pull-right">
                                    <span class="digit">18</span>
                                    activities performed
                                </div>
                            </div>
                            <div class="footer">
                                Total Made
                            </div>
    
                        </div>
                    </div>
    
                    <div class="column-25">
                        <div class="activitystatus orange">
                            <div class="content clearfix">
                                <div class="icon pull-left">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="col-right pull-right">
                                    <span class="digit">8</span>
                                    activities performed
                                </div>
                            </div>
                            <div class="footer">
                                Total Made
                            </div>
    
                        </div>
                    </div>
    
                    <div class="column-25">
                        <div class="activitystatus gray">
                            <div class="content clearfix">
                                <div class="icon pull-left">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="col-right pull-right">
                                    <span class="digit">14</span>
                                    activities performed
                                </div>
                            </div>
                            <div class="footer">
                                Total Made
                            </div>
    
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="column-25">
                        <div class="activitycard blue">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Primary card title</span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
    
                    <div class="column-25">
                        <div class="activitycard gray">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Secondary card title</span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
    
                    <div class="column-25">
                        <div class="activitycard">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Success cord title</span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
    
                    <div class="column-25">
                        <div class="activitycard red">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Danger card title </span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="column-25">
                        <div class="activitycard yellow">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Warning card title </span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
    
                    <div class="column-25">
                        <div class="activitycard lblue">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Info card title </span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
    
                    <div class="column-25">
                        <div class="activitycard white">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Light card title </span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
                    </div>
    
                    <div class="column-25">
                        <div class="activitycard black">
                            <div class="header">
                                Header
                            </div>
                            <div class="content">
                                <span>Dark card title</span>
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </div>
                        </div>
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