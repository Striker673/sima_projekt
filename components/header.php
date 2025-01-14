<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./img/Roundel_of_the_USAF.svg.png" alt="Your Logo" width="150" height="79"
                    class="d-inline-block rounded-circle">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Domov</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info.php">História</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeria.php">Galéria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontakt.php">Kontakt</a>
                    </li>

                    <?php
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    } 
                    if (isset($_SESSION['user_id'])) {
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Profil</a>
                        </li>
                        ';
                    } else {
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="signin.php">Sign In</a>
                        </li>
                        ';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
</header>
