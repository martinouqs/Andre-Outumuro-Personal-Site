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
	<title>Andre Outumuro - Axenda</title>
</head>

	<body id="otherBodies">
    <strong>
      <nav class="navbar navbar-expand-lg ms-3">
        <div id="wholeMenu" class="container-fluid ">
          <div id="menuHeader">
           <!-- LOGO/NAME OF THE PAGE-->
           <h1 class="display-4" ><a id="nameLogo" href="index.html" class="text-decoration-none font-weight-bold">AndréOutumuro</a></h1>
   
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
                Galeria
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="imaxes.php">Imaxes</a></li>
                <li><a class="dropdown-item" href="videos.php">Videos</a></li>
              </ul>
            </li>

             <!-- 5TH OPTION -->
            <li class="nav-item">
              <a id="menuElement" class="nav-link" href="contacto.php">Contacto</a>
            </li>

          <!-- LANGUAGE SELECTION -->
            <ul class="navbar-nav mb-2 mb-lg-0 me-4">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src = "/assets/icons/globe.png" alt="LanguageWorld" width="27em" height="27em"/>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?lang=es" class="dropdown-item" value="es">ES</a></li>
                  <li><a href="index.php?lang=gal" class="dropdown-item" value="gal">GAL</a></li>
                  <li><a href="index.php?lang=en" class="dropdown-item" value="en">EN</a></li>
                </ul>
              </li>
            </ul>
          </ul>
          </div>
        </div>
      </nav>




      <div id="eventsContainer" class="container-fluid row">
        <h2 id="miniTitleEvents" class="fw-bold mb-5"> Axenda </h2>
        <div class="col-12 mx-auto">
          <h2><strong> XANEIRO 2023</strong></h2>
            <ul class="timeline">
                <li class="timeline-item row row-cols-auto rounded mt-3 p-4">
                    <div class="col col-sm-1" >
                      <img id="eventDay" alt="imageDayNumber" src="/assets/icons/n16.png">
                    </div>
                    <div class="col col-sm-4" id="location">
                        <div id="locationImg">
                            <img class="img-responsive img-fluid" src = "/assets/icons/location.png" alt="" width="25em" height=25em"/>
                        </div>
                        <div id="locationTxt">
                          <div id="placeLocation">
                            <h5 id="responsiveTitle" class="text-uppercase"><strong>Café Latino, </strong></h5>
                          </div>
                          <div id="concelloLocation">
                            <h5 id="responsiveTitle" class="text-uppercase"><strong>Ourense</strong></h5>
                          </div>
                        </div>
                    </div>
                      <div id="group" class="col col-sm-4">
                        <div id="groupImg">
                          <img class="img-responsive img-fluid mb-2" src = "/assets/icons/group.png" alt="" width="25em" height=25em"/>
                        </div>
                        <div id="groupTxt">
                          <h5 id="responsiveTitle" class="text-uppercase"><strong> Alfonso Medela Trío</strong></h5>
                        </div>
                      </div>
                      <div id="eventsTime" class="col col-sm-2">
                        <div id="eventsTimeIcon">
                          <img class="img-responsive img-fluid mb-1" src = "/assets/icons/clock.png" alt="" width="25em" height=25em"/>
                        </div>
                        <div id="eventsTimeTxt">
                          <h5 id="responsiveTitle" class="text-uppercase"><strong> 22:30</strong></h5>
                        </div>
                      </div>
                </li>
            </ul>

      </div>
      <div class="col-12 mx-auto">
        <h2><strong> FEBREIRO 2023</strong></h2>
          <ul class="timeline">
              
            <li class="timeline-item row row-cols-auto rounded mt-3 p-4">
              <div class="col col-sm-1" >
                <img id="eventDay" alt="imageDayNumber" src="/assets/icons/n21.png">
              </div>
              <div class="col col-sm-4" id="location">
                  <div id="locationImg">
                      <img class="img-responsive img-fluid" src = "/assets/icons/location.png" alt="" width="25em" height=25em"/>
                  </div>
                  <div id="locationTxt">
                    <div id="placeLocation">
                      <h5 id="responsiveTitle" class="text-uppercase"><strong>A Valenzá, </strong></h5>
                    </div>
                    <div id="concelloLocation">
                      <h5 id="responsiveTitle" class="text-uppercase"><strong>Barbadás</strong></h5>
                    </div>
                  </div>
              </div>
                <div id="group" class="col col-sm-4">
                  <div id="groupImg">
                    <img class="img-responsive img-fluid mb-2" src = "/assets/icons/group.png" alt="" width="25em" height=25em"/>
                  </div>
                  <div id="groupTxt">
                    <h5 id="responsiveTitle" class="text-uppercase"><strong> BCB</strong></h5>
                  </div>
                </div>
                <div id="eventsTime" class="col col-sm-2">
                  <div id="eventsTimeIcon">
                    <img class="img-responsive img-fluid mb-1" src = "/assets/icons/clock.png" alt="" width="25em" height=25em"/>
                  </div>
                  <div id="eventsTimeTxt">
                    <h5 id="responsiveTitle" class="text-uppercase"><strong> 17:00</strong></h5>
                  </div>
                </div>

          </li>
          <li class="timeline-item row row-cols-auto rounded mt-3 p-4">
            <div class="col col-sm-1" >
              <img id="eventDay" alt="imageDayNumber" src="/assets/icons/n21.png">
            </div>
            <div class="col col-sm-4" id="location">
                <div id="locationImg">
                    <img class="img-responsive img-fluid" src = "/assets/icons/location.png" alt="" width="25em" height=25em"/>
                </div>
                <div id="locationTxt">
                  <div id="placeLocation">
                    <h5 id="responsiveTitle" class="text-uppercase"><strong>Casco Vello, </strong></h5>
                  </div>
                  <div id="concelloLocation">
                    <h5 id="responsiveTitle" class="text-uppercase"><strong>Ourense</strong></h5>
                  </div>
                </div>
            </div>
              <div id="group" class="col col-sm-4">
                <div id="groupImg">
                  <img class="img-responsive img-fluid mb-2" src = "/assets/icons/group.png" alt="" width="25em" height=25em"/>
                </div>
                <div id="groupTxt">
                  <h5 id="responsiveTitle" class="text-uppercase"><strong> BCB</strong></h5>
                </div>
              </div>
              <div id="eventsTime" class="col col-sm-2">
                <div id="eventsTimeIcon">
                  <img class="img-responsive img-fluid mb-1" src = "/assets/icons/clock.png" alt="" width="25em" height=25em"/>
                </div>
                <div id="eventsTimeTxt">
                  <h5 id="responsiveTitle" class="text-uppercase"><strong> 21:00</strong></h5>
                </div>
              </div>

        </li>
          </ul>

    </div>
</div>
</div>
      

    <footer>

      <a class="btn btn-floating p-1" href="https://es-es.facebook.com/andre.outumuroquintas" role="button"
      ><img class="img-responsive img-fluid" src = "/assets/icons/facebook.png" alt="LanguageWorld" width="35em" height="35em"/></a>

      <a class="btn btn-floating p-1" href="https://www.youtube.com/channel/UCMr8iUoOJ2Dwhs5GgsLQtZw" role="button"
      ><img class="img-responsive img-fluid" src = "/assets/icons/youtube.png" alt="youtube img" width="40em"height="40em"/></a> 

      <a class="btn btn-floating p-1" href="https://www.instagram.com/andre_outumuro/?hl=es" role="button"
      ><img class="img-responsive img-fluid" src = "/assets/icons/instagram.png" alt="instagram img" width="35em" height="35em"/></a>

     <a class="btn btn-floating p-1" href="https://www.linkedin.com/in/andr%C3%A9-outumuro-quintas-04450b109/" role="button"
      ><img class="img-responsive img-fluid" src = "/assets/icons/linkedin.png" alt="linkedin img" width="35em" height=35em"/></a>
  
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	</body>
</html>

