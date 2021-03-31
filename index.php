<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/5c3cdba868.js" crossorigin="anonymous"></script>
        <script src="becool.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>BeCool Cooking</title>
    </head>
<body>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-6">Nouveau dans votre région <img src="images/becool-logo-white.png" alt="BeCool Cooking" class="logo"></h1>
          <p class="lead font-weight-bold">Un nouveau lieu de rencontre, un nouveau lieu où bien manger en toute décontraction...</p>
        </div>
    </div>
    <div class="container">
        <!-- logo & navigation-->
        <?php include("logoNav.php"); ?>

        <!-- content -->
        <main>
            <section class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="carousel/carousel-01.jpg" class="d-block w-100" alt="Ambiance BeCool Cooking">
                        </div>
                        <div class="carousel-item">
                            <img src="carousel/carousel-02.jpg" class="d-block w-100" alt="Ambiance BeCool Cooking">
                        </div>
                        <div class="carousel-item">
                            <img src="carousel/carousel-03.jpg" class="d-block w-100" alt="Ambiance BeCool Cooking">
                        </div>
                        <div class="carousel-item">
                            <img src="carousel/carousel-04.jpg" class="d-block w-100" alt="Ambiance BeCool Cooking">
                        </div>
                        <div class="carousel-item">
                            <img src="carousel/carousel-05.jpg" class="d-block w-100" alt="Ambiance BeCool Cooking">
                        </div>
                        <div class="carousel-item">
                            <img src="carousel/carousel-06.jpg" class="d-block w-100" alt="Ambiance BeCool Cooking">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
            <section class="row my-5">
                <aside class="col-4 asidehide"><img src="images/restaurant.jpg" alt="Homard BeCool Cooking" class="rounded img-fluid"></aside>
                <section class="col text-justify">
                    <h3>Resto-Bar "BeCool Cooking"...<br>Sentez-vous comme chez vous !</h3>
                    <p class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin libero nunc consequat interdum varius sit amet mattis. Nulla facilisi etiam dignissim diam quis. Ultricies leo integer malesuada nunc vel risus.<br>
                    Bibendum arcu vitae elementum curabitur vitae. Non pulvinar neque laoreet suspendisse interdum consectetur. Sit amet consectetur adipiscing elit. Turpis massa tincidunt dui ut. Iaculis nunc sed augue lacus viverra. Eu non diam phasellus vestibulum lorem sed.</p>
                    <p>Dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in. Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi. Urna cursus eget nunc scelerisque viverra mauris in. Commodo elit at imperdiet dui accumsan sit amet.</p>
                </section>
            </section>
        </main>

        <!-- footer -->
        <?php include("footer.php"); ?>
        
    </section>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>