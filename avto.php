<?php
require 'index.php'
?>
<form action="./avto.php" method="post">
    <input type="text" name="Hundai">
    <input type="submit" value="Добавить">
    <br>
    <input type="text" name="Chevrolet">
    <input type="submit" value="Добавить">
    <br>
    <input type="text" name="Lada">
    <input type="submit" value="Добавить">
<?php
echo $CarShowroom -> get_carN1();
?>
</form>
