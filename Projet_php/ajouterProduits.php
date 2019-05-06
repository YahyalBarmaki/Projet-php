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
<!-- ************************Formulaire****************************-->   
    <h1>Ajout produit</h1>
    <form action="ajouterProduits.php" method="post" class="formulaire">
        <p>Nom</p>
        <input type="text" name="nom" placeholder="Nom du produit" required class="ipt">
        <p>Prix</p>
        <input type="number" name="prix" placeholder="prix du produit" required class="ipt">
        <p>Quantité</p>
        <input type="number" name="qtite" placeholder="Quantité du produit" required class="ipt"><br><br>
        <input type="submit" value="Ajouter"class="btn">
    </form>

<!-- ************************Tableau****************************-->
<?php
$nomp=$_POST['nom'];
$prixp=$_POST['prix'];
$qtitep=$_POST['qtite'];

$pro = array(array('nom'=>'hp','prix'=>'450000','qtite'=>'3'),
             array('nom'=>'Dell','prix'=>'500000','qtite'=>'4'),
             array('nom'=>'Mac','prix'=>'749000','qtite'=>'14'),
             array('nom'=>'Clavier','prix'=>'24000','qtite'=>'15'),
             array('nom'=>'Souris','prix'=>'450000','qtite'=>'10'),
             array('nom'=>'Carte Mére','prix'=>'29500','qtite'=>'12'),
             array('nom'=>'Sac','prix'=>'450000','qtite'=>'15'),
             array('nom'=>'Ecran Machine','prix'=>'59000','qtite'=>'16'),
             array('nom'=>'Batterie','prix'=>'13200','qtite'=>'17'),
             array('nom'=>'Ram','prix'=>'12600','qtite'=>'12'),);
             for ($i=0; $i <count($pro) ; $i++) { 
                if ($nomp==$pro[$i]["nom"]) {
                    $verif =true;
                
                 }
             }
             if ($verif) {
                echo "<strong id='verif'>Ce nom exixte déjà</strong>";
                
             }
             else {
                array_push($pro,array('nom'=>$nomp,'prix'=>$prixp,'qtite'=>$qtitep));
             }
             

            
  
?>
<!-- Les tableaux -->
<table border="2" width="500">
        <caption id="titre1">Liste des produits</caption>
        <tr id="titre2">
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Montant</th>
        </tr>
 
            <?php 
                    foreach ($pro as $key => $value) {
                        
                        $mtt=$value["prix"]*$value["qtite"];
                        
                        if ($value["qtite"] <10) {
                            echo "<tr id='couleur'><td>".$key."</td><td>".$value["nom"]."</td><td>".$value["prix"]."</td><td>".$value["qtite"]."</td><td>".$mtt; 
                        } 
                        else {
                            echo "<tr><td>".$key."</td><td>".$value["nom"]."</td><td>".$value["prix"]."</td><td>".$value["qtite"]."</td><td>".$mtt; 
                        
                        }
                        
                    }
            ?> 

    </table><br><br>
   
</body>
</html>