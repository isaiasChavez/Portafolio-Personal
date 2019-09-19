<?php 
include_once 'conexion.php';
header("Content-Type: text/html;charset=utf-8");

if($_GET['id']){

    $id_entrada_blog = $_GET['id'] ;
    
    settype($id_entrada_blog,"string");

$query_articulo = 'SELECT * FROM articulos WHERE id=?';
$sentencia_articulo_unico = $pdo->prepare($query_articulo);
$sentencia_articulo_unico->execute(array($id_entrada_blog));
$articulo_unico =  $sentencia_articulo_unico->fetch();
if($articulo_unico){
    var_dump($articulo_unico);
}
else{
    echo
}


$query_todos_los_titulos = 'SELECT id , titulo FROM articulos';
    $sentencia_titulos = $pdo->prepare($query_todos_los_titulos);
    $sentencia_titulos->execute();
    $todos_los_titulos =  $sentencia_titulos->fetchAll();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#364d73" />

    <title>Isaías Chávez</title>
    <link rel="stylesheet" href="../main.css">
    
    <link rel="icon" href="../iconito.ico">
    <link rel="stylesheet" href="./entradaBlog.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
    
</head>
<body>
        
<div class="wrapper">
        <nav class="nav-menu">
                <ul>
                    <a href="../about/index.html"><li>About</li></a>   
                    <a href="./index.php"><li class="active">Blog</li></a>
                    <a href="../cv/index.html"><li>CV</li></a>
                    <a href="../web/index.html"><li>Web Developer</li></a>
        
                </ul>
                
            </nav>
            
            
    <header class="header">
        <div>
            <a href="../index.html">
            <div class="brand">
                    <h1>Isaías Chávez Martínez</h1> <img class="brand-img" src="../imagen.jpg" width="50px" height="50px" alt="">
                </div>
            </a>
            <p>Web developer</p>
        </div>
        <i  id="burguer-button" class="fas fa-bars burguer-menu fa-2x"></i>
        
    </header>
    
    <main class="main">

                    <div class="post" >
                        <div class="post-header">
                            <h2><?php echo $articulo_unico['titulo'] ?></h2><div class="post-label">Última entrada</div>
                            <p class="small"> <?php echo $articulo_unico['fecha'] ?></p>
                        </div>
                        <div class="post-body" id="post-1">
                            <?php echo $articulo_unico['contenido'] ?>


                        </div>
                        <div class="post-footer">
                            <div class="post-labels">

                                <div class="post-label">Libros</div>
                                <div class="post-label">Libros</div>
                                <div class="post-label">Libros</div>
                            </div>
                        </div>
                    </div>

                    <div class="post-list">
                            <div class="subt-1"> <h3>Entradas</h3></div>
                            <div class="entradas-blog">
                            <ul>   
                                    <?php foreach($todos_los_titulos as $titulo):?>
                                        <a href="./entradaBlog.php?id=<?php echo $titulo['id']?>" data-target=<?php echo $titulo['id']?> > <li><?php echo $titulo['titulo']?></li></a>
                                    <?php endforeach?>
                                </ul>
                            </div>
                    </div>



        </main>
    <footer class="footer">
         <div class="social">
             <a href="https://www.facebook.com/profile.php?id=100002466696106" target="_blank">
                <i class=" fab fa-2x fa-facebook-square"></i>
            </a>
             
             <i class="fab fa-2x fa-whatsapp-square"></i>
             <i class="fab fa-2x fa-github"></i>
             <a href="https://www.instagram.com/isaiaschavezm">
                <i class="fab fa-2x fa-instagram"></i>
            </a>
             <i class="fab fa-2x fa-linkedin"></i>
         </div>
    </footer>


    
</div>

<script src="https://kit.fontawesome.com/cc00e9ef87.js"></script>
<script src="script.js"></script>
</body>
</html>