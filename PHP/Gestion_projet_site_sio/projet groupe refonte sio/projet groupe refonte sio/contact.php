<div class="page">
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact du Portail BTS SIO - Coordonnées et formulaire de contact">
    <title>Portail BTS SIO · Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <span>[SIO]</span>
        <h1>Portail BTS SIO</h1>
        <p>Services Informatiques aux Organisations</p>

        <nav aria-label="Navigation principale">
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="aide.html">Aide</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="accessibilite.html">Accessibilité</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Nous contacter</h2>
            <p>Une question, un problème ou une suggestion ? N'hésitez pas à nous écrire.</p>

            <article>
                <h3>Formulaire de contact</h3>

                <form action="#" method="post">
                    <label for="contact-nom">Nom complet <span>*</span></label>
                    <input type="text" id="contact-nom" name="nom" required placeholder="Votre nom">

                    <label for="contact-email">Adresse e-mail <span>*</span></label>
                    <input type="email" id="contact-email" name="email" required placeholder="votre@email.fr">

                    <label for="contact-sujet">Sujet <span>*</span></label>
                    <select id="contact-sujet" name="sujet" required>
                        <option value="">Choisissez un sujet</option>
                        <option value="connexion">Problème de connexion</option>
                        <option value="cours">Question sur les cours</option>
                        <option value="technique">Problème technique</option>
                        <option value="autre">Autre</option>
                    </select>

                    <label for="contact-message">Message <span>*</span></label>
                    <textarea id="contact-message" name="message" rows="6" required placeholder="Votre message..."></textarea>

                    <button type="submit">Envoyer le message</button>
                </form>
            </article>

            <article>
                <h3>Coordonnées</h3>

                <address>
                    <p><strong>BTS SIO – Lycée Supérieur</strong></p>
                    <p>123 Avenue du Numérique</p>
                    <p>75000 Paris, France</p>
                    <p>Tél : <a href="tel:+33123456789">01 23 45 67 89</a></p>
                    <p>Email : <a href="mailto:contact@bts-sio.fr">contact@bts-sio.fr</a></p>
                </address>
            </article>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 <strong>BTS SIO</strong> – Tous droits réservés.</p>

    </footer>
</body>
</html>
</div>