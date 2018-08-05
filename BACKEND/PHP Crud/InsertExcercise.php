<?php

require_once 'Conexion.php';


if(!isset($_GET['opt'])) {
        $inputJSON = file_get_contents('php://input');
        $input = json_decode($inputJSON, TRUE);
        $Nombre = $input['nombre'];
        $Animacion= $input['animacion'];
        $con->query("SET NAMES 'utf8'");
        if ($con->connect_error) {
            echo json_encode('false');
        }
        else{
            
            $query = "INSERT INTO Ejercicio VALUES (0,'xddxdxdxdddxdd', 'Comino'    )";
            $rs = $con->query($query);
            //el kpo es gei xddddd
            
            if ($rs) {
                echo json_encode('true');
            }
            else {
                echo json_encode('false');
            }
        }
    }
    
?>
