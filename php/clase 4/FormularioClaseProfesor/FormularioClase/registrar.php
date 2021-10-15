<?php 
    //Incluyo el archivo que contiene la conexion a la base de datos 
    include("con_db.php");
    
    //TOMO LOS DATOS QUE SE CARGAN DENTRO DE LOS INPUTS

    //1er if = verifica si se apreto el boton "enviar"
    if(isset($_POST['register'])){
        //2do if = verifica si los campos estan vacios (si longitud de la cadena >= 1)
        if( strlen($_POST['nombre']) >= 1 && 
            strlen($_POST['apellido']) >= 1 &&
            strlen($_POST['documento']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['orden']) >= 1){

            $nombre = trim( $_POST['nombre'] );  //trim(): elimina espacios del inicio y del final
            $apellido = trim( $_POST['apellido']);
            $documento = trim( $_POST['documento']);
            $email = trim( $_POST['email']);
            $celular = trim( $_POST['celular']);
            $orden = trim( $_POST['orden']);
            $motivo = trim( $_POST['motivo']);
            
            
            //Copio lo generado en mysql para generar la consulta a la base de datos
            //$consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name', '$email', '$fechareg')";

            $consulta = "INSERT INTO datos(nombre, apellido, dni, email, celular, orden, motivo) VALUES ('$nombre','$apellido','$documento','$email','$celular','$orden','$motivo')"; 
            $resultado = mysqli_query($conex, $consulta);
            
            if($resultado){
                ?>
                    <h3 class="ok"> ¡Te has inscripto correctamente! </h3>
                <?php            
            } else {
                ?>
                    <h3 class="bad"> ¡Ha ocurrido un error! </h3>
                <?php            
            } 
        } else { //Si los campos estan vacios muestra este mensaje
            ?>
                <h3 class="bad"> ¡Por favor complete los campos! </h3>
            <?php            
        }
    }
    

    
?>
