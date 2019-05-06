<?php

$pro = array(array('nom'=>'hp','prix'=>'450000','qtite'=>'3','mt'=>'1350000'),
             array('nom'=>'Dell','prix'=>'500000','qtite'=>'4','mt'=>'2000000'),
             array('nom'=>'Mac','prix'=>'749000','qtite'=>'4','mt'=>'2996000'),
             array('nom'=>'Clavier','prix'=>'24000','qtite'=>'5','mt'=>'120000'),
             array('nom'=>'Souris','prix'=>'450000','qtite'=>'10','mt'=>'4500000'),
             array('nom'=>'Carte Mére','prix'=>'29500','qtite'=>'12','mt'=>'1350000'),
             array('nom'=>'Sac','prix'=>'450000','qtite'=>'5','mt'=>'225000'),
             array('nom'=>'Ecran Machine','prix'=>'59000','qtite'=>'6','mt'=>'354000'),
             array('nom'=>'Batterie','prix'=>'13200','qtite'=>'7','mt'=>'92400'),
             array('nom'=>'Ram','prix'=>'12600','qtite'=>'2','mt'=>'25200'),);
    
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
<form action="updateProduits.php" method="post" id="formulaire2">
    <p>Nom</p>
        <input type="text" name="nom" placeholder="Nom du produit à supprimer" class="ipt" required>
    <p>Prix</p>
        <input type="number" name="prix" placeholder="prix du produit" required class="ipt">
    <p>Quantité</p>
        <input type="number" name="qtite" placeholder="Quantité du produit" required class="ipt"><br><br>
        <input type="submit" value="Mettre à jour"class="btn"> 
</form>
    <?php
        $update = $_POST['nom'];
        for ($i=0; $i <count($pro) ; $i++) { 
            if ($update == $pro[$i]['nom'])
            {
                $pro[$i]['nom']=$_POST['nom'];
                $pro[$i]['prix']=$_POST['prix'];
                $pro[$i]['qtite']=$_POST['qtite'];
            }
         }
    ?>
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