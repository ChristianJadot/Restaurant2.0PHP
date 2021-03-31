<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/5c3cdba868.js" crossorigin="anonymous"></script>
        <script src="becool.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>BeCool Cooking - Contact</title>
    </head>
<body>
    <section class="container">
        <!-- logo & navigation-->
        <?php include("logoNav.php"); ?>

        <!-- content -->
        <main>
            <section class="row">
                <section class="col">
                    <img src="images/contact-indian-condiment.jpg" alt="Prenez contact avec BeCool Cooking">
                </section>
            </section>
            <section class="row my-5">
                <aside class="col-4  asidehide"><img src="images/homard.jpg" alt="Homard BeCool Cooking" class="rounded img-fluid"></aside>
                <section class="col">

                    <!-- <pre>
                        <?php var_dump($_GET) ?>
                    </pre> -->

                    <h3>Nous contacter...<br>Une réponse vous aurez !</h3>
                    <form action="" method="POST">
                        <div class="col">
                            <div class="row">
                                <fieldset>                                   
                                    <div class="mb-3">
                                        <input type="date" name="date" id="date" class="form-control" min="20-03-2021" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Votre prénom</label>
                                        <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Prénom" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Votre nom</label>
                                        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Nom" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="TextInput" class="form-label">Votre email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="disabledSelect" class="form-label">Vous souhaitez :</label>
                                            <select type="text" name="why" id="why" class="form-select" required>
                                                <option>Faire une réservation</option>
                                                <option>Poser une question</option>
                                                <option>Signaler un problème</option>
                                            </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="disabledSelect" class="form-label">Concerne notre restaurant de :</label>
                                            <select type="text" name="whereIs" id="whereIs" class="form-select" required>
                                                <option>Bruxelles</option>
                                                <option>Gent</option>
                                                <option>Liège</option>
                                            </select>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <label for="floatingTextarea2">Votre message, vos questions...</label>
                                            <textarea type="text" name="message" class="form-control" placeholder="Message/Questions" id="message" style="height: 100px" required></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="conditions">
                                            <label class="form-check-label" for="FieldsetCheck">
                                              <em>Vous êtes d'accord avec les conditions d'utilisation du site et de vos données personnelles.</em>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" name="envoyer" class="btn btn-primary bg-info px-5" aria-label="send_button">
                                        <i class="fa fa-paper-plane"></i>
                                    </button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </section>
            </section>
        </main>

        <!-- Envoi des données formulaire dans bdd --> 
        <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=messages;charset=utf8','root','root');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
            if (strlen($_POST['firstName'])> 0 &&
                strlen($_POST['lastName'])> 0 &&
                strlen($_POST['email'])> 0 &&
                strlen($_POST['message'])> 0) {
                    $date = date("y-m-d");
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $email = $_POST['email'];
                    $why = $_POST['why'];
                    $whereIs = $_POST['whereIs'];
                    $message = $_POST['message'];
                    $request = $bdd->prepare('INSERT INTO messages(date, firstName, lastName, email, why, whereIs, message) VALUES(:date, :firstName, :lastName, :email, :why, :whereIs, :message)');
                    $request->execute(array('date'=>$date,
                                            'firstName'=>$firstName,
                                            'lastName'=>$lastName,
                                            'email'=>$email,
                                            'why'=>$why,
                                            'whereIs'=>$whereIs,
                                            'message'=>$message));
                                            echo "Votre message a bien été envoyé, merci !";
            }
        ?>

        <!-- footer -->
        <?php include("footer.php"); ?>
        
    </section>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>