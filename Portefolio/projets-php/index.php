<!DOCTYPE html>
<html lang="fr">
 
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elyakim Portfolio SIO</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  </head>

<style>
html {
  font-size: 16px;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --couleur: #1A3A5C;
  --surface: #FFF;
  --ink: #16233D;
  --ink-soft: #4B5871;
  --accent: #C4453B;
  --mono: 'IBM Plex Mono';
  --info: #2A5A8C;
  --info-soft: #DDE7F2;
  /* Correction : la ligne d'origine était
       --info:#2A5A8C; / --info-soft
     Le "/" cassait la déclaration et --info-soft n'avait pas de valeur.
     Il manquait un point-virgule et une couleur pour --info-soft (ajoutée >
     un bleu clair assorti à --info, à ajuster selon ton besoin). */
}
  font-size: 16px;
}
 
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
 
:root {
  --couleur: #1A3A5C;
  --surface: #FFF;
  --ink: #16233D;
  --ink-soft: #4B5871;
  --accent: #C4453B;
  --mono: 'IBM Plex Mono';
  --info: #2A5A8C;
  --info-soft: #DDE7F2;
  /* Correction : la ligne d'origine était
       --info:#2A5A8C; / --info-soft
     Le "/" cassait la déclaration et --info-soft n'avait pas de valeur.
     Il manquait un point-virgule et une couleur pour --info-soft (ajoutée ici,
     un bleu clair assorti à --info, à ajuster selon ton besoin). */
}
 
html {
  scroll-behavior: smooth;
}
 
a {
  color: var(--info);
  text-decoration-color: transparent;
  transition: text-decoration-color 0.15s ease;
}
 
a:hover {
  text-decoration-color: currentColor;
  /* Amélioration : sans cette ligne, text-decoration-color:transparent ne redevenait
     jamais visible : le soulignement restait invisible même au survol. */
}
 
body {
  font-family: Poppins, sans-serif;
  font-size: 1rem;         /* 16px */
  color: black;
  background-color: white;
  transition: 0,3s;
}

.dark{
  background-color: black;
  color: white;
}
.btn{
  padding: 1em;
  border: 1px solid;      /* correction : "solid, 1em" n'était pas une syntaxe valide */
  border-radius: 50%;
  cursor: pointer;
  background: none;
  font-size: 1.2rem;
  line-height: 1;
  transition: background 0.2s;
}
.btn:hover {
  background: rgba(255, 255, 255, 0.15);
  cursor: pointer;
}
#mode-icon {
  display: inline-block; /* nécessaire pour que rotate/scale s'appliquent correctement */
}
@keyframes iconSpin {
  0%   { transform: rotate(0deg) scale(1); }
  50%  { transform: rotate(180deg) scale(0.6); }
  100% { transform: rotate(360deg) scale(1); }
}
#mode-icon.spin {
  animation: iconSpin 0.5s ease;
}


/* Remarque : header.topbar, .nav::before et .nav.active ci-dessous ciblent des classes
   ("topbar", "nav") qui ne sont posées sur aucun élément de ton HTML actuel
   (ton <header> et ton <nav> n'ont pas ces attributs class). Ces règles ne s'appliquent
   donc à rien pour l'instant. Je les garde et les convertis quand même, mais dis-moi si
   tu veux que je les supprime ou que j'ajoute les classes correspondantes dans le HTML. */
header.topbar {
  position: sticky;
  top: 0;
  z-index: 50;
  background: rgba(18, 18, 18, 0.92);
  backdrop-filter: blur(0.375rem); /* 6px */
}
 
nav::before {
  content: '▸';
  opacity: .5;
}
 
.nav.active {
  color: var(--ink);
  border-bottom-color: var(--accent);
}
 
/* ===== HEADER ===== */
header {
  background-color: #000000;
  color: #fdfdfd;
  padding: 1.875rem 2.5rem; /* 30px 40px */
  text-align: center;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000; /* z-index est un nombre sans unité : jamais de px/rem ici */
}
 
