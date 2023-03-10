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

<body id="otherBodies">
  <strong>
    <nav class="navbar navbar-expand-lg ms-3">
      <div id="wholeMenu" class="container-fluid ">
       <div id="menuHeader">
        <!-- LOGO/NAME OF THE PAGE-->
        <h1 class="display-4" ><a id="nameLogo" href="index.php" class="text-decoration-none font-weight-bold">AndrĂ©Outumuro</a></h1>

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
                <a id="menuElement" class="nav-link" href="index.php"><?= __('Home')?></a>
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
                    <li><a href="imaxes.php?lang=es" class="dropdown-item">ES</a></li>
                    <li><a href="imaxes.php?lang=en" class="dropdown-item">EN</a></li>
                    <li><a href="imaxes.php?lang=gal" class="dropdown-item">GAL</a></li>
                  </ul>
                </li>
              </ul>
            </ul>
          </div>
        </div>
      </nav>

<!-- CAROUSEL GALLERY -->
<div id="galleryContainer" class="container-fluid">
  
  <h2 id="miniTitleGallery" class="fw-bold" ><?= __('GalleryTitle')?></h2>
  
  <main id="rowGallery" class="row">
      <div id="galleryCol" class="col-4 col-md-3 mb-4 " >
          <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="0">
              <div class="card">
                  <img src="/assets/fotos/1.jpg" id="imgallery"   class="d-block img-fluid rounded" alt="">
              </div>
          </a>
      </div>
      <div id="galleryCol" class="col-4 col-md-3 mb-4">
          <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="1">
              <div class="card">
                  <img src="/assets/fotos/2.JPG" id="imgallery" class="d-block img-fluid rounded" alt="...">
              </div>
          </a>
      </div>
      <div id="galleryCol" class="col-4 col-md-3 mb-4 ">
          <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="2">
              <div class="card">
                  <img src="/assets/fotos/3.jpg" id="imgallery" class="d-block img-fluid rounded" alt="...">
              </div>
          </a>
      </div>
      <div id="galleryCol" class="col-4 col-md-3 mb-4 ">
        <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="3">
            <div class="card">
                <img src="/assets/fotos/4.jpg" id="imgallery" class="d-block img-fluid rounded" alt="...">
            </div>
        </a>
    </div>
    <div id="galleryCol" class="col-4 col-md-3 mb-4">
      <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="4">
          <div class="card">
              <img src="/assets/fotos/5.jpg" id="imgallery" class="d-block img-fluid rounded" alt="...">
          </div>
      </a>
  </div>
  <div id="galleryCol" class="col-4 col-md-3  mb-4">
    <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="5">
        <div class="card">
            <img src="/assets/fotos/6.jpg" id="imgallery" class="d-block img-fluid rounded" alt="...">
        </div>
    </a>
</div>
<div id="galleryCol" class="col-4 col-md-3 mb-4">
  <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="6">
      <div class="card">
          <img src="/assets/fotos/7.jpg" id="imgallery" class="d-block img-fluid rounded" alt="...">
      </div>
  </a>
</div>
<div id="galleryCol" class="col-4 col-md-3 mb-4">
<a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="7">
    <div class="card">
        <img src="/assets/fotos/8.jpg" id="imgallery" class="d-block img-fluid rounded" alt="...">
    </div>
</a>
</div>
<div id="galleryCol" class="col-4 col-md-3 mb-4">
<a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="8">
  <div class="card">
      <img src="/assets/fotos/9.jpg" id="imgallery" class="d-block img-fluid" alt="...">
  </div>
</a>
</div>
<div id="galleryCol" class="col-4 col-md-3 mb-4">
<a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="9">
  <div class="card">
      <img src="/assets/fotos/10.jpg" id="imgallery" class="d-block img-fluid" alt="...">
  </div>
