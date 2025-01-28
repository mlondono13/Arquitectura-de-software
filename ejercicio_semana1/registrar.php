<?php 
    include("conectar_bd.php");

    if(isset($_POST["register"])){
        if(strlen($_POST['name']>=1)){
            $name = $_POST['name'];
            $consulta = "INSERT INTO Registro(nombre) VALUES ('$name')";
            $resultado = mysqli_query($conectar,$consulta);
            if ($resultado) {
                ?>
                <h3>Te has registrado</h3>
                <?php
            }
        }
    }


?>