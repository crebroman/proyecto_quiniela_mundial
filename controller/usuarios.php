<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Usuarios.php");
$usuarios = new Usuarios();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$usuarios->get_usuarios();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$usuarios->get_usuarios_x_id($body["usuario_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$usuarios->insert_usuarios($body["usuario_id"],$body["usuario_nombre"],$body["usuario_correo"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$usuarios->update_usuarios($body["usuario_id"],$body["usuario_nombre"],$body["usuario_correo"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$usuarios->delete_usuarios($body["usuario_id"]);
        echo json_encode("Datos Eliminados Correctamente");

     break;

}

?>

