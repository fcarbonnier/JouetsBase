<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title> Afficher tous les produits
            
        </title>
        <link rel="stylesheet" href="jouets.css" type="text/css">
    </head>
    <body>
          <p><H1>Liste des produits</font></H1><BR>
<?php
    include ("Connexion.php");
    $listeProduits = $connexion->query("SELECT * FROM produit" );
    echo'<table><tr><th classe="id">identifiant</th><th classe="des">designation</th><th classe="photo">photo</th></tr>';
    foreach ($listeProduits as $produit)
{
    echo '<tr>';
    echo '<td>'.$produit["id_prod"].'</td>';
    echo '<td>'.$produit["lib_prod"].'</td>';
    $chemin = "images/".$produit["photo_prod"];
    echo "<td><img src= $chemin width='100' height='75'></td>";
    
    echo '</tr>'; 
}
  echo '</table>';   
  ?>
  <h1> pied </h1>
    </body>
</html>

    
