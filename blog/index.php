<?php
    include_once 'conexion.php';

    $query_ultimo_articulo = 'SELECT * FROM articulos LIMIT 0,1';
    $sentencia = $pdo->prepare($query_ultimo_articulo);
    $sentencia->execute();
   $ultimo_articulo =  $sentencia->fetch();


   $query_todos_los_titulos = 'SELECT id , titulo FROM articulos';
    $sentencia_titulos = $pdo->prepare($query_todos_los_titulos);
    $sentencia_titulos->execute();
   $todos_los_titulos =  $sentencia_titulos->fetchAll();
  
   <?php
    include_once 'conexion.php';

    $query_ultimo_articulo = 'SELECT * FROM articulos LIMIT 0,1';
    $sentencia = $pdo->prepare($query_ultimo_articulo);
    $sentencia->execute();
   $ultimo_articulo =  $sentencia->fetch();


   $query_todos_los_titulos = 'SELECT id , titulo FROM articulos';
    $sentencia_titulos = $pdo->prepare($query_todos_los_titulos);
    $sentencia_titulos->execute();
   $todos_los_titulos =  $sentencia_titulos->fetchAll();
   
?>
?>




    
