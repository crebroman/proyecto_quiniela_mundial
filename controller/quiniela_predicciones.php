<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Quiniela_predicciones.php");
$quiniela_predicciones = new Quiniela_predicciones();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$quiniela_predicciones->get_quiniela_predicciones();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$quiniela_predicciones->get_quiniela_predicciones_x_id($body["quiniela_pred_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$quiniela_predicciones->insert_quiniela_predicciones($body["quiniela_pred_id"],$body["quiniela_pred_juego"],$body["quiniela_pred_quiniela"],$body["quiniela_pred_usuario"],$body["quiniela_pred_gol_1"],$body["quiniela_pred_gol_2"],$body["quiniela_pred_juego_1"],$body["quiniela_pred_juego_2"]);
        echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$quiniela_predicciones->update_quiniela_predicciones($body["quiniela_pred_id"],$body["quiniela_pred_juego"],$body["quiniela_pred_quiniela"],$body["quiniela_pred_usuario"],$body["quiniela_pred_gol_1"],$body["quiniela_pred_gol_2"],$body["quiniela_pred_juego_1"],$body["quiniela_pred_juego_2"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$quiniela_predicciones->delete_quiniela_predicciones($body["quiniela_pred_id"]);
        echo json_encode("Datos Eliminados Correctamente");

     break;

}

?>

