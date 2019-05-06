<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
     $user = array(array("Yahya","LEE","321"),
     array("Elina","BADIANE","0321"),
     array("Yaya","LY","022"));
    /**Initialisation **/
    $log = $_POST['login'];
   
    $mdp = $_POST['password'];
    $nb = count($user);
    $j=0;
//     echo $log;
//     echo  $mdp;
    /**vérification et comparaison **/
     for ($i=0; $i <count($user) ; $i++) { 
         // echo $user[$i][0];   
            if ($user[$i][0]==$log AND $user[$i][2]==$mdp)
               {
                    $verif = true;
               }

              if ($verif) {
                          
               header("location:acceuil.php");
              }
              else {
               header("location:authentification.php");
              }
              
     }

?>
</body>
</html>