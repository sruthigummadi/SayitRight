<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> LEANEVENT  </title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="http://kaushikreddyguntaka.uta.cloud/project2/css/leanevent.css">

	<style>

			.wrapper{
				width: 80%;
				margin: 0 auto;
			}

			#hovCol li:hover a {
				color: #FFC300;	
			}

			* {
			  box-sizing: border-box;
			}

			.column {
			  float: left;
			  width: 25%;
			  padding: 5px;
			}

			/* Clearfix (clear floats) */
			.row::after {
			  content: "";
			  clear: both;
			  display: table;
			}

			#demoBox{
			  background-color: #FFC300 ;
		 	  padding: 20px ;
			  border: none ;
			}

			#box{
              width: 25%;
			}

			#txtBtn{
		   	  padding: 10px;
			  font-size: 17px;
			  border: none;
			  float: left;
			  width: 75%;
			  background: #f1f1f1;
			  border-top-left-radius: 30px 20px;
			  border-bottom-left-radius: 30px 20px;
			}

			#subsBtn{
			  float: left;
			  width: 25%;
			  padding: 10px;
			  background: black;
			  color: white;
			  font-size: 17px;
			  border: none;
			  border-left: none;
			  cursor: pointer;
			  border-top-right-radius: 30px 20px;
			  border-bottom-right-radius: 30px 20px;
			}

			#myBtn {
			  display: none;
			  position: fixed;
			  bottom: 20px;
			  right: 30px;
			  z-index: 99;
			  font-size: 18px;
			  border: none;
			  outline: none;
			  background-color: #FFC300;
			  color: white;
			  cursor: pointer;
			  padding: 15px;
			  border-radius: 4px;
			}

			/*#myBtn:hover {
			  background-color: #555;
			}*/

			/*For Web responsive*/
			@media only screen and (min-width: 600px) {
			  /* For tablets: */
			  .col-s-1 {width: 8.33%;}
			  .col-s-2 {width: 16.66%;}
			  .col-s-3 {width: 25%;}
			  .col-s-4 {width: 33.33%;}
			  .col-s-5 {width: 41.66%;}
			  .col-s-6 {width: 50%;}
			  .col-s-7 {width: 58.33%;}
			  .col-s-8 {width: 66.66%;}
			  .col-s-9 {width: 75%;}
			  .col-s-10 {width: 83.33%;}
			  .col-s-11 {width: 91.66%;}
			  .col-s-12 {width: 100%;}
			}
			@media only screen and (min-width: 768px) {
			  /* For desktop: */
			  .col-1 {width: 8.33%;}
			  .col-2 {width: 16.66%;}
			  .col-3 {width: 25%;}
			  .col-4 {width: 33.33%;}
			  .col-5 {width: 41.66%;}
			  .col-6 {width: 50%;}
			  .col-7 {width: 58.33%;}
			  .col-8 {width: 66.66%;}
			  .col-9 {width: 75%;}
			  .col-10 {width: 83.33%;}
			  .col-11 {width: 91.66%;}
			  .col-12 {width: 100%;}
			}

			i{
				margin-right: 1em;
			}

	</style>
</head>

<body>
<div class = "wrapper">
<nav class="navbar navbar-default">
<div class = "container">
	<div class="header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"><img src="http://kaushikreddyguntaka.uta.cloud/project2/images/imagenes/favicon.ico" alt="logo" height="25" width="25" hspace = "10" style="float: left; "/><font size = "2"><b>LEANEVENTOS</b></font></a>
	</div>

	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<nav id = "hovCol">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://kaushikreddyguntaka.uta.cloud/project2/html/index.php">Incio</a></li>
                <li><a href="http://kaushikreddyguntaka.uta.cloud/project2/html/quienes.php">Quienes Somos </a></li>
                <li><a href="http://kaushikreddyguntaka.uta.cloud">Blog</a></li>
                <li><a href="http://kaushikreddyguntaka.uta.cloud/project2/html/registrate.php">Registrate</a></li>
                <li><a href="http://kaushikreddyguntaka.uta.cloud/project2/html/contacto.php">Contacto</a></li>
                <li><a href="http://kaushikreddyguntaka.uta.cloud/project2/html/iniciar_sesion.php">Iniciar Sesion</a></li>
                <li><a href="http://kaushikreddyguntaka.uta.cloud/project2/html/comprar_boletos.php">Comprar Boletos</a></li>
            </ul>
		</nav>
	</div>