header h1 {
  font-size: 2rem; /* déjà en rem = 32px, inchangé */
  margin-bottom: 0.25em; /* 8px, en em car relatif à la taille du h1 lui-même (2rem) */
  color: var(--accent);
  /* Amélioration : ta variable --couleur/--accent n'était utilisée nulle part dans le fichier.
     Je l'utilise ici pour donner un vrai accent visuel au titre principal. */
}
 
/* ===== CONTENU PRINCIPAL ===== */
main {
  max-width: 56.25rem; /* 900px */
  margin: 2.5rem auto;  /* 40px auto */
  padding: 0 1.25rem;   /* 0 20px */
}
 
/* Correction : le header est en position:fixed, donc il recouvre le haut de la page.
   Deux règles scroll-margin-top existaient (140px puis 190px, la seconde écrasant
   silencieusement la première) : je les fusionne en une seule. 190px correspond à la
   hauteur réelle mesurée de ton header (nav + h1 + p + paddings). */
#accueil,
#apropos,
#competence {
  scroll-margin-top: 11.875rem; /* 190px */
}
 
h2 {
  color: #326caa;
  border-bottom: 0.125rem solid #1A73E8; /* 2px */
  padding-bottom: 0.5rem; /* 8px */
  margin: 1.875rem 0 0.9375rem 0; /* 30px 0 15px 0 */
}
 
.cards {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;        /* 12px */
  max-width: 31.25rem; /* 500px */
  width: 100%;
  /* Correction (déjà appliquée précédemment) : width:500px fixe pouvait déborder sur un
     écran de mobile plus étroit que 500px. max-width + width:100% s'adapte à l'écran. */
}
 
.card {
  background: #f5f1e9;
  border: 0.0625rem solid #d8d2c4; /* 1px — voir remarque bordures ci-dessous */
  border-radius: 0.75rem; /* 12px */
  padding: 1.25em 1.5em;  /* 20px 24px, en em : ce padding suit la taille du texte de la carte */
  overflow: hidden;
  cursor: default;
}
/* Remarque sur les bordures : convertir un border de 1px en rem/em (0.0625rem) fonctionne,
   mais en pratique la plupart des développeurs laissent les bordures fines (1px, 2px) en px,
   car un rem/em peut donner un résultat flou ou arrondi selon le zoom du navigateur (une
   bordure de 0.0625rem peut devenir 0.9px ou 1.1px à l'écran). C'est un choix de convention,
   pas une obligation : garde px pour les bordures si tu préfères, ce n'est pas une erreur. */
 
.card h3 {
  margin: 0 0 0.25em; /* 4px, en em : relatif à la taille du h3 (16px ici) */
  font-size: 1rem; /* 16px */
}
 
.card .sous-titre {
  margin: 0;
  color: #777;
  font-size: 0.875rem; /* 14px */
}
 
/* Texte caché par défaut */
.reveal {
  max-height: 0;
  opacity: 0;
  overflow: hidden;
  transition: max-height 0.4s ease, opacity 0.3s ease, margin-top 0.3s ease;
 À propos
 margin-top: 0;
}
 
.reveal p {
  margin: 0;
  font-size: 0.8125rem; /* 13px */
  color: #555;
  line-height: 1.6; /* sans unité : un ratio, jamais en px/rem/em */
}
 
/* Révélation au survol */
.card:hover .reveal {
  max-height: 6.25rem; /* 100px */
  opacity: 1;
  margin-top: 0.75rem; /* 12px */
}
 
/* ===== CARTES COMPETENCES ===== */
.competence {
  background: rgb(97, 97, 97);
  border-radius: 0.5rem; /* 8px */
  padding: 1.25em;       /* 20px, en em : padding lié à la taille du texte de la carte */
  margin-bottom: 1.25rem; /* 20px */
  box-shadow: 0 0.125rem 0.5rem rgba(134, 134, 134, 0.1); /* 0 2px 8px */
  animation-name: fadeIn;
  animation-duration: 2s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 1;
  /* Correction (déjà appliquée précédemment) : animation-iteration-count attend un NOMBRE
     de répétitions (ou "infinite"), pas un mot-clé de vitesse comme "ease-in-out". */
}
 
