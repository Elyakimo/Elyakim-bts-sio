<div class="page">
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portail BTS SIO - Interface de connexion sécurisée pour les Services Informatiques aux Organisations">
    <meta name="author" content="BTS SIO">
    <title>Portail BTS SIO · Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header id="site-header" role="banner">

        <span class="icon-terminal">[&nbsp;SIO&nbsp;]</span>

        <h1 class="brand-title">Portail BTS SIO</h1>
        <p class="brand-subtitle">Services Informatiques aux Organisations</p>

        <span class="session-badge session-inactive">● Non connecté</span>

        <nav class="header-nav" aria-label="Navigation utilitaire">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="aide.php">Aide</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="accessibilite.php">Accessibilité</a></li>
            </ul>
        </nav>

    </header>

    <section id="hero-presentation" aria-labelledby="hero-heading">

        <section class="hero-content">
            <h2 id="hero-heading" class="hero-title">Bienvenue sur le portail de la formation</h2>

            <p class="hero-description">
                Le <strong>BTS SIO</strong> (Services Informatiques aux Organisations) forme des professionnels
                capables de <strong>gérer</strong>, <strong>maintenir</strong> et <strong>sécuriser</strong>
                les systèmes d'information des entreprises.
            </p>

            <p class="hero-description">
                Connectez-vous pour accéder à vos <strong>cours</strong>, vos <strong>projets</strong>,
                votre <strong>emploi du temps</strong> et bien plus encore.
            </p>
        </section>

        <section class="hero-stats">

            <article class="stat-item">
                <span class="stat-value">3</span>
                <span class="stat-label">Années d'études</span>
            </article>

            <article class="stat-item">
                <span class="stat-value">2</span>
                <span class="stat-label">Options (SLAM / SISR)</span>
            </article>

            <article class="stat-item">
                <span class="stat-value">100%</span>
                <span class="stat-label">Numérique</span>
            </article>

        </section>

    </section>

    <main id="main-content" role="main">

        <section id="login-section" aria-labelledby="login-heading">

            <header class="section-header">
                <h2 id="login-heading" class="section-title">Connexion sécurisée</h2>
                <p class="section-subtitle">Accédez à votre espace personnel</p>
            </header>

            <form id="login-form" action="#" method="post" autocomplete="off" novalidate>

                <fieldset class="form-group">
                    <label for="login-email" class="form-label">
                        Adresse e-mail
                        <span class="label-required" aria-label="champ obligatoire">*</span>
                    </label>

                    <span class="input-wrapper">
                        <span class="input-icon" aria-hidden="true"></span>

                        <input
                            type="email"
                            id="login-email"
                            name="email"
                            class="form-input"
                            placeholder="votre.prenom@etudiant.fr"
                            required
                            autocomplete="username"
                        >
                    </span>

                    <span class="form-hint">
                        Exemple : jean.dupont@etudiant.fr
                    </span>
                </fieldset>

                <fieldset class="form-group">
                    <label for="login-password" class="form-label">
                        Mot de passe
                        <span class="label-required" aria-label="champ obligatoire">*</span>
                    </label>

                    <span class="input-wrapper">
                        <span class="input-icon" aria-hidden="true"></span>

                        <input
                            type="password"
                            id="login-password"
                            name="password"
                            class="form-input"
                            placeholder="Votre mot de passe"
                            required
                            autocomplete="current-password"
                        >
                    </span>

                    <span class="form-hint">
                        <a href="mot-de-passe-oublie.html" class="hint-link">
                            Mot de passe oublié ?
                        </a>
                    </span>
                </fieldset>

                <fieldset class="form-group form-group-inline">

                    <input
                        type="checkbox"
                        id="login-remember"
                        name="remember"
                        class="form-checkbox"
                    >

                    <label for="login-remember" class="form-label-checkbox">
                        Se souvenir de moi
                    </label>

                </fieldset>

                <fieldset class="form-group form-group-submit">

                    <button type="submit" id="login-submit" class="form-submit">
                        Se connecter
                    </button>

                </fieldset>

                <aside id="login-error" class="form-error" role="alert" hidden>
                    <p class="error-message">
                        Identifiants incorrects. Veuillez vérifier votre email et votre mot de passe.
                    </p>
                </aside>

            </form>

            <footer class="form-footer">
                <p>
                    Pas encore de compte ?
                    <a href="creer-un-compte.html" class="form-footer-link">
                        Créer un compte
                    </a>
                </p>
            </footer>

        </section>

    </main>

    <aside id="info-panel" aria-label="Informations et actualités">

        <article class="info-card info-card-security">

            <header class="info-card-header">
                <h3 class="info-card-title">Sécurité</h3>
            </header>

            <section class="info-card-body">
                <ul>
                    <li>Ne communiquez <strong>jamais</strong> vos identifiants.</li>
                    <li>Déconnectez-vous après chaque session.</li>
                    <li>Utilisez un mot de passe <strong>unique</strong> et <strong>complexe</strong>.</li>
                    <li>En cas de problème, contactez le <abbr title="Service Informatique">SI</abbr>.</li>
                </ul>
            </section>

        </article>

        <article class="info-card info-card-news">

            <header class="info-card-header">
                <h3 class="info-card-title">Actualités</h3>
            </header>

            <section class="info-card-body">

                <ul class="news-list">

                    <li class="news-item">
                        <time class="news-date" datetime="2025-01-15">
                            15 janv. 2025
                        </time>

                        <p class="news-text">
                            Réunion d'information :
                            <strong>stages en entreprise</strong> – jeudi 23 janvier à 14h.
                        </p>
                    </li>

                    <li class="news-item">
                        <time class="news-date" datetime="2025-01-10">
                            10 janv. 2025
                        </time>

                        <p class="news-text">
                            Mise à jour des
                            <strong>emplois du temps</strong> – vérifiez votre planning.
                        </p>
                    </li>

                    <li class="news-item">
                        <time class="news-date" datetime="2024-12-20">
                            20 déc. 2024
                        </time>

                        <p class="news-text">
                            Maintenance de la plateforme prévue le
                            <strong>5 février</strong> de 8h à 12h.
                        </p>
                    </li>

                </ul>

            </section>

            <footer class="info-card-footer">
                <a href="actualites.html" class="info-card-link">
                    Voir toutes les actualités →
                </a>
            </footer>

        </article>

        <article class="info-card info-card-messages">

            <header class="info-card-header">
                <h3 class="info-card-title">Messages</h3>
            </header>

            <section class="info-card-body">
                <p class="empty-state">
                    Aucun nouveau message. Vous recevrez vos notifications ici.
                </p>
            </section>

        </article>

        <article class="info-card info-card-event">

            <header class="info-card-header">
                <h3 class="info-card-title">À venir</h3>
            </header>

            <section class="info-card-body">

                <dl class="event-list">

                    <article class="event-item">
                        <dt class="event-label">Contrôle SISR</dt>
                        <dd class="event-value">28 janvier 2025</dd>
                    </article>

                    <article class="event-item">
                        <dt class="event-label">Projet SLAM</dt>
                        <dd class="event-value">À rendre le 3 février</dd>
                    </article>

                    <article class="event-item">
                        <dt class="event-label">Soutenance</dt>
                        <dd class="event-value">12 – 16 mars 2025</dd>
                    </article>

                </dl>

            </section>

        </article>

    </aside>

    <footer id="site-footer" role="contentinfo">

        <section class="footer-grid">

            <article class="footer-col">

                <h4 class="footer-col-title">À propos</h4>

                <ul class="footer-links">
                    <li><a href="presentation-bts.html">Présentation du BTS SIO</a></li>
                    <li><a href="options-slam-sisr.html">Options SLAM / SISR</a></li>
                    <li><a href="equipe-pedagogique.html">L'équipe pédagogique</a></li>
                </ul>

            </article>

            <article class="footer-col">

                <h4 class="footer-col-title">Ressources</h4>

                <ul class="footer-links">
                    <li><a href="centre-aide.html">Centre d'aide</a></li>
                    <li><a href="documentation-technique.html">Documentation technique</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                </ul>

            </article>

            <article class="footer-col">

                <h4 class="footer-col-title">Informations légales</h4>

                <ul class="footer-links">
                    <li><a href="#mentions-legales">Mentions légales</a></li>
                    <li><a href="#confidentialite">Politique de confidentialité</a></li>
                    <li><a href="#cookies">Gestion des cookies</a></li>
                </ul>

            </article>

            <article class="footer-col footer-col-contact">

                <h4 class="footer-col-title">Contact</h4>

                <address class="footer-address">
                    <p>BTS SIO – Lycée Supérieur</p>
                    <p>123 Avenue du Numérique</p>
                    <p>75000 Paris, France</p>

                    <p>
                        Tél :
                        <a href="tel:+33123456789">01 23 45 67 89</a>
                    </p>

                    <p>
                        Email :
                        <a href="mailto:contact@bts-sio.fr">
                            contact@bts-sio.fr
                        </a>
                    </p>
                </address>

            </article>

        </section>

        <section class="footer-bottom">

            <p>
                &copy; 2025 <strong>BTS SIO</strong> – Tous droits réservés.
                <span class="footer-separator" aria-hidden="true">·</span>
                Site réalisé par les étudiants de la formation.
            </p>

        </section>

    </footer>

</body>
</html>