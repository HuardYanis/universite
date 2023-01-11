<?php
require ('view/header.php');
?>

    <form action="<?= _BASE ?>/student/record" method="POST">
        <input type="text" name="firstname" placeholder="firstname" require>
        <input type="text" name="lastname" placeholder="lastname" require>
        <input type="email" name="email" placeholder="email" require>
        <input type="password" name="password" placeholder="password" require>
        <input type="submit" value="ok">

    </form>
</body>
</html>