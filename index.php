<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movies</title>
</head>
<body>
    

    <div class=container>
        <h1>Quel film on voit ce soir ?</h1>

        
        <div>
        <?php
            // PDO : initialiser la connexion
            $pdo = new PDO('sqlite:Movies.db');


            // Creer notre requéte SQL
            $requete = $pdo->query("SELECT * FROM Movies");

            // Exectuion
            $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

            // Affichage

            foreach ($resultat as $affichage){
                echo "<div class=Film>
                <h3>".$affichage["Titre"]."</h3>
                <h4>". $affichage["Réalisteur"]."</h4>
                <h4>". $affichage["Date de sortie"]. " - " .$affichage["Genre"]."</h4>
                <p>".$affichage["Synopsis"]."</p> <hr>
                </div>"
                
;
            };
           ?>

          </div>  
            
        <div>

            <img src="undraw_home_cinema_l7yl.svg" alt="Image 2022">
            </div>

        </div>



</body>
</html>