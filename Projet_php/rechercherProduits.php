<?php

$pro = array(array('nom'=>'hp','prix'=>'450000','qtite'=>'3','mt'=>'1350000'),
             array('nom'=>'Dell','prix'=>'500000','qtite'=>'24','mt'=>'2000000'),
             array('nom'=>'Mac','prix'=>'749000','qtite'=>'14','mt'=>'2996000'),
             array('nom'=>'Clavier','prix'=>'24000','qtite'=>'5','mt'=>'120000'),
             array('nom'=>'Souris','prix'=>'450000','qtite'=>'10','mt'=>'4500000'),
             array('nom'=>'Carte Mére','prix'=>'29500','qtite'=>'12','mt'=>'1350000'),
             array('nom'=>'Sac','prix'=>'450000','qtite'=>'15','mt'=>'225000'),
             array('nom'=>'Ecran Machine','prix'=>'59000','qtite'=>'6','mt'=>'354000'),
             array('nom'=>'Batterie','prix'=>'13200','qtite'=>'7','mt'=>'92400'),
             array('nom'=>'Ram','prix'=>'12600','qtite'=>'12','mt'=>'25200'),);
            
    
?>
             
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<nav>
        <ul>
            <li><a href="acceuil.php">Acceuil</a></li>
            <li><a href="listerProduits.php">Affichier</a></li>
            <li><a href="ajouterProduits.php">Ajouter</a></li>
            <li><a href="rechercherProduits.php">Rechercher</a></li>
            <li><a href="SupprimerProduits.php">Supprimer</a></li>
            <li><a href="updateProduits.php">Mettre à jour</a></li>
        </ul>
</nav>

<!-- Formulaire de recherche -->
<!-- Recherche par un nom -->
<!-- <h2>Chercher un produit son prix</h2>
<form action="rechercherProduits.php" method="post" class="formulaire">
        <p>Nom</p>
        <input type="text" name="nom" placeholder="nom du produit" required class="iptr"><br>
        <input type="submit" value="Ajouter"class="btn">
</form> -->
<!-- Recherche par un prix -->    
    <h2>Chercher un produit son prix</h2>
    <form action="rechercherProduits.php" method="post" class="formulaire">
        <p>Nom</p>
        <input type="text" name="nom" placeholder="nom du produit" required class="iptr"><br>
        <p>Prix</p>
        <input type="number" name="prix" placeholder="prix du produit" required class="iptr" min=0><br>
        <input type="number" name="min" placeholder="prix min du produit" required class="iptr" min=100><br>
        <input type="number" name="max" placeholder="prix max du produit" required class="iptr" max=1000000><br>

        <input type="submit" value="Ajouter"class="btn">
    </form>
    <!--?php
       $nomp =$_POST['nom'];
       echo $nomp;
        for ($i=0; $i < count($pro) ; $i++) { 
             if ($nomp == $pro[$i]['nom']) {
                 
                 echo '<strong>Trouvé!!!</strong>';
                 break;
            }
            else {
                echo '<strong>Non trouvé!!!</strong>';
                break;
            }
        } 
        ?-->
       <?php
         //*****************************Comparaison nom et prix produit**************************
        //*****************************Affectation***************************************
        $pprix =$_POST['prix'];
        $nomp =$_POST['nom'];
        for ($i=0; $i < count($pro) ; $i++) { 
            if ($pprix == $pro[$i]['prix'] and $nomp == $pro[$i]['nom']) {
                
                echo '<strong>Trouvé!!!</strong>';
                break;
            }
            else {
                echo '<strong>Non trouvé!!!</strong>';
                break;
            }
        }
       ?>
       
      
    
<!-- Les tableaux -->
    <table border="2" width="500">
        <caption id="titre1">Liste des produits</caption>
        <tr id="titre2">
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Montant</th>
        </tr>
 
        <?php 
                    foreach ($pro as $key => $value) {
                        
                        $mtt=$value["prix"]*$value["qtite"];
                        
                        if ($value["qtite"] <10) {
                            echo "<tr id='couleur'><td>".$value["nom"]."</td><td>".$value["prix"]."</td><td>".$value["qtite"]."</td><td>".$mtt; 
                        } 
                        else {
                            echo "<tr><td>".$value["nom"]."</td><td>".$value["prix"]."</td><td>".$value["qtite"]."</td><td>".$mtt; 
                        
                        }
                        
                    }
            ?> 

    </table>
</body>
</html>