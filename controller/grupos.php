<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Administradores.php");
$grupos = new Grupos();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$grupos->get_grupos();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$grupos->get_grupos_x_id($body["grupo_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$grupos->insert_grupos($body["grupo_id"],$body["grupo_codigo"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$grupos->update_grupos($body["grupo_id"],$body["grupo_codigo"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$grupos->delete_grupos($body["grupo_id"]);
        echo json_encode("Eliminado Correctamente");

     break;

}

?>

