<?php

echo "hola mundo";
echo $_SERVER ['HTTP_USER_AGENT'];
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Edg')) {
    echo 'Está utilizando edge.';

?>
    <h3>str_contains() ha devuelto true</h3>
<?php
} else {
    
}
    ?>
    <p>esto no es edge</p>
    <?php
    //son lo mismo pero con diferente sintaxis
    echo "hola mundo"; 
?>
    