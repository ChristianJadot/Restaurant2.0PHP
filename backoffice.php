<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/5c3cdba868.js" crossorigin="anonymous"></script>
        <script src="becool.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>BeCool Cooking - Restaurants</title>
    </head>
<body>
    <div class="container pb-5">
        <!-- logo & navigation-->
        <header>
            <section class="row">
                <logo class="col">
                    <img src="images/becool-logo-black.png" alt="BeCool Cooking" class="logo">
                </logo>
            </section>
        </header>

        <!-- content -->
        <main>
            <section class="row">
                <section class="col-12">
                    <nav class="nav nav-tabs pt-3">
                        <a class="nav-item nav-link active" href="#messages" data-toggle="tab">Messages</a>
                        <a class="nav-item nav-link" href="#guest" data-toggle="tab">Guest Book</a>
                        <a class="nav-item nav-link" href="#images" data-toggle="tab">Images</a>
                    </nav>
                    <div class="tab-content py-3">
                        <div class="tab-pane fade show active" id="messages"> 
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col"><strong>Date</strong></th>
                                        <th scope="col"><strong>Prénom</strong></th>
                                        <th scope="col"><strong>Nom</strong></th>
                                        <th scope="col"><strong>Pourquoi</strong></th>
                                        <th scope="col"><strong>Où</strong></th>
                                        <th scope="col"><strong>Message</strong></th>
                                        <th scope="col"><strong>Supprimer</strong></th>
                                    </tr>
                                </thead>                                
                                <tbody>                       
                            <!-- récupération des données depuis la bdd --> 
                            <?php
                                try
                                {
                                    // On se connecte à MySQL
                                    $bdd = new PDO('mysql:host=localhost;dbname=messages;charset=utf8','root','root');
                                }
                                catch(Exception $e)
                                {
                                    // En cas d'erreur, on affiche un message et on arrête tout
                                        die('Erreur : '.$e->getMessage());
                                }
                                // Si tout va bien, on peut continuer

                                // On récupère tout le contenu de la table jeux_video
                                $reponse = $bdd->query('SELECT * FROM messages');

                                // On affiche chaque entrée une à une
                                while ($donnees = $reponse->fetch())
                                {
                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $donnees['date']; ?></th>
                                        <td><?php echo $donnees['firstName']; ?></td>
                                        <td><?php echo $donnees['lastName']; ?></td>
                                        <td><?php echo $donnees['why']; ?></td>
                                        <td><?php echo $donnees['whereIs']; ?></td>
                                        <td><?php echo $donnees['message']; ?></td>
                                        <td>
                                            <form action="" method="POST">
                                                <input type="hidden" name="delete" value="<?php echo $donnees['id']?>"></input>
                                                <input type="submit" value="delete"></input>
                                            </form>                                            
                                        </td>
                                    </tr>
                            <?php
                            }
                            
                            if (isset($_POST['delete']))
                            {
                                $id = $_POST['delete'];
                                $sql = "DELETE FROM messages WHERE id= $id";
                                $bdd -> exec($sql);
                                header("Refresh:0");
                            } 

                            $reponse->closeCursor(); // Termine le traitement de la requête
                            ?>   
                                </tbody>                     
                            </table>
                        </div>
                        <div class="tab-pane fade" id="guest">liste des message guest</div>
                        <div class="tab-pane" id="images">                           
                            <div id="galerie">
                                <p class="fs-5 fw-bold">Charger une image dans la galerie</p>
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="mb-3 col-10 col-md-8">
                                        <input type="file" name="fichierimage" value=""/>
                                    </div>
                                    <div class="mb-3 col-10 col-md-8">
                                        <button type="submit" name="submit">Charger image</button>
                                    </div>
                                </form>
                                <?php include 'upload.php'; ?>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </main>
    </div>

    <!-- Script nav -->
    <script>
        $('a')
        .click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
        .on('shown.bs.tab', function (e) {
            $('#actif').text($(e.target).text())
            $('#precedent').text($(e.relatedTarget).text())
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>