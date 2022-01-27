<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Lycée BestStudents</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-home me-3" ></i>Accueil</a>
                </li>
                <li class="nav-item">
                    <?php
                        $active = $_SERVER["SCRIPT_NAME"]==="/etudiants.php" ? "active" : '';
                    ?>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-graduate me-3 text-warning"></i>Promotions
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/etudiants.php">Toutes les promotions</a></li>
                            <li><a class="dropdown-item" href="/etudiants.php?promo=SIO1">BTS SIO1</a></li>
                            <li><a class="dropdown-item" href="/etudiants.php?promo=SIO2">BTS SIO2</a></li>
                            <li><a class="dropdown-item" href="/etudiants.php?promo=TC1">BTS Technico-Commercial1</a></li>
                            <li><a class="dropdown-item" href="/etudiants.php?promo=TC2">BTS Technico-Commercial2</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact.php"><i class="fas fa-envelope-open-text me-3 text-warning"></i></i></i>Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>