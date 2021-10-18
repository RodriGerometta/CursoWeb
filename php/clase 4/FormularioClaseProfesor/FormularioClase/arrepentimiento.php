<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
    	<h1>Arrepentimiento de compra</h1>
    	<input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="number" name="documento" placeholder="DNI">
    	<input type="email" name="email" placeholder="Email">
        <input type="tel" name="celular" placeholder="Celular">
        <input type="number" name="orden" placeholder="Número de orden">
        <input type="text" name="motivo" maxlength="150" placeholder="Motivo de revocacion de la compra">
    	<input type="submit" name="register">
    </form>

    <!--Incluyo el archivo PHP-->
    <?php 
        include("registrar.php");
    ?>
</body>
</html>