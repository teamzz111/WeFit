<?php

require_once 'Conexion.php';


if(!isset($_GET['opt'])) {
        $inputJSON = file_get_contents('php://input');
        $input = json_decode($inputJSON, TRUE);
        $Nombre = $input['nombre'];
        $Cedula = $input['cedula'];
        $Edad = $input['edad'];
        $Sexo = $input['sexo'];
        $Altura = $input['altura'];
        $Grasa = $input['grasa'];
        $Pass= $input['pass'];
        $Fecha = $input['fecha'];
        $Meses = $input['meses'];
        $con->query("SET NAMES 'utf8'");
        if ($con->connect_error) {
            echo json_encode('false');
        }

        $query="SELECT * FROM Usuario WHERE Cedula = '$Cedula'";
        
        $resultado = $con->query($query);

        if ($resultado->num_rows>0) {
            echo json_encode('nel');
        }
        else{
            $query = "INSERT INTO Usuario VALUES ($Cedula, '$Nombre', $Edad, $Sexo, $Altura, $Grasa, $Pass,'Activo')";
            $rs = $con->query($query);
            $query1 = "INSERT INTO Incripcion VALUES (0,$Fecha, $Cedula, $Meses)";
            if ($rs) {
                echo json_encode('true');
            }
            else {
                echo json_encode('false');
            }
        }
    }
    
?>
