<?php
require ('view/header.php');
?>
<h1> Voici l'étudiant  <?= $etudiant['firstname'] ?> <?= $etudiant['lastname'] ?></h1>

<div>
    <h2>Cours deja suivis :</h2>

    <?php 
    $tabverif = array();
    
    foreach($cescours as $toncour){ 
        array_push($tabverif, $toncour["id"]);
        ?>
        
        <h4>inscrit a - <?=$toncour["language"]?></h4>
   <?php
    }
 
        ?>

</div>
<br>
<br>
<br>

<h2>l'inscrire a un cours :</h2>
<form action="<?= _BASE ?>/student/inscription" method="POST">
    
<?php
        
        
        foreach($lescours as $cours) {
            if(!in_array($cours['id'], $tabverif)) {?>
            <input type="checkbox"  name="cours[]" value="<?= $cours['id'] ?>"><?= $cours['language'] ?>



<?php }} ?>
<input type="hidden" name="id_student" value="<?= $etudiant['id'] ?>">
<input type="submit" value="ok">
</select>
</form>

</body>
</html>