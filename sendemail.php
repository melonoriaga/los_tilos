<?php
// NOMBRE
$name = '';
if (isset($_POST['name']) && $_POST['name'] != "") {
    $name = $_POST['name'];
}
//TELEFONO
$phone = '';
if (!empty($_POST['phone'])) {
    $phone = $_POST['phone'];
}
// EMAIL
$email = '';
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
// EMAIL
$mensaje = '';
if (isset($_POST['mensaje'])) {
    $mensaje = $_POST['mensaje'];
}

// ENVIAR INFO POR EMAIL
if  (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['phone']) && !empty($_POST['phone'])) {

    //-----------------EMAIL PICALLEX ---------------------------------
    $email_to = "melonoriaga@gmail.com, analiaalonso7@gmail.com";
    $email_from = "nuevo_contacto_website@lostilos.com";

    $email_subject = "Nuevo contacto";

    $email_message = "Detalles.\n\n";
    $email_message .= "Un usuario desea ser contactado\n\n";
    $email_message .= "Nombre del Solicitante: " . $name . "\n";
    $email_message .= "Email: " . $email . "\n";
    $email_message .= "Telefono: " . $phone . "\n";
    $email_message .= "Mensaje: " . $mensaje . "\n";

    $headers = 'From: ' . $email_from . "\r\n" .
            'Reply-To: ' . $email_from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
    //---------------------------FIN EMAIL -------------------------------
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tyche Properties - Single Property HTML5 Template | Contact Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header">        
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title="Homestate"></a></div>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-location-2"></span></div>
                            <div class="text"><b>Oficina Pórtico:</b><br>Tucumán 615, Las Higueras</div>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-location-2"></span></div>
                            <div class="text"><b>Oficina Río Cuarto:</b><br>Mitre 857</div>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-technology-5"></span></div>
                            <div class="text">(0358) 478 0891<br>154 376 663</div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!--Header-Lower-->
        <div class="header-lower">
            <!--Background Layer-->
            <div class="bg-layer"></div>
            
            
            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="barrio.php">El Barrio</a></li>
                                <li><a href="casas.php">Casas</a></li>
                                <li><a href="imagenes.php">Imágenes</a></li>
                                <li><a href="financiacion.php">Financiación</a></li>
                                <li><a href="financiacion.php">Ventas</a></li>
                                <li><a href="contacto.php">Contacto</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                
                    <!-- <div class="btn-outer"><a href="appointment.html" class="theme-btn visit-btn">Schedule Visit</a></div> -->
                    
                </div>
            </div>
        </div>
        
        
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="Homestate"></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="barrio.php">El Barrio</a></li>
                                <li><a href="casas.php">Casas</a></li>
                                <li><a href="imagenes.php">Imágenes</a></li>
                                <li><a href="financiacion.php">Financiación</a></li>
                                <li><a href="financiacion.php">Ventas</a></li>
                                <li><a href="contacto.php">Contacto</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div><!--End Bounce In Header-->
    </header>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title -->
                <div class="title-column col-md-7 col-sm-6 col-xs-12">
                    <h1>GRACIAS POR CONTACTARSE</h1>
                </div>
            </div>
        </div>
    </section>
    
    
    <div style="color: #292929; font-size: 50px; text-align: center; margin: 100px 30px;">
        <p>Gracias por tu mensaje!</p>
        <p>Pronto nos comunicaremos contigo</p>
    </div>

    <!--Main Footer-->
    <footer class="main-footer">
        <!--Footer Bar-->
        <div class="footer-bar">
            <div class="auto-container">
                <ul>
                    <li><a href="#" class="scroll-to-target" data-target=".main-header"><span class="up-arrow flaticon-arrows-4"></span>Ir arriba</a></li>
                </ul>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="centered-content">
                    <div class="logo"><a href="index.html"><img src="images/logo-2.png" alt=""></a></div>
                </div>
            </div>
        </div>
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/validate.js"></script>
<script src="js/owl.js"></script>
<script src="js/map-script.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>