<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Administradores.php");
$administradores = new Administradores();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$administradores->get_administradores();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$administradores->get_administradores_x_id($body["adm_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$administradores->insert_administradores($body["admins_id"],$body["admins_nombre"],$body["admins_correo"],$body["admins_password"],$body["admins_estado"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$administradores->update_administradores($body["admins_id"],$body["admins_nombre"],$body["admins_correo"],$body["admins_password"],$body["admins_estado"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$administradores->delete_administradores($body["admins_id"]);
        echo json_encode("Delete Correcto");

     break;

}

?>

