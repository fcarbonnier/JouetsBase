<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>
            Afficher toutes les catégories
        </title>
        <link rel="stylesheet" href="jouets.css" type="text/css">
    </head>
    <body>
          <p><H1>Liste des categories</font></H1><BR>
<?php
    include ("Connexion.php");
    $listeCategories = $connexion->query("SELECT * FROM categorie" );
    echo'<table><tr><th classe="id">identifiant</th><th classe="des">Libelle</th></tr>';
    foreach ($listeCategories as $categorie)
{
    echo '<tr>';
    echo '<td>'.$categorie["id_cat"].'</td>';
    echo '<td>'.$categorie["lib_cat"].'</td>';
    echo '</tr>'; 
}
  echo '</table>';   
  ?>
  <h1> pied </h1>
    </body>
</html>

    
