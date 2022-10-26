<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Quiniela_usuarios.php");
$quiniela_usuarios = new Quiniela_usuarios();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$quiniela_usuarios->get_quiniela_usuarios();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$quiniela_usuarios->get_quiniela_usuarios_x_id($body["quiniela_usr_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$quiniela_usuarios->insert_quiniela_usuarios($body["quiniela_usr_id"],$body["quiniela_usr_quiniela"],$body["quiniela_usr_usuario"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$quiniela_usuarios->update_quiniela_usuarios($body["quiniela_usr_id"],$body["quiniela_usr_quiniela"],$body["quiniela_usr_usuario"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$quiniela_usuarios->delete_quiniela_usuarios($body["quiniela_usr_id"]);
        echo json_encode("Delete Correcto");

     break;

}

?>

