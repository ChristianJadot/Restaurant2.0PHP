<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/5c3cdba868.js" crossorigin="anonymous"></script>
        <script src="becool.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>BeCool Cooking - Menu</title>
    </head>
<body>
    <div class="container">
        <!-- logo & navigation-->
        <?php include("logoNav.php"); ?>

        <!-- content -->
        <main>
            <section class="row">
                <balise id="top"></balise>
                <section class="col">
                    <img src="images/lacarte-luxury-table.jpg" alt="La carte chez BeCool Cooking">
                </section>
            </section>
            <section class="row">
                <section class="col">
                    <ul class="nav justify-content-center align-content-center">
                        <li class="nav-item"><a class="nav-link" href="#entrees">Entrées</a></li>
                        <li class="nav-item"><a class="nav-link" href="#plats">Plats</a></li>
                        <li class="nav-item"><a class="nav-link" href="#desserts">Desserts</a> </li>
                        <li class="nav-item"><a class="nav-link" href="#vins">Vins</a></li>
                    </ul>
                </section>
            </section>
            <section class="row mb-5 menu">
                <section class="row px-5 entrees">
                    <balise id="entrees"></balise>
                    <section class="col-12 col-md-12 mb-2 text-center">
                        <h4>Entrées</h4>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Croquettes de crevettes grises</h5>
                        <p class="ligr">Avec sa garniture de persil frit</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">12,00€/2p.</p>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Croquettes au fromage <span class="badge badge-info">Nouvelle recette</span></h5>
                        <p class="ligr">Au vieux fromage d'abbaye</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">9,00€/2p.</p>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Scampis à l'ail</h5>
                        <p class="ligr">Flambés au cognac</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">16,00€</p>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Calamars frits tartare</h5>
                        <p class="ligr">8 pièces et citron frais</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">16,00€</p>
                    </section>
                </section>
                <section class="row px-5 plats">
                    <balise id="plats"></balise>
                    <section class="col-12 col-md-12 mb-2 text-center">
                        <h4>Plats</h4>
                    </section>
                    <section class="col-12 col-md-12 mb-2">
                        <h4>Viandes</h4>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Pavé de boeuf (350gr), frites</h5>
                        <p class="ligr">Avec sauce au choix</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">25,00€</p>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Carbonades à la Flamande <span class="badge badge-info">à la Leffe</span></h5>
                        <p class="ligr">Frites, salade</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">20,00€</p>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Boulettes sauce tomates</h5>
                        <p class="ligr">Frites, salade</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">15,00€</p>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Américain préparé minute</h5>
                        <p class="ligr">Frites, salade</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">16,00€</p>
                    </section>
                    <section class="col-12 col-md-12 mb-2">
                        <h4>Poissons</h4>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Cabillaud aux petits légumes</h5>
                        <p class="ligr">Purée sur lit de poireaux</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">26,00€</p>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Pavé de saumon, béarnaise</h5>
                        <p class="ligr">Frites, salade</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">22,00€</p>
                    </section>
                </section>
                <section class="row px-5 plats">
                    <balise id="desserts"></balise>
                    <section class="col-12 col-md-12 mb-2 text-center">
                        <h4>Desserts</h4>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Mousse au chocolat</h5>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">8,00€</p>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Dame Blanche</h5>
                        <p class="ligr">avec chocolat chaud</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">10,00€</p>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Crème brûlée</h5>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">8,00€</p>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Tiramisu au spéculoos</h5>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">8,00€</p>
                    </section>
                </section>
                <section class="row px-5 plats">
                    <balise id="vins"></balise>
                    <section class="col-12 col-md-12 mb-2 text-center">
                        <h4>Vins</h4>
                    </section>
                    <section class="col-12 col-md-12 mb-2">
                        <h4>Rouge</h4>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Bordeaux</h5>
                        <p class="ligr">Clos de May, Haut-Médoc</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">40,00€</p>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Rhône <span class="badge badge-info">cuvée 2008</span></h5>
                        <p class="ligr">Crozes - Hermitage Rouge</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">48,00€</p>
                    </section>
                    <section class="col-12 col-md-12 mb-2">
                        <h4>Blancs</h4>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Loire</h5>
                        <p class="ligr">Val de Loire, Domaine Laporte</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">35,00€</p>
                    </section>
                    <section class="col-9 col-md-4">
                        <h5>Bourgogne</h5>
                        <p class="ligr">Chablis Jean-Marc Brocard</p>
                    </section>
                    <section class="col-3 col-md-2">
                        <p class="font-weight-bold price">50,00€</p>
                    </section>
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