<?php

 include_once 'conexion.php';
   $objeto = new Conexion();
   $conexion = $objeto->Conectar(); 

     $_POST = json_decode(file_get_contents("php://input"), true);

     $opcion = (isset($_POST['opcion']))  ? $_POST['opcion'] : '';

     $id = (isset($_POST['id'])) ? $_POST['id'] : '';
     $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
     $apellidop = (isset($_POST['apellidop'])) ? $_POST['apellidop'] : '';
     $apellidom = (isset($_POST['apellidom'])) ? $_POST['apellidom'] : '';
     $fechadenacimiento = (isset($_POST['fechanacimiento'])) ? $_POST['fechanacimiento'] : '';
     $telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : ''; 
     $genero = (isset($_POST['genero'])) ? $_POST['genero'] : '';
     $oficio = (isset($_POST['oficio'])) ? $_POST['oficio'] : '';
     $direccion= (isset($_POST['direccion'])) ? $_POST['direccion'] : '';
     $correoelectronico = (isset($_POST['correoelectronico'])) ? $_POST['correoelectronico'] : '';
     $contrasenia = (isset($_POST['contrasenia'])) ? $_POST['contrasenia'] : '';
    
     //cosos para la tblempleador  
     $idempleador = (isset($_POST['idempleador'])) ? $_POST['idempleador'] : '';
     $nombreempresa = (isset($_POST['nombreempresa'])) ? $_POST['nombreempresa'] : '';
     $nombreencargado = (isset($_POST['nombreencargado'])) ? $_POST['nombreencargado'] : '';
     $giro = (isset($_POST['giro'])) ? $_POST['giro'] : ''; 
     
     switch ($opcion) {
        case 1: //nuevo postulante
            $consulta = "INSERT INTO `tblpostulante` (`IdPostulante`, `Nombre`, `Apellido Pa`, `Apellido Ma`, `Fecha_de_nacimiento`, `Numero de telefono`, `Genero`, `Direccion`, `Correo electronico`, `Oficio`, `Contrasenia`) 
            VALUES (NULL, '$nombre', '$apellidop', '$apellidom', '$fechadenacimiento', '$telefono', '$genero', NULL, '$correoelectronico', '$oficio', '$contrasenia');";
            $resultado = $conexion->prepare($consulta);
            $resultado->excute();
            break;
             
        case  2: //nuevo empleador
            $consulta = "INSERT INTO `tblempleador` (`IdEmpleador`, `Nombre Empresa`, `Nombre Responsable`, `Direccion`, `Telefono`, `Giro`, `Correo`, `Contrasenia`) 
            VALUES ($idempleador, $nombreempresa, '$nombreencargado', NULL , $telefono, $giro, $correoelectronico, $contrasenia);";
            $resultado = $conexion->prepare($consulta);
            $resultado->excute();
            break;    
        case  3: //modificacion postulante
            $consulta = "UPDATE `tblpostulante` SET `Numero de telefono` = '$telefono', `Genero` = '$genero', `Correo electronico` = '$correoelectronico', `Oficio` = '$oficio', `Contrasenia` = '$contrasenia' WHERE `tblpostulante`.`IdPostulante` = 1;";
            $resultado = $conexion->prepare($consulta); 
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            $resultado->excute();
            break; 
        case 4: //modificacion empleador
            $consulta = "UPDATE `tblempleador` SET 'Nombre Empresa'= '$nombreempresa', 'Nombre Responsable'= '$nombreencargado'   `Correo` = '$correoelectronico' WHERE `tblempleador`.`IdEmpleador` = 1;";
            $consulta = $conexion->prepre($consulta);  
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            $resultado->excute();
            break;
        case 5: //eliminar en postulante
            $consulta = "DELETE FROM tblpostulante WHERE idpostulante='$idpostulante' ";
            $resultado = $conexion->prepare($consulta);
            $resultado->excute();
            break;
        case 6: //eliminar empleador 
            $consulta = "DELETE FROM tblempleador WHERE idempleador='$idemplador' ";
            $resultado = $conexion->prepare($consulta);
            $resultado->excute();
            break;   
        case 7: //seleccionar 
            $consulta = "SELECT * FROM tblempleador";
            $resultado = $conexion->prepare($consulta);
            $resultado->excute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
            break;
              
        } 
 print json_encode($data, JSON_UNESCAPED_UNICODE);
 $conexion = NULL; 
?>