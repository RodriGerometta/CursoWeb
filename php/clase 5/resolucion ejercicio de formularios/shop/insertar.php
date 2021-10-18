<?php 
    include("conexion.php");
    
    if(isset($_POST['enviar'])){
        $nombre = trim( $_POST['nombre'] );  //trim(): elimina espacios del inicio y del final
        $apellido = trim( $_POST['apellido']);
        $dni = trim( $_POST['dni']);
        $email = trim( $_POST['email']);
        $celular = trim( $_POST['celular']);
        $orden = trim( $_POST['orden']);
        $motivo = trim( $_POST['message']);

        $insert = "INSERT INTO datos(nombre, apellido, dni, email, celular, orden, mensaje) VALUES ('$nombre','$apellido','$dni','$email','$celular','$orden','$motivo')"; 
        $resultado = mysqli_query($conexion, $insert);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Arrepentimiento</title>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <!-- <h1 class="display-4 fw-bolder">Me arrepenti de la compra</h1> -->
                    <!-- <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p> -->
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <?php
                                if($resultado){
                                ?>
                                <div class="alert alert-success text-center" role="alert">
                                    <h4>Se cancelo la compra!</h4>
                                </div>
                                <?php
                                }else{
                                ?>
                                <div class="alert alert-danger text-center" role="alert">
                                    <h4>No pudimos cancelar su compra, por favor contactese con el administador</h4>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>