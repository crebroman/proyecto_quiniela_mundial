<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Quinielas.php");
$quinielas = new Quinielas();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$quinielas->get_quinielas();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$quinielas->get_quinielas_x_id($body["quiniela_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$quinielas->insert_quinielas($body["quiniela_id"],$body["quiniela_nombre"],$body["quiniela_tipo_de_quiniela"],$body["quiniela_descripcion"],$body["quiniela_creado_por"],$body["quiniela_fecha_de_creacion"],$body["quiniela_codigo_compartir"],$body["quiniela_ganador"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$quinielas->update_quinielas($body["quiniela_id"],$body["quiniela_nombre"],$body["quiniela_tipo_de_quiniela"],$body["quiniela_descripcion"],$body["quiniela_creado_por"],$body["quiniela_fecha_de_creacion"],$body["quiniela_codigo_compartir"],$body["quiniela_ganador"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$quinielas->delete_quinielas($body["quiniela_id"]);
        echo json_encode("Datos Eliminados Correctamente");

     break;

}

?>

