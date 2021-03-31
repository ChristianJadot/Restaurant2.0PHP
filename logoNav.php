       <header>
            <section class="row">
                <logo class="col">
                    <img src="images/becool-logo-black.png" alt="BeCool Cooking" class="logo">
                </logo>
                <ul class="nav justify-content-end  align-content-center">
                    <li class="nav-item">
                        <a class="nav-link
                            <?php
                                echo $_SERVER['SCRIPT_NAME'];
	                            // Make link active when on the index page
		                        if($_SERVER['SCRIPT_NAME'] == "/index.php") {
	                        ?> active
	                        <?php
		                        }
	                        ?>"aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                            <?php
                                echo $_SERVER['SCRIPT_NAME'];
	                            // Make link active when on the lacarte page
		                        if($_SERVER['SCRIPT_NAME'] == "/lacarte.php") {
	                        ?> active
	                        <?php
		                        }
	                        ?>"aria-current="page" href="lacarte.php">La Carte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                            <?php
                                echo $_SERVER['SCRIPT_NAME'];
	                            // Make link active when on the restaurants page
		                        if($_SERVER['SCRIPT_NAME'] == "/restaurants.php") {
	                        ?> active
	                        <?php
		                        }
	                        ?>"aria-current="page" href="restaurants.php">Restaurants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                            <?php
                                echo $_SERVER['SCRIPT_NAME'];
	                            // Make link active when on the gallery-bruxelles page
		                        if($_SERVER['SCRIPT_NAME'] == "/gallery-bruxelles.php") {
	                        ?> active
	                        <?php
		                        }
	                        ?>"aria-current="page" href="gallery-bruxelles.php">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link
                            <?php
                                echo $_SERVER['SCRIPT_NAME'];
	                            // Make link active when on the contact page
		                        if($_SERVER['SCRIPT_NAME'] == "/contact.php") {
	                        ?> active
	                        <?php
		                        }
	                        ?>"aria-current="page" href="contact.php">Contact</a>
                    </li>
                </ul>
            </section>
        </header>