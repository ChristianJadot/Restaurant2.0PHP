        <footer>
            <section class="row">
                <section class="col-3 text-center">
                    <img src="images/becool-logo-white.png" alt="BeCool Cooking" class="logo">
                </section>
                <section class="col-3 text-center">
                    <h6>Contact Us</h6>
                    <address>
                        <p>Rue à la Folle Cuisine 9<br>
                            1000 Bruxelles<br>
                            <a href="#" class="email"><i class="fas fa-envelope"></i> info@becool.com</a><br>
                            <a href="#" class="tel"><i class="fas fa-phone-alt"></i> +32 2 999 99 99</a>
                        </p>
                    </address>
                </section>
                <section class="col-3 text-center">
                    <h6>Navigation</h6>
                    <nav class="nav flex-column">
                        <a class="nav-link
                            <?php
                                echo $_SERVER['SCRIPT_NAME'];
	                            // Make link active when on the index page
		                        if($_SERVER['SCRIPT_NAME'] == "/index.php") {
	                        ?> active
	                        <?php
		                        }
	                        ?>"aria-current="page" href="index.php">Home</a>
                        <a class="nav-link
                            <?php
                                echo $_SERVER['SCRIPT_NAME'];
	                            // Make link active when on the lacarte page
		                        if($_SERVER['SCRIPT_NAME'] == "/lacarte.php") {
	                        ?> active
	                        <?php
		                        }
	                        ?>"aria-current="page" href="lacarte.php">La Carte</a>
                        <a class="nav-link
                            <?php
                                echo $_SERVER['SCRIPT_NAME'];
	                            // Make link active when on the restaurants page
		                        if($_SERVER['SCRIPT_NAME'] == "/restaurants.php") {
	                        ?> active
	                        <?php
		                        }
	                        ?>"aria-current="page" href="restaurants.php">Restaurants</a>
                        <a class="nav-link
                            <?php
                                echo $_SERVER['SCRIPT_NAME'];
	                            // Make link active when on the gallery-bruxelles page
		                        if($_SERVER['SCRIPT_NAME'] == "/gallery-bruxelles.php") {
	                        ?> active
	                        <?php
		                        }
	                        ?>"aria-current="page" href="gallery-bruxelles.php">Galeries</a>
                        <a class="nav-link
                            <?php
                                echo $_SERVER['SCRIPT_NAME'];
	                            // Make link active when on the contact page
		                        if($_SERVER['SCRIPT_NAME'] == "/contact.php") {
	                        ?> active
	                        <?php
		                        }
	                        ?>"aria-current="page" href="contact.php">Contact</a>
                    </nav>
                </section>
                <section class="col-3 text-center">
                    <h6>Follow Us</h6>
                    <i class="fab fa-facebook fa-lg"></i><br>
                    <i class="fab fa-twitter-square fa-lg"></i><br>
                    <i class="fab fa-pinterest fa-lg"></i><br>
                    <i class="fab fa-instagram-square fa-lg"></i>
                </section>
                <section class="col-12 text-center pt-2 copy">Copyright 2021 © BeCool Cooking. All rights reserved.</section>
            </section>
        </footer>