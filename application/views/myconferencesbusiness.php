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
                        <a class="link" href="DashboardBusinessForm">Home</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="ConferencesBusinessForm">Conferences</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="EventsBusinessForm">Events</a>
                    </li>
                    <li class="thing  active">
                        <a class="link" href="MyConferencesBusinessForm">My Conferences</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="MyEventsBusinessForm">My Events</a>
                    </li>
                    <li class="thing">
                        <a class="link" href="SettingBusinessForm">Settings</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="conferencepart">
<form action="/WDM_project5/index.php/MyConferencesBusinessForm" method="POST">
<table class = "container">
  <tr>
    <th align = "center">Conferences</th>
    <th align = "center">Description</th>
    <th align = "center">Date</th>
    <th align = "center">Sede</th>
    <th align = "center">Delete</th>
  </tr>

  <?php
    $events = $this->Common_model->mycbusiness();
    foreach($events->result_array() as $row)
    {
        echo "<tr>";
        echo '<td style="text-align:center; font-family: sans-serif; font-size:11px; width:20%;">'.$row['conferences'].'</td>';
        echo '<td style="text-align:center; font-family: sans-serif; font-size:11px; width:20%;">'.$row['description'].'</td>';
        echo '<td style="text-align:center; font-family: sans-serif; font-size:11px; width:20%;">'.$row['date'].'</td>';
        echo '<td style="text-align:center; font-family: sans-serif; font-size:11px; width:20%;">'.$row['sede'].'</td>';
        echo '<td><button name="delete" class="gradient btn" value="'.$row['conferences'].'" id = "deleteButton"
            border:none;">Delete Button</span></button></td>';
        echo "</tr>";
    }
?>

</table>
</form>
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