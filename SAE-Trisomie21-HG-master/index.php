<?php session_start();require_once('QUERY.php');$_SESSION['idConnexion']=null;?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>Connexion</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
  <div class="svgWaveContains">
    <div class="svgWave"></div>
  </div>
  <?php 
    if(isset($_GET['login_err']))
    {
        $err = htmlspecialchars($_GET['login_err']);
        switch($err)
        {
            case 'erreur':
            ?>
              <div class="erreurPopup">
                <h2 class="txtPopup">Erreur, email ou mot de passe incorrect</h2>
                <img src="images/annuler.png" alt="image annuler" class="imageIcone centerIcon">
                <button class="boutonFermerPopup" onclick="erasePopup('erreurPopup')">Fermer X</button>
              </div>
            <?php
            break;

            case 'invalide':
            ?>
              <div class="alertPopup">
                <h2 class="txtPopup">Erreur, votre compte est encore en attente de validation</h2>
                <img src="images/wait.png" alt="image attente" class="imageIcone centerIcon">
                <button class="boutonFermerPopup" onclick="erasePopup('alertPopup')">Fermer X</button>
              </div>
            <?php
            break;

            case 'deconnexion':
            ?>
              <div class="editPopup">
                <h2 class="txtPopup">Vous avez bien été déconnecté</h2>
                <img src="images/logout.png" alt="image deconnexion" class="imageIcone centerIcon">
                <button class="boutonFermerPopup" onclick="erasePopup('editPopup')">Fermer X</button>
              </div>
            <?php
            break;
            case 'ajoutMembre':
            ?>
              <div class="validationPopup">
                <h2 class="txtPopup">Une demande de création de compte a bien été envoyée! Votre compte est désormais en attente de validation</h2>
                <img src="images/valider.png" alt="valider" class="imageIcone centerIcon">
                <button class="boutonFermerPopup" onclick="erasePopup('validationPopup')">Fermer X</button>
              </div>
            <?php
            break;
            case 'role':
              ?>
              <div class="alertPopup">
                <h2 class="txtPopup">Erreur, veuillez vous connectez avec l'interface professionnelle </h2>
                <img src="images/annuler.png" alt="image attente" class="imageIcone centerIcon">
                <button class="boutonFermerPopup" onclick="erasePopup('alertPopup')">Fermer X</button>
              </div>
            <?php
            break;
        }
    }
  ?> 
  
  <img src="images/logo.png" alt="logo application" class="iconeApp"> 
  
  <a href="indexAdmin.php"><button type="button" name="boutonAdmin" id="boutonAdmin"><img src="images/cadenas.png" class="imageIcone" alt="icone cadenas"><span>Connexion pro</span></button></a>
  
  <form id="formConnexion" action="indexConnexion.php" method="POST">
    <h1 id="pageDeCoStatut"><img src="images/profil.png" class="imageIcone" alt="icone cadenas" style="position: relative; margin-bottom: -7px"> Membre</h1>
    <div class="miseFormeConnexion" id="miseEnFormeConnexion">
      <label for="champIdentifiant">Identifiant :</label>
      <input type="email" name="champIdentifiant" id="champIdentifiant" placeholder="Entrez votre adresse mail"  minlength="1" maxlength="50"  required>
      <span></span>

      <label for="champMotDePasse">Mot de passe :</label>
      <input type="password" name="champMotDePasse" id="champMotDePasse" placeholder="Mot de passe (8 charactères minimum)" minlength="8" maxlength="50" required>
      <span><img src="images/oeilFermé.png" id="oeilMdp" alt="oeil" onclick="afficherMDP('champMotDePasse','oeilMdp')"></span>
      
      <a href="demandeInscription.php" class="texteAccueil"> Pas encore de compte ?</a>
      <a href="#" class="texteAccueil"> Mot de passe oublié ?</a>
    </div>

    <button type="submit" name="boutonConnexion" class="boutons" id="boutonConnexion"><img src="images/unlock.png" class="imageIcone" alt="icone cadenas"><span>Connexion</span></button>
  </form>
  <script src="js/javascript.js"></script>
</body>
</html>