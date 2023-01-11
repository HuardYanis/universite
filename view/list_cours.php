<?php
require ('view/header.php');
?>
    <h1>LIST COURS</h1>

    <?php
        foreach($lescours as $cours) { ?>
            <h3><?= $cours['code'] ?> ::: <?= $cours['language'] ?></h3>
            <a href="http://localhost/universite/cours/participant/<?= $cours['id'] ?> ">Etudiant participant</a>



<?php } ?>


    
</body>
</html>