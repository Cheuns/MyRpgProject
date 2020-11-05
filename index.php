<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My RPG Project</title>
</head>
<body>

    <?php
        // Création d'une classe « Aventurier ».
        class Aventurier {
            private $_pv = 700;         // Les points de vie
            private $_endurance = 500;  // L'endurance disponible pour attaquer 
            private $_force = 20;       // La force des attaques physiques
            private $_epee = 40;        // L'épée à une valeur d'attaque de 40

            public function attaquer($cible) {        // Méthode qui permet d'attaquer avec sa propre force
                echo "Boum ! je t'inflige <strong> $this->_force </strong> points de dégâts physique <br/>";
            }

            public function attaquerEpée() {    // Méthode qui permet d'attaquer avec une épée
                $this->_epee += $this->_force;
                echo "Par l'épée sacrée ! Je t'inflige <strong> $this->_epee </strong> points de dégâts physique <br/>";
            }

            public function attaquerArc() {     // Méthode qui permet d'attaquer avec un arc

            }
           
            public function subirDegats() {     // Méthode qui permet de générer les dégâts subits
                $this->_pv -= $this->_force;
                echo "Il me reste <strong> $this->_pv </strong> points de vie <br/>";
            }
        }
        // Création d'une classe « Magicien ».
        class Mage {
            private $_pv = 500;         // Les points de vie
            private $_mana = 300;       // La mana disponible pour lancer des sorts
            private $_puissance = 20;   // La puissance des attaques magiques

            public function attaquer() {        // Méthode qui permet de lancer une attaque basique
                echo "Bim ! je t'inflige <strong> $this->_puissance </strong> points de dégâts magique <br/>";
            }

            public function attaqueFeu() {      // Méthode qui permet de lancer une attaque de type "Feu"

            }

            public function attaqueGlace() {    // Méthode qui permet de lancer une attaque de type "Glace"

            }

            public function subirDegats() {     // Méthode qui permet de générer les dégâts subits
                $this->_pv -= $this->_puissance;
                echo "Il me reste <strong> $this->_pv </strong> points de vie <br/>";
            }
        }    
        
        $cheuns = new Aventurier;
        $darkchons = new Mage;

        $cheuns->attaquer($darkchons);    // L'aventurier inflige "force" points de dégâts à l'adversaire 
        $darkchons->subirDegats();
        
        $darkchons->attaquer($cheuns);    // Le magicien réplique et inflige "puissance" points de dégâts
        $cheuns->subirDegats();

        $cheuns->attaquerEpée($darkchons);  // L'aventurier brandi son épée et inflige "force + épée" points de dégâts

    ?>
</body>
</html>