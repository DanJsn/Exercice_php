<form method="GET" >
    <input type ="text" name="nom" placeholder="Ton nom">
    <input type ="text" name="aime" placeholder="ce que tu aime">
    <input type ="submit" value="envoyer">


<?php
    $nom1="Jean";
    $nom2="Claude";
    $nom3="-";
?>

 <h1>
    Salut <?php echo $nom1 . $nom3 . $nom2 ?> ça va ?
 </h1>


<form method="GET">
    <input type="text" name="sujet" placeholder="sujet">
    <input type="text" name="verbe" placeholder="verbe">
    <input type="text" name="complement" placeholder="complement">
    <input type="submit" value="envoyer">

<p>
    <form method="GET">
    <input type="radio" name="homme" value="homme"> <label for="homme">homme</label>
    <input type="radio" name="femme" value="femme"> <label for="femme">femme</label>
    <input type="submit" value="envoyer">
    </form>
</p>
