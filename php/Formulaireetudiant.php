<pre>
<?php echo print_r ($_GET) ?>
</pre>

<form method="get">
    <input type="number" name="points" value="points" placeholder="points">
    <input type="submit" name="Send" value="Envoyer vos données">
    <p> <a href="formulaireetudiant.php">refresh</a></p>

</form>


<?php
  //proprieté
$points= $_GET['points'];
 ?>

 <?php
switch ($points) {
case 1:
case 2:
case 3:
    echo "Ce travail est nul";
    break;
case 4:
case 5:
case 6:
case 7:
case 8:
case 9:
    echo "ce travail n'est pas terrible.";
    break;
case 10:
    echo "Tout juste!";
    break;
case 11:
case 12:
case 13:
case 14:
    echo "C'est pas mal.";
    break;
case 15:
case 16:
case 17:
case 18:
    echo "Bravo!";
    break;
case 19:
case 20:
    echo "Police! Arrêtez ce tricheur!";
}
?>