.competence:hover {
  transform: translateY(-0.25em); /* -4px, en em : petit déplacement lié au texte local */
  transition: transform 0.2s;
  background-color: rgb(19, 7, 250);
}
/* ===== VEILLE ===== */
.carousel {
 overflow: hidden;
 width: 100%;
 mask-image: linear-gradiant(to right, transparent, black 8%, black 92%, transparent);
 -webkit-mask-image: linear-gradiant(to right, transparent, black 8%, black 92%, transparent);
}

.carousel-track {
 display: flex;
 gap: 1.25em;
 justify-content: center;
 align-items:center;
 flex-direction: row;
}

.carousel:hover .carousel-track {
 animation-play-state: paused;
}

.veille-card {
 flex: 0 0 auto;
 width: 15rem;
 background : #f5f1e9;
 border-radius: 0.75;
 padding: 1.25em 1.5em;
 cursor: default;
}

veille-card h3 {
 margin-bottom: 0.25em;
 font-size: 1rem;
}

.veille-card .sous-titre {
 margin: 0;
 color #777;
 font-size: 0.875rem;
}

.veille-detail {
 max-height: 0;
 opacity: 0;
 overflow: hidden;
 transition: max-height 0.4s ease, opacity 0.3s ease, margin-top 0.3s ease;
 margin-top: 0;
}

.veille-detai p{
 margin: 0;
 font-size: 0.8125rem;
 color: 555;
 line-height: 1.6;
}

.veille-card:hover .veille-detail {
 max-height: 9.375rem;
 opacity: 1;
 margin-top: 0.75em;
}

@media (prefers-reduced-motion: reduce) {
 .carousel-track{
  animation:none;
 }
}
/* ===== FOOTER ===== */
footer {
  background-color: #333333;
  color: white;
  text-align: center;
  padding: 1.25rem; /* 20px */
}
 
.contact {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
}
 
/* ===== NAVIGATION ===== */
nav {
  margin-top: 0.9375rem; /* 15px */
}
 
nav ul {
  list-style: none;
  display: flex;
  justify-content: center;
  gap: 1.875rem; /* 30px */
  padding: 0;
}
 
nav a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  padding: 0.5em 1em;      /* 8px 16px, en em : suit la taille du texte du lien */
  border-radius: 0.25rem;  /* 4px */
  transition: background 0.2s;
  width: 100%;
}
 
nav a:hover {
  background-color: rgba(255, 255, 255, 0.2);
}
#accueil, #apropos, #competence {
  scroll-margin-top: var(--header-height, 190px); /* 190px = valeur de secours si le JS n'a pas tourné */
}
 
/* Les media queries en em respectent le zoom/la taille de police définie par l'utilisateur
   dans son navigateur, contrairement au px : c'est une des rares valeurs où em reste la
   référence même en dehors d'un composant de texte. 600px / 16 = 37.5em. */
@media (max-width: 37.5em) {
  nav ul {
    flex-direction: column;
  }
}
 
/* Correction (déjà appliquée précédemment) : @keyframes n'accepte que des étapes en %
   (ou from/to), pas de sélecteurs d'éléments comme "h1{...}" à l'intérieur. Cette règle a
   été sortie du bloc @keyframes et placée séparément juste en dessous. Le nom "fadIn"
   (sans e) a aussi été corrigé en "fadeIn". */
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
 
header h1 {
  animation: fadeIn 1s;
}
 
.image {
  overflow: hidden;
  display: inline-block;
  /* Correction (déjà appliquée précédemment) : sans overflow:hidden sur le conteneur,
     l'image agrandie au survol débordait par-dessus le texte autour. */
}
 
.image img {
  display: block;
  transition: transform 0.3s;
}
 
