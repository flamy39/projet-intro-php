<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Lycée BestStudents</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-home me-1" style="color:#8E44AD"></i>Accueil</a>
                </li>
                <li class="nav-item">
                    <?php
                        $active = $_SERVER["SCRIPT_NAME"]==="/etudiants.php" ? "active" : '';
                    ?>
                    <a  href="etudiants.php" class="nav-link <?= $active ?>"><i class="fas fa-user-graduate me-1 text-warning"></i>BTS SIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"><i class="fas fa-envelope-open-text me-2 text-warning"></i></i></i>Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>