<?php
//Exercice_pronoms
    foreach ($pronoms as $key => $value) {}
        print_r($pronoms_personnels);
        $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
    // foreach ($pronoms_personnels as $pronoms)
    //  {echo "</br>"."$pronoms";}
        $verbe = array(' code' , ' codes' , ' code' , ' codons' , ' codez' , ' codent');

      for ($i=0; $i < 6 ; $i++)
        {echo "</br>" . "$pronoms_personnels[$i]" . "$verbe[$i]" . "</br>";}
?>

<?php
//Exercice_final_for
/*    for ($nombre = 1; $nombre <= 120; $nombre++)
            {echo '</br>' . "$nombre" ; }
*/
 ?>

<?php
//Exercice_final_while
/*    $nombre = 1;
        while ($nombre <= 120)
        { echo $nombre . '<br />' ; $nombre++; }
*/
?>

<?php
//Exercice_final_nom_classe
foreach ($nom_class as $key => $value) {
    print_r($nom_class);
}

?>
