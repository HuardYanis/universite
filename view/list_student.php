<?php  
    require ('view/header.php');
?>
    <h1>LIST STUDENT</h1>

    <?php
        foreach($students as $student) { ?>
            <h3><?= $student['firstname'] ?> <?= $student['lastname'] ?></h3>
            <a href="<?= _BASE ?>/student/postuler/<?= $student['id'] ?>">Afficher etudiant</a>


<?php } ?>
    
</body>
</html>