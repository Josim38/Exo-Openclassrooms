<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Formulaire en cours de création</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <form name="inscription" method="post" action="saisie.php">
          Entrez votre prénom: <input type="text" name="pseudo"/> <br/>
          Entrez votre age: <input type="text" name="age"/><br/>
          <input type="submit" name="valider" value="OK"/>
      </form>
      <?php
      if(isset($_POST['valider'])) {
        $pseudo=$_POST['pseudo'];
        $age=$_POST['age'];
        echo 'Bienvenue'. $pseudo.', 'vous avez ' '. $age.
      }
      ?>
</body>
</html>
