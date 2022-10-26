<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Juegos.php");
$juegos = new Juegos();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$juegos->get_juegos();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$juegos->get_juegos_x_id($body["juego_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$juegos->insert_juegos($body["juego_id"],$body["juego_estructura"],$body["juego_fecha"],$body["juego_ubicacion"],$body["juego_jugador_1"],$body["juego_jugador_2"],$body["juego_goles_1"],$body["juego_goles_2"],$body["juego_seleccion_1"],$body["juego_seleccion_2"]);
        echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$juegos->update_juegos($body["juego_id"],$body["juego_estructura"],$body["juego_fecha"],$body["juego_ubicacion"],$body["juego_jugador_1"],$body["juego_jugador_2"],$body["juego_goles_1"],$body["juego_goles_2"],$body["juego_seleccion_1"],$body["juego_seleccion_2"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$juegos->delete_juegos($body["juego_id"]);
        echo json_encode("Delete Correcto");

     break;

}

?>

