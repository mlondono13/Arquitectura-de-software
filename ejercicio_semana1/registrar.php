<?php 
    include("conectar_bd.php");

    if(isset($_POST["register"])){
        if(strlen($_POST['nombre']>=1)){
            $nombre = $_POST['nombre'];
            $consulta = "INSERT INTO Registro(nombre) VALUES ('$nombre')";
            $resultado = mysqli_query($conectar,$consulta);
            if ($resultado) {
                ?>
                <h3>Te has registrado</h3>
                <?php
            }
        }
    }


?>