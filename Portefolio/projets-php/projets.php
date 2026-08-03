<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elyakim Portfolio SIO</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
   
    <header>
    <a href="index.php" class="logo">
      <div class="logo-class">
        <img src="logo.png" alt="logo">Elyakim Onocia</img>
      </div>
    </a>
    <nav>

        <ul>
          <li class="nav"><a href="index.php">Accueil</a></li>
          <li class="nav"><a href="projets.php">Projets</a></li>
          <li class="nav"><a href="certification.php">Certifications</a></li>
          <li class="nav"><a href="veille.php">Veille</a></li>
          <li class="nav"><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </header>


 <section id="projets">
  <h2 class="projets-h2">MES PROJETS</h2>

  <div class="projects-grid">

    <article class="projet">
      <div class="projet-img">
        <img src="Projet_Jeu.png" alt="Capture d'écran du jeu vidéo">
      </div>
      <div class="projet-body">
        <div class="projet-tags">
          <span class="tag">PYTHON</span>
          <span class="tag">PYGAME</span>
        </div>
        <h3>Projet de jeu vidéo (En cours)</h3>
        <p>
          Développement d'un jeu vidéo en Python utilisant la bibliothèque Pygame. C'est un jeu en
          1 contre 1 où les joueurs incarnent soit Mario, soit Sonic.
        </p>
      </div>
    </article>

    <article class="projet">
      <div class="projet-img">
        <img src="site_mma.png" alt="Capture du site MMA">
      </div>
      <div class="projet-body">
        <div class="projet-tags">
          <span class="tag">HTML</span>
          <span class="tag">CSS</span>
          <span class="tag">JAVASCRIPT</span>
        </div>
        <h3>Projet Site Web (Perso)</h3>
        <p>
          Développement d'un site web en HTML/CSS et JavaScript sur le MMA, avec son histoire et
          les grands champions de ce sport.
        </p>
      </div>
    </article>
    <article class="projet">
      <div class="projet-img">
        <img src="site-sio.png" alt="Capture du site SIO">
      </div>
      <div class="projet-body">
        <div class="projet-tags">
          <span class="tag">HTML</span>
          <span class="tag">CSS</span>
        </div>
        <h3>Site Web BTS SIO</h3>
        <p>
          Refonte complète du site web du BTS SIO en équipe de 2. Le site présente le BTS, la formation, le programme et les débouchées.
        </p>
      </div>
    </article>    

  </div>
</section>
</body>

<footer>
  <div class="footer-social">
    <a href="https://github.com/Elyakimo" aria-label="Mon GitHub" target="_blank" rel="noopener">
      <img src="github_logo.png" alt="GitHub">
    </a>
    <a href="https://www.linkedin.com/in/elyakim-onocia-0978a43b3/" aria-label="Mon LinkedIn" target="_blank" rel="noopener">
      <img src="linkedin_logo.png" alt="LinkedIn">
    </a>
  </div>

  <div class="footer-info">
    <p>Tél : 80.57.62</p>
    <p>Mail : eonocia@gmail.com</p>
  </div>

  <p class="footer-copy">© 2026-2027 — Portfolio SIO d'Elyakim ONOCIA</p>
</footer>
</html>
