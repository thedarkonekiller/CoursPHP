<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form action="./traitement.php" method="post" class="flexColumn">
        <fieldset class="flexColumn">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="ex: MARTIN" required>
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="ex: Jacques" required>
            <label for="adresse">Adresse</label>
            <input type="text" id="adresse" name="adresse" placeholder="ex: 14 rue Juillet" required>
            <label for="code-postal">Code Postal</label>
            <input type="number" id="code-postal" name="code-postal" placeholder="75000" required>
            <label for="ville">Ville</label>
            <input type="text" id="ville" name="ville" placeholder="Paris" required>
            <label for="phone">Téléphone</label>
            <input type="tel" id="phone" name="phoneNumber" pattern="[0-9]{10}" placeholder="ex: 0303030303" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="ex: jmartin@gmail.com" required>
        </fieldset>

        <fieldset class="flexColumn">
            <label for="sujet">Sujet *</label>
            <select id="sujet" name="sujet" required>
                <option value="" id="opt1" disabled selected>Choisir un sujet</option>
                <option value="devis">Demande de devis</option>
                <option value="renseignements">Demande de renseignements</option>
            </select>
            <label for="message">Message *</label>
            <textarea id="message" name="message" required></textarea>
            <input type="checkbox" id="rgpd" name="rgpd" value="ValidRGPD" required>
            <label for="rgpd">En cochant cette case, j'accepte que mes données personnelles saisies dans ce
                formulaire soient collectées et utilisées par le site conformément à sa politique de
                confidentialité, dans le but de traiter ma demande. Je suis informé(e) que je peux exercer mes
                droits d'accès, de rectification et de suppression de mes données personnelles en contactant le site
                via son formulaire de contact ou par email à [adresse email du site].</label>
            <button type="submit">Envoyer</button>
        </fieldset>
    </form>
    
</body>
</html>