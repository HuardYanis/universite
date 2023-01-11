<?php
require ('view/header.php');
?>

    <form action="<?= _BASE ?>/cours/record" method="POST">
        <input type="text" name="code" placeholder="code" require>
        <input type="text" name="titre" placeholder="titre" require>
        <input type="text" name="language" placeholder="language" require>
        <input type="submit" value="ok">

    </form>
</body>
</html>