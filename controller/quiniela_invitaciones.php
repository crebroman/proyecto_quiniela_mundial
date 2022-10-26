<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Quiniela_invitaciones.php");
$quiniela_invitaciones = new Quiniela_invitaciones();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$quiniela_invitaciones->get_quiniela_invitaciones();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$quiniela_invitaciones->get_quiniela_invitaciones_x_id($body["quiniela_inv_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$quiniela_invitaciones->insert_quiniela_invitaciones($body["quiniela_inv_id"],$body["quiniela_inv_usuario"],$body["quiniela_inv_quiniela"],$body["quiniela_inv_fecha_de_creacion"],$body["quiniela_inv_status"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$quiniela_invitaciones->update_quiniela_invitaciones($body["quiniela_inv_id"],$body["quiniela_inv_usuario"],$body["quiniela_inv_quiniela"],$body["quiniela_inv_fecha_de_creacion"],$body["quiniela_inv_status"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$quiniela_invitaciones->delete_quiniela_invitaciones($body["quiniela_inv_id"]);
        echo json_encode("Delete Correcto");

     break;

}

?>

