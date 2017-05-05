
<html>
  <head><title>Hi!</title></head>
  <body>
    <h1>Bonjour  <?php echo $_GET['nom']; ?>!</h1>
     <?php
        $nom="Dan";
        $age="23";
        $couleur_yeux="bleu";
        if ($faim) {
            echo "j'ai faim";
        }
        $famille = array(
          'papa' => "Jean-luc" ,
          "maman"=> "Nathalie" ,
          "frere"=> "Liam"     ,
          "soeur"=> "Charlotte",
        );
        if (oui) {
          echo "super";
        } else {
          echo "c'est dommage!";
        }
     ?>

je m'appelle <?php echo $nom; ?> j'ai <?php echo $age ?> ans

  </body>
</html>
