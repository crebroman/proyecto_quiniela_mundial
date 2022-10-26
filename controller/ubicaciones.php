<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Ubicaciones.php");
$ubicaciones = new Ubicaciones();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$ubicaciones->get_ubicaciones();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$ubicaciones->get_ubicaciones_x_id($body["ubicaciones_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$ubicaciones->insert_ubicaciones($body["ubicaciones_id"],$body["ubicaciones_nombre"],$body["ubicaciones_ciudad"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$ubicaciones->update_ubicaciones($body["ubicaciones_id"],$body["ubicaciones_nombre"],$body["ubicaciones_ciudad"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$ubicaciones->delete_ubicaciones($body["ubicaciones_id"]);
        echo json_encode("Datos Eliminados Correctamente");

     break;

}

?>

