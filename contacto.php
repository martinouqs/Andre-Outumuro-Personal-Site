<?php 

require 'lang.php';

?>
<!DOCTYPE html>
<html lang="gal">
		<!--Metadata-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href='https://fonts.googleapis.com/css?family=Poiret One' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script type="text/javascript" src="js/script.js" defer></script>
  <link rel="icon" href="/assets//icons/saxoTitle.png" type="image/icon type">
	<title>Andre Outumuro - Inicio</title>
</head>

	<body id="contactBody">
    <strong>
      <nav class="navbar navbar-expand-lg ms-3">
        <div id="wholeMenu" class="container-fluid ">
          <div id="menuHeader">
           <!-- LOGO/NAME OF THE PAGE-->
           <h1 class="display-4" ><a id="nameLogo" href="index.php" class="text-decoration-none font-weight-bold">AndréOutumuro</a></h1>
   
           <!--BURGER MENU -->
          
            <button class="navbar-toggler second-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <div class="animated-icon2"><span></span><span></span><span></span><span></span></div>
            </button>
         </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
            <!-- MENU OPTIONS -->
  
            <ul id="menuAfterLogo" class="navbar-nav me-auto mb-2 px-5 mb-lg-0 float-end mt-4" >

                <!-- 1ST OPTION   -->

                  <li  class="nav-item px-1" >
                    <a id="menuElement" class="nav-link"  href="index.php"><?= __('Home')?></a>
                  </li>

                <!-- 2ND OPTION   -->

                  <li class="nav-item">
                    <a id="menuElement" class="nav-link" href="biografia.php"><?= __('About')?></a>
                  </li>

                <!-- 3RD OPTION -->

                <li  class="nav-item">
                  <a id="menuElement" class="nav-link" href="axenda.php"><?= __('Calendar')?></a>
                </li>

                <!-- 4TH OPTION -->
                  <li  class="nav-item dropdown">
                    <a id="menuElement" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= __('Gallery')?>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="imaxes.php"><?= __('Image')?></a></li>
                      <li><a class="dropdown-item" href="videos.php"><?= __('Video')?></a></li>
                    </ul>
                  </li>

                  <!-- 5TH OPTION -->
                  <li class="nav-item">
                    <a id="menuElement" class="nav-link" href="contacto.php"><?= __('Contact')?></a>
                  </li>

                <!-- LANGUAGE SELECTION -->
                  <ul class="navbar-nav mb-2 mb-lg-0 me-4">
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src = "/assets/icons/globe.png" alt="LanguageWorld" width="27em" height="27em"/>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="contacto.php?lang=es" class="dropdown-item" value="es">ES</a></li>
                        <li><a href="contacto.php?lang=gal" class="dropdown-item" value="gal">GAL</a></li>
                        <li><a href="contacto.php?lang=en" class="dropdown-item" value="en">EN</a></li>
                      </ul>
                    </li>
                  </ul>
                </ul>
          </div>
        </div>
      </nav>
     

      <div id="contactContainer" class="container-fluid mt-5 mb-5">
        <h2 id="miniTitleContact" class="fw-bold mb-5
        "><?= __('ContactTitle')?></h2>

          <form id="form" action="PHP/send.php" class="row form" method="POST">

            <div id="formContent">
                          
              <div id="firstLineInputs" class="row">
                <div class="col-5">
                  <input id="nombre" name="nombre" type="text" class="form-control" placeholder="<?= __('NamePlaceHolder')?>">
                </div>
                <div class="col-7">
                  <input id="email" name="email" type="email" class="form-control" placeholder="<?= __('MailPlaceHolder')?>">
                </div>
              </div>

              <div class="col-12 mt-4">
                <textarea id="mensaje" name="mensaje" cols="50" rows="10" placeholder="<?= __('MsgPlaceHolder')?>"></textarea>
              </div>
                
              <div id="sendContact" class="col">
                <button id="sendContactButton" type="submit" class="btn btn-light mt-4"><?= __('SendButton')?></button>
              </div>

            </div>
            
          </form>
          <div id="messageContact" class="mt-4">
            <h3 id="mailContact"> <img id="imgMailContact" alt="MailIcon" width="25em" height="25em" src="/assets/icons/mail.png"> <strong>info@andreoutumuro.com</strong></h3>
          </div>

          <div id="socialsContact" class="mt-3">
   
            <a class="btn btn-floating p-1" href="https://es-es.facebook.com/andre.outumuroquintas" role="button"
              ><img class="img-responsive img-fluid" src = "/assets/icons/facebook.png" alt="LanguageWorld" width="35em" height="35em"/></i></a>
        
              <a class="btn btn-floating p-1" href="https://www.youtube.com/channel/UCMr8iUoOJ2Dwhs5GgsLQtZw" role="button"
              ><img class="img-responsive img-fluid" src = "/assets/icons/youtube.png" alt="youtube img" width="40em"height="40em"/></a> 
        
              <a class="btn btn-floating p-1" href="https://www.instagram.com/andre_outumuro/?hl=es" role="button"
              ><img class="img-responsive img-fluid" src = "/assets/icons/instagram.png" alt="instagram img" width="35em" height="35em"/></a>
        
            <a class="btn btn-floating p-1" href="https://www.linkedin.com/in/andr%C3%A9-outumuro-quintas-04450b109/" role="button"
              ><img class="img-responsive img-fluid" src = "/assets/icons/linkedin.png" alt="linkedin img" width="35em" height=35em"/></i></a>
    
        </div>
        
      </div>
    
    <footer>
  
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	</body>
</html>

