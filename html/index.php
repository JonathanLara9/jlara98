<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/animate.css">
    <script src="../js/smooth-scroll.polyfills.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <title>Index</title>
  </head>

  <body>
    <!--Inicio del body de la página-->
    <!--Inicio del header-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark bg-dark fixed-top">
      <!--A este nav se le puede cambiar el color con css o con alguna clase de booststrap-->
      <div class="container-fluid">
        <a href="../html/index.php">
        <img
          src="../img/logoj.png"
          class="img-fluid ml-5 my-1"
          alt="Responsive image"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbar"
          aria-controls="navbar"
          aria-expanded="false"
          aria-label="Menu de navegacion"
        >
          <span class="navbar-toggler-icon text-white"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ml-auto nav-pills">
            <li class="nav-item">
              <a href="../html/galery.php" class="text-white nav-link mr-3 font-weight-bold"
                >Portfolio</a
              >
            </li>
            <li class="nav-item">
              <a href="#seccionAbout" class="text-white nav-link  mr-3 font-weight-bold"
                >About Us</a
              >
            </li>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
      <!--Imagen del header TODO: SE PUEDEN CAMBIAR DE POSICIÓN, Solo no lo saque del div Container-->
     
      
      
      <div class="thumbnail my-5">
      <img
        src="../img/adult-anger-art-black-background-356147.jpg"
        class="img-fluid mb-3"
        alt="Responsive image"
      />
      <div class="caption text-left d-none d-lg-block col-md-3 col-lg-8 wow fadeInUp">
        <h5>Hello, My Name is</h5>
        <div class="nombre-completo">
        <p>Jonathan Lara</p>
      </div>
      <div class="text-ocupation">
        <p>A Creative Freelancer and Web Developer</p>
      </div>
      </div>
      <button type="button" class="btn btn-principal btn-lg d-none d-lg-block col-md-3 col-lg-2 wow fadeInUp">
        <a href="../Jonathan-Lara_CV.pdf" download="CV-Jonathan_Lara" style="text-decoration: none; color: aliceblue;">
          Download CV
        </a></button>



      </div>

    <div class="container">
      <!--Sección de productos, esto se pueden poner muchos más solo hay que duplicar desde el row mt-3 para abajo-->    
      <div class="row my-5">
        <div class="col-12 mb-3 text-center">
        <button type="button" class="btn btn-principal-movil d-noned-sm-block d-md-none wow fadeInUp">
          <a href="../Jonathan-Lara_CV.pdf" download="CV-Jonathan_Lara" style="text-decoration: none; color: aliceblue;">
            Download CV
          </a></button>
        </div>          
        <div class="col-sm-12 col-md-6">
        <div class="col-sm-12 col-md-12">
          <img class="img-fluid shadow" src="../img/presentacion1.jpg" alt="" />
        </div>
      </div>

      <div class="col-sm-12 col-md-6">
        <div class="div col-lg-12 order-lg-2">
          <div class="about-info">
          <h3 class="text-left my-3 alternativecolor" id="seccionAbout">About us</h3>
        </div>
          <p class="mb-5 text-left text-white">
            My name is Jonathan Lara. I'm a Freelance Web Developer based in Costa Rica, and I'm very passionate and dedicated to my work .With 2 years experience as a professional Web Designer, I have acquired the skills necessary to build great and premium websites.

            <br><br> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="row col-lg-12 order-lg-2 justify-content-center">
          <div class="text-center col-2">
            <a class="text-white" href="https://www.instagram.com/jonathan.lara9/" target="_blank">
              <i class="fa fa-instagram fa-2x"></i>
           </a>
         </div>
          <div class="text-center col-2">
            <a class="text-white" href="https://www.facebook.com/jonathan.lara.92/" target="_blank">
              <i class="fa fa-facebook-square fa-2x"></i>
            </a>
          </div>
          <div class="text-center col-2">
            <a class="text-white" href="https://www.behance.net/jonathalaraqu" target="_blank">
              <i class="fa fa-behance-square fa-2x"></i>
           </a>
         </div>
         <div class="text-center col-2">
          <a class="text-white" href="https://t.me/Jonathanlara" target="_blank">
            <i class="fa fa-telegram fa-2x"></i>
         </a>
       </div>
        </div> 
          
          </div>
      </div>

      <div class="gallery-container pt-5">

        <div class="mt-5">
        <h1 class="text-white">Gallery</h1>
      </div>
    
        <p class="page-description text-center">
Some Of My Recent Work</p>
        
        <div class="tz-gallery">
    
            <div class="row">
              
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="../img/zorroBig.jpg">
                        <img class="img-fluid" src="../img/zorroBig.jpg" alt="Coast">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="../img/fbodaBig.jpg">
                        <img class="img-fluid" src="../img/fbodaBig.jpg" alt="Rails">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="../img/dkbig.jpg">
                        <img class="img-fluid" src="../img/dkbig.jpg" alt="Traffic">
                    </a>
                </div>
                <div class="col-12 mb-4 text-center align-self-center">
                <button type="button" class="btn bt-secondary bgalternative btn-lg col-md-3 col-lg-2 wow fadeInUp">
                  <a href="../html/galery.php" style="text-decoration: none; color: aliceblue;" href="#">
                    See more
                  </a></button>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <!-- Footer -->
    <footer class="py-4  bg-dark text-white">
      <div class="container">
        <p class="m-0 text-center text-white small">
          &copy; Create By Jonathan Lara <br> All rights reserved   
        </p>
      </div>
      <!-- /.container -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
  </body>
  <!--Algunas notas: Recuerde que Booststrap generalmente hace todo responsive, y que por cuestiones de orden solo debería existir un container,
aquí esta una página que deja unas cosas que puede usar https://hackerthemes.com/bootstrap-cheatsheet/#col-sm-1 y si no sabe algo ya sabe 
a quien me puede preguntar, esto lo hice antes de terminar entonces espero poder finalizar esto veloz-->
</html>
