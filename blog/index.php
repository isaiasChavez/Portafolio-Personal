<?php 
 include_once 'conexion.php';
 

 $query_todos_los_titulos = 'SELECT * FROM articulos';
 $sentencia_titulos = $pdo->prepare($query_todos_los_titulos);
 $sentencia_titulos->execute();
 $todos_los_titulos =  $sentencia_titulos->fetchAll();
 $lala = json_encode($todos_los_titulos);
 var_dump($lala);
 echo $lala;