.image:hover img {
  transform: scale(1.5); /* sans unité : un facteur d'échelle, jamais en px/rem/em */
  /* Correction (déjà appliquée précédemment) : on agrandit ici l'image (.image img) et non
     le conteneur (.image), qui reste fixe et masque le débordement via overflow:hidden. */
}
</style> 
  <body>
    
    <header class="topbar">
    <div class="btn-container">
      <button class="btn" onclick="toggleMode()">
      <span id="mode-icon">🌙</span>
      </button>
    </div>
    <nav class="topbar-inner" aria-label="Navigationprincipale">

        <ul>
          <li class="nav"><a href="#accueil">Accueil</a></li>
          <li class="nav"><a href="#apropos">À propos</a></li>
          <li class="nav"><a href="#competence">Compétences</a></li>
          <li class="nav"><a href="#veille-techno">Veille technologique</a></li>
          <li class="nav"><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <h1>Elyakim ONOCIA — BTS SIO — Option SLAM</h1>
    </header>
 
    <main>
 
      <!-- Section Accueil : texte court, l'objectif est juste d'accrocher le visiteur.
           Le parcours détaillé est déplacé dans "À propos" pour éviter la répétition. -->
      <h2 class="qui-suis-je" id="accueil">Qui suis-je ?</h2>
      <p>
        Je m'appelle Elyakim Onocia, j'ai 18 ans. Je suis étudiant en première année de BTS SIO,
        en option SLAM (Solutions Logicielles et Applications Métiers). J'ai choisi cette option
        car j'aime développer et créer des choses de mes propres mains.
      </p>
 
      <h2>Mes points forts</h2>
      <p>Voici quelques-uns de mes <strong>points forts</strong> :</p>
      <!-- Correction : il y avait une liste en <ul><li> ET la même info répétée juste après en <p>,
           plus un </ul> orphelin (sans balise ouvrante correspondante). Une seule liste suffit,
           et une liste HTML doit toujours être faite avec <ul>/<li>, pas des <p> empilés. -->
      <ul>
        <li>Passionné par l'informatique</li>
        <li>Bonne capacité d'apprentissage</li>
        <li>Esprit d'équipe</li>
        <li>Rigueur</li>
        <li>Bases en programmation : Python, HTML, CSS, SQL</li>
      </ul>
 
      <h2 class="a-propos" id="apropos">À propos</h2>
      <p>
        Je suis passionné par l'informatique, car c'est un domaine en constante évolution qui
        pousse à toujours apprendre. J'aime découvrir de nouveaux langages de programmation et de
        nouvelles technologies. En dehors de l'informatique, j'aime aussi le sport, que je pratique
        tous les jours. Je vis actuellement à Dumbéa.
      </p>
 
      <h2>Mon parcours</h2>
      <p>Voici mon parcours académique et professionnel :</p>
        <p>2019-2022 : Brevet des collèges</p>
        <p>2022 : Stage de découverte professionnelle à la FNAC</p>
        <p>2023-2025 : Bac Sciences et Technologies du Management et de la Gestion, spécialité Système d'Information de Gestion</p>
        <p>2026-2027 : BTS SIO, option SLAM</p>
        <!-- Correction : "2026 : BTS SIO première année" ne correspondait pas à la date du footer
             (© 2025). J'ai harmonisé les dates ci-dessus et dans le footer : à adapter avec tes
             vraies dates d'entrée/sortie de BTS. -->
      </ol>
 
      <h2 id="competence">Ma formation en BTS SIO</h2>
 
      <div class="cards">
 
        <div class="card">
          <h3>Cybersécurité</h3>
          <p class="sous-titre">Apprendre les principes de la cybersécurité et protéger les systèmes.</p>
          <div class="reveal">
            <p>Analyse de vulnérabilités.</p>
          </div>
        </div>
 
        <div class="card">
          <h3>Réseaux</h3>
          <p class="sous-titre">Configurer et administrer un réseau.</p>
          <div class="reveal">
            <p>Routage, VLAN.</p>
          </div>
        </div>
 
        <div class="card">
          <h3>Développement</h3>
          <p class="sous-titre">Créer des applications et des logiciels.</p>
          <div class="reveal">
            <p>Front-end, back-end, bases de données.</p>
          </div>
        </div>
 
        <div class="card">
          <h3>Gestion de projet</h3>
          <p class="sous-titre">Planifier et gérer des projets informatiques.</p>
          <div class="reveal">
            <p>Méthodes agiles/Scrum.</p>
          </div>
        </div>
 
      </div>
 
      <h2>Mes compétences techniques</h2>
      <div class="competence">
        <h3>Programmation</h3>
        <p>Python, HTML, CSS, SQL, PHP</p>
      </div>
      <div class="competence">
        <h3>Réseaux</h3>
        <p>Configuration et administration de réseaux</p>
      </div class="competence">
        <h3>Cybersécurité</h3>
        <p>Principes de la cybersécurité et protection des systèmes informatiques</p>
      </div>
 
      <h2>Mes projets</h2>
      <article>
        <h3>Projet de jeu vidéo</h3>
        <p>
          Développement d'un jeu vidéo en Python utilisant la bibliothèque Pygame. C'est un jeu en
          1 contre 1 où les joueurs incarnent soit Mario, soit Sonic.
        </p>
        <div class="image"><img src="Projet_Jeu.png" alt="Capture d'écran du jeu vidéo" width="250"></div>
      </article>


     <section>
    <h2 id="veille-techno">Veille technologique</h2>
     <div class="carousel">
       <div class="carousel-track">
	<article class="veille-card">
	  <h3>Souveraineté numérique</h3>
          <p class="veille-Sub">L'indépendance numérique</p>
	  <div class="veille-detail"><p>La France a annocé 655 millions d'euros pour l'IA dans le cadre de France 2030. Cette enveloppe est destinée à soutenir les infrastructures, les entreprises et la recherche, afin de réduire la dépendance aux techinilogies américaines après s'être fait retirer l'accès aux modèles d'Anthropic par la Maison Blanche <br><br> Source : <a href="https://www.usine-digitale.fr/intelligence-artificielle/souverainete-numerique-alors-quanthropic-a-coupe-le-robinet-claude-fable-la-france-debloque-655-millions-deuros-pour-assurer-son-autonomie-dans-lintelligence-artificielle.YNUUJ7YGVBA23G3OTI5TH6GGZQ.html" target="_blank">usine-digitale</a></p></div>
	</div>
     <div class="carousel">
	<div class="carousel-track">
	 <article class="veille-card">
          <h3>NVIDIA et la Chine</h3>
	   <p class="veille-sub">La Chine s'assouplirait?</p>
	    <div class="veille-detail"><p>Pékin envisagerait d'autoriser plusieurs de ses principaux groupes spécialisé dans l'intelligence artificielle à acquérir un volume limité de puces Nvidia H200. Cette mesure marquerait un nouvel assouplissement dans l'accès des entreprises chinoises aux semi-conducteurs américains de pointe, sous réserve des autorisations d'exportation délivrées par Washington.<br><br> Source: <a href="https://www.tradingsat.com/nvidia-US67066G1040/actualites/nvidia-la-chine-pourrait-autoriser-des-achats-limites-de-puces-nvidia-h200-1166404.html" target="_blank">BFM Bourse</a></p>
            </div>
     </section>




	<h2 id="contact">Contact</>
	<br><br>
	<form method="POST" action="">
	<ul>
		<li>
			<label for="nom"></label>
		</li>
	
	</form>
    </main>
 
    <footer>
      <p>© 2026-2027 — Portfolio SIO d'Elyakim ONOCIA</p>
    </footer>
 
  </body>
<script>
function ajusterScrollMargin() {
  const header = document.querySelector('header');
  const hauteur = header.offsetHeight + 20; // +20px de respiration
  document.documentElement.style.setProperty('--header-height', hauteur + 'px');
}
window.addEventListener('load', ajusterScrollMargin);
window.addEventListener('resize', ajusterScrollMargin);
const modeIcon = document.getElementById=('mode-icon');

function toggleMode() {
	document.body.classList.toggle("dark");
	modeIcon.classList.add('spin')
	
	setTimeout(() => {
		document.body.classList.toggle('dark'));
		const estSombre = document.body.classList.contains('dark');
		modeIcon.textContent = estSombre ? '🌞' : '🌙';
}, 250);

modeIcon.addEventListener('animationend', () => {
	modeIcon.classList.remove('spin');
}, {once: true});

}
</script>
</html>
