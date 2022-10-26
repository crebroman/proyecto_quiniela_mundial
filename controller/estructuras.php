<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Estructuras.php");
$estructuras = new Estructuras();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$estructuras->get_estructuras();
         echo json_encode($datos);

      break;

      case "GetId": 
         $datos=$estructuras->get_estructuras_x_id($body["est_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$estructuras->insert_estructuras($body["est_id"],$body["est_nombre"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$estructuras->update_estructuras($body["est_id"],$body["est_nombre"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$estructuras->delete_estructuras($body["est_id"]);
        echo json_encode("Delete Correcto");

     break;

}

?>

