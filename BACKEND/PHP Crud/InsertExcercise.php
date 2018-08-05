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
<<<<<<< HEAD
            $query1 = "INSERT INTO Incripcion VALUES (0,$Nombre, $Animacion)";
            $rs = $con->query($query);

=======
            
            $query = "INSERT INTO Ejercicio VALUES (0,'xddxdxdxdddxdd', 'Comino'    )";
            $rs = $con->query($query);
>>>>>>> 3d0607493424ef3fac46471df1e75efb23680e4d
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
