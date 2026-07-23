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
 
    <main>
    <section id="accueil">
<div class="hero-inner">
  <div class="hero-text">
  <div class="hero-name">
	  <div class="first">Elyakim</div>
	  <div class="last">Onocia</div>
  </div>
      
      <p class="hero-bio">
        Je m'appelle Elyakim Onocia, j'ai 18 ans. Je suis étudiant en première année de BTS SIO,
        en option SLAM (Solutions Logicielles et Applications Métiers) au lycée Dick Ukeiwë. 
      <br><br>
	    J'ai choisi cette option car j'aime développer et créer des choses de mes propres mains. Je suis passioné par l'informatique, car c'est un domaine en constante évolution qui pousse à toujours apprendre. Mon objectif est de devenir développeur en cybersercurité ou être DevOps. J'aime découvrir de nouveaux langages de programmation et de nouvelles technologies.</p>
      <br><br>
      <p class="hero-bio">Je cherche une alternance en développement pour l'année scolaire 2027-2028, si mon profil vous intéresse contactez-moi.</p>
</div>
    <div class="hero-side">
      <div class="code-card">
        <div class="code-card-header">
         <span class="dot-red"></span>
         <span class="dot-yellow"></span>
         <span class="dot-green"></span>
         <span class="code-card-title">presentation.py</span>
        </div>
<pre>
  <code>
    <span class="c-keyword">class</span><span class="c-class"> Developer</span> : 

        <span class="c-keyword">def</span> <span class="c-fn">__init__</span>(self): 
            self.<span class="c-prop">name</span> = <span class="c-string">"Elyakim Onocia"</span>
            self.<span class="c-prop">age</span> = <span class="c-string">18</span>
            self.<span class="c-prop">classe</span> = <span class="c-string">"BTS SIO SLAM"</span>
            self.<span class="c-prop">city</span> = <span class="c-string">"Dumbea, NC"</span>
            self.<span class="c-prop">skills</span> = [ 
                <span class="c-string">"HTML/CSS"</span>, 
                <span class="c-string">"JavaScript"</span>, 
                <span class="c-string">"Python"</span>, 
                <span class="c-string">"SQL"</span>, 
                <span class="c-string">"PHP"</span>, 
                <span class="c-string">"C"</span>, 
            ] 
        <span class="c-keyword">def</span> <span class="c-fn">available</span>(self): 
            <span class="c-keyword">return</span> <span class="c-bool">True</span> <span class="c-comment"># stage/alternance</span>
    </code>
</pre>
      </div>
    </div>
   </section>
   <section id="parcours">
    <div class="parcours">
      <div class="diplome-title">Parcours académique et professionnel</div>

        <div class="diplome-row">
          <div class="diplome">
            <div class="diplome-name">Brevet des collèges</div>
            <p class="diplome-text">2022 - J'ai obtenu mon brevet avec la mention bien</p>
          </div>
          <div class="connector"></div>
          <div class="diplome">
            <div class="diplome-name">Stage</div>
            <p class="diplome-text">2022 - j'ai pu effectuer un stage d'une semaine en entreprise où j'ai pu participer à l'inventaire, à l'étiquettage et à la mise en forme du magasin.</p>
          </div>
          <div class="connector"></div>
          <div class="diplome">
            <div class="diplome-name">Bac Technologique</div>
            <p class="diplome-text">2025 - J'ai obtenu mon baccalauréat Sciences Technologies du Management et de la Gestion avec la spécialité Service d'Information et de Gestion avec la mention assez bien.</p>
          </div>
          <div class="connector"></div>
          <div class="diplome">
            <div class="diplome-name">2026-X : BTS SIO, option SLAM</div>
            <p class="diplome-text">2026 - Je suis actuellement en 1ère année de BTS SIO option SLAM, je souhaiterais par la suite, après l'obtention de mon BTS m'orienter vers la cybersécurité.</p>
          </div>
        </div>
</div>
    </section>
    <section>
  <div class="outil-maitrise">
    <div class="outil-title">Outils Maîtrisés</div>
  <div class="outil-row">
    <div class="outil">
      <div class="logo-outil"><img src="linux_logo.png" alt="Linux"></div>
      <div class="outil-name">Linux</div>
    </div>
    <div class="outil">
      <div class="logo-outil"><img src="SQL_logo.png" alt="PostgreSQL / MySQL"></div>
      <div class="outil-name">PostgreSQL/MySQL</div>
    </div>
    <div class="outil">
      <div class="logo-outil"><img src="github_logo.png" alt="Git / GitHub"></div>
      <div class="outil-name">Git/Github</div>
    </div>
    <div class="outil">
      <div class="logo-outil"><img src="vscode_logo.png" alt="VS Code"></div>
      <div class="outil-name">VsCode</div>
    </div>
    <div class="outil">
      <div class="logo-outil"><img src="virtualbox_logo.webp" alt="Oracle VirtualBox"></div>
      <div class="outil-name">OracleVirtualBox</div>
    </div>
    <div class="outil">
      <div class="logo-outil"><img src="Wireshark_logo.png" alt="wireshark"></div>
      <div class="outil-name">WireShark</div>
  </div>
</div>
    </section>
    </main>
 
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
 
  </body>
</html>
