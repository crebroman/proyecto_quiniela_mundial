<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Quiniela_tipos.php");
$quiniela_tipos = new Quiniela_tipos();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$quiniela_tipos->get_quiniela_tipos();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$quiniela_tipos->get_quiniela_tipos_x_id($body["quiniela_tipo_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$quiniela_tipos->insert_quiniela_tipos($body["quiniela_tipo_id"],$body["quiniela_tipo_nombre"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$quiniela_tipos->update_quiniela_tipos($body["quiniela_tipo_id"],$body["quiniela_tipo_nombre"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$quiniela_tipos->delete_quiniela_tipos($body["quiniela_tipo_id"]);
        echo json_encode("Datos eliminados Correctamente");

     break;

}

?>