</a>
</div>
<div id="galleryCol" class="col-4 col-md-3 mb-4">
<a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="10">
  <div class="card">
      <img src="/assets/fotos/11.jpg" id="imgallery" class="d-block img-fluid rounded" alt="...">
  </div>
</a>
</div>
<div id="galleryCol" class="col-4 col-md-3 mb-4">
<a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="11">
  <div class="card">
      <img src="/assets/fotos/12.jpg" id="imgallery" class="d-block img-fluid rounded" alt="...">
  </div>
</a>
</div>
<div id="galleryCol" class="col-4 col-md-3 mb-4">
<a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="12">
  <div class="card">
      <img src="/assets/fotos/13.jpg" id="imgallery" class="d-block img-fluid rounded" alt="...">
  </div>
</a>
</div>
<div id="galleryCol" class="col-4 col-md-3 mb-4">
<a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="13">
  <div class="card">
      <img src="/assets/fotos/14.jpg" id="imgallery" class="d-block img-fluid rounded" alt="...">
  </div>
</a>
</div>
<div id="galleryCol" class="col-4 col-md-3 mb-4">
<a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="14">
  <div class="card">
      <img src="/assets/fotos/15.jpg" id="imgallery" class="d-block img-fluid rounded" alt="...">
  </div>
</a>
</div>
<div id="galleryCol" class="col-4 col-md-3 mb-4">
<a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-slide-to="15">
  <div class="card">
      <img src="/assets/fotos/16.jpg" id="imgallery" class="d-block img-fluid rounded" alt="...">
  </div>
</a>
</div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                      <div class="carousel-inner overflow-hidden">
                          <div class="carousel-item active">
                              <img src="/assets/fotos/1.jpg" class="d-block w-100" alt="">
                              <h5 class="text-dark text-center"><?= __('D1')?></h5>
                          </div>
                          <div class="carousel-item">
                              <img src="/assets/fotos/2.JPG" class="d-block w-100 " alt="...">
                              <h5 class="text-dark text-center"><?= __('D2')?></h5>
                          </div>
                          <div class="carousel-item">
                              <img src="/assets/fotos/3.jpg" class="d-block w-100" alt="...">
                              <h5 class="text-dark text-center"><?= __('D3')?></h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/4.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D4')?></h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/5.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D5')?></h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/6.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D6')?></h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/7.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D7')?></h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/8.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D8')?></h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/9.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D9')?></h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/10.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D10')?>
                            </h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/11.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D11')?></h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/12.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D12')?></h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/13.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D13')?></h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/14.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D14')?></h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/15.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D15')?></h5>
                          </div>
                          <div class="carousel-item">
                            <img src="/assets/fotos/16.jpg" class="d-block w-100" alt="...">
                            <h5 class="text-dark text-center"><?= __('D16')?></h5> 
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </main>
</div>

    <footer>

      <a class="btn btn-floating p-1" href="https://es-es.facebook.com/andre.outumuroquintas" role="button"
      ><img class="img-responsive img-fluid" src = "/assets/icons/facebook.png" alt="LanguageWorld" width="35em" height="35em"/></i></a>

      <a class="btn btn-floating p-1" href="https://www.youtube.com/channel/UCMr8iUoOJ2Dwhs5GgsLQtZw" role="button"
      ><img class="img-responsive img-fluid" src = "/assets/icons/youtube.png" alt="youtube img" width="40em"height="40em"/></a> 

      <a class="btn btn-floating p-1" href="https://www.instagram.com/andre_outumuro/?hl=es" role="button"
      ><img class="img-responsive img-fluid" src = "/assets/icons/instagram.png" alt="instagram img" width="35em" height="35em"/></a>

     <a class="btn btn-floating p-1" href="https://www.linkedin.com/in/andr%C3%A9-outumuro-quintas-04450b109/" role="button"
      ><img class="img-responsive img-fluid" src = "/assets/icons/linkedin.png" alt="linkedin img" width="35em" height=35em"/></i></a>
  
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	</body>
</html>
