<?php
try {
    $usuario = 'root';
    $contraseña = '';

    $pdo = new PDO('mysql:host=localhost;dbname=blog', $usuario, $contraseña);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>