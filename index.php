<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!--HTML char -->
        <meta charset="UTF-8">
        
        <!-- Including Bootstrap for design -->
        <link href="bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">
        
        <title>POO PHP</title>
    </head>
    
    
    <body>
        
        <div class="container">
        <?php
        // Nous créons une classe « Personnage ».
        class Personnage
        {
          private $_nom;
          private $_vie = 100;
          private $_force = 25;

          public function Personnage($nom)
          {
              $this->_nom = strtoupper($nom);
          }

          // Nous déclarons une méthode dont le seul but est d'afficher un texte.
          public function parler()
          {
            echo '<p class="text-justify">Je suis ' .$this->_nom. '!</p>';
          }
          
          public function afficherInfo()
          {
              echo '<p class="text-justify">' .$this->_nom. ' | V:' . $this->_vie . ' | F:' .$this->_force. '</p>';
          }
          
         public function frapper($persoAFrapper)
         {
             $persoAFrapper->_vie -= $this->_force;
             echo '<p class="text-justify"> ' .$this->_nom. ' attaque ' .$persoAFrapper->_nom. '.</p>';
         }
          
        }

        $perso1 = new Personnage("Ezio");
        $perso1->parler();
        $perso1->afficherInfo();
        
        echo '<p>&nbsp;</p>';
        
        $perso2 = new Personnage("Arno");
        $perso2->parler();
        $perso2->afficherInfo();
        
        echo '<p>&nbsp;</p>';
        
        $perso2->frapper($perso1);
        
        echo '<p>&nbsp;</p>';
        
        $perso1->afficherInfo();
        $perso2->afficherInfo();
       
        ?>
        </div>
    </body>
    
    
</html>
