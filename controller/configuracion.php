<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Configuracion.php");
$configuracion = new Configuracion();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$configuracion->get_configuracion();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$configuracion->get_configuracion_x_id($body["conf_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$administradores->insert_administradores($body["conf_id"],$body["conf_nombre"],$body["conf_correo"],$body["conf_password"],$body["conf_estado"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$administradores->update_administradores($body["conf_id"],$body["conf_nombre"],$body["conf_correo"],$body["conf_password"],$body["conf_estado"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$administradores->delete_administradores($body["conf_id"]);
        echo json_encode("Delete Correcto");

     break;

}

?>