</div>	
</nav>

<div>
	
	<img src="http://kaushikreddyguntaka.uta.cloud/project2/images/imagenes/edit.jpg" width="100%" height="500" />
	
</div>

<br><br><br>

	<div class = "container" align = "center">
		<p><b><font size = "3" color = "#ffdb58">----------</font><font size = "3">  ¿QUÉ HACEMOS?  </font><font size = "3" color = "#ffdb58">----------</font></b></p>
	</div>
	<div class = "container" align = "center">
		<p>La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones concretas, a nuestros conciudadanos<br>en Venezuela ante la grave escasez de medicinas e insumos médicos en que se encuentra el país. Nuestra misión consiste<br>en recolectar ayuda médico sanitaria en delegaciones en España y, a través de agentes de transporte, llevarlos a Venezuela <br>para que otras asociaciones se encarguen de su distribución. De esta manera aportamos nuestro granito de arena<br>ayudando a llevar asistencia humanitaria a Venezuela. Somos una asociación sin fines de lucro, dedicada a la defensa de <br> los Derechos Humanos.</p>
	</div>

	<br><br><br>

	<div class = "container-fluid">
		<img src="http://kaushikreddyguntaka.uta.cloud/project2/images/imagenes/edit2.jpg" width="100%" height="450" />
	</div>

	<br><br><br>

	<div class = "container" align = "center">
		<p><b><font size = "3" color = "#ffdb58">----------</font><font size = "3">  ALIADOS  </font><font size = "3" color = "#ffdb58">----------</font></b></p>
	</div>

	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

	<br><br><br>

	<div class = "container">
		<div class="row">
		  <div class="column col-3 col-s-3">
		    <img src="http://kaushikreddyguntaka.uta.cloud/project2/images/logo1.jpg" alt="logo1" style="width:100%">
		  </div>
		  <div class="column col-3 col-s-3">
		    <img src="http://kaushikreddyguntaka.uta.cloud/project2/images/logo2.jpg" alt="logo2" style="width:100%">
		  </div>
		  <div class="column col-3 col-s-3">
		    <img src="http://kaushikreddyguntaka.uta.cloud/project2/images/logo3.jpg" alt="logo3" style="width:100%">
		  </div>
		  <div class="column col-3 col-s-3">
		    <img src="http://kaushikreddyguntaka.uta.cloud/project2/images/logo4.jpg" alt="logo4" style="width:100%">
		  </div>
		</div>
	</div>

	<br><br><br>

	<div class = "container-fluid" id = "demoBox">
		<div class = "row">
			<div class = "column" id = "box">
			</div>
			<div class = "column" id = "box">
				<p align = "center">
					<i class="far fa-paper-plane fa-2x"></i>
					<font size = ".70em"><b>  Registrese para recibir un <br> boletin</b></font>
				</p>
			</div>
					<form name = "myForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post"> 

			<div class = "column" id = "box">
				<input type = "text" id = "txtBtn" name="email" placeholder = "Introduce tu correo electronico">
				<input type = "submit" name="submit" id = "subsBtn" value = "Suscribir">
			</div>
		</form>
			<div class = "column" id = "box">
			</div>
	    </div>
	</div>

	<br><br>

	<div class = "container" align = "center">
		<p><b>LEAN EN LAS REDES SOCIALES</b></p>
	</div>
	<br>
	<div class = "container" align="center">
		<i class="fab fa-twitter fa-lg" style = "color: #FFC300";></i>
		<i class="fab fa-facebook-f fa-lg" style = "color: #FFC300";></i>
		<i class="fab fa-instagram fa-lg" style = "color: #FFC300";></i>
	</div>

	<br><br><br><br><br>
<?php 
if(isset($_POST['submit'])){
    $to = $_POST['email']; // this is your Email address
    $from = "lean_eventos@gmail.com";// this is the sender's Email address
    $subject = "SUBSCRIPTION WITH LEANEVENTOS";
    $message = "Hello\nThankyou for subscribing with leaneventos.Hope you enjoy using our website\nThankyou";
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you.";
    
    }
?>

<div class = "container" align = "center">
	<footer class="footer">
		<p class="text-muted">Copyright @2019 All rights reserved | This web is made with ♡ by <a href="#" font color = "#ffdb58">DiazApps</a></p>
	</footer>
</div>
<script type="text/javascript" src="js/abc.js"></script>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</div>
</body>
</html>
