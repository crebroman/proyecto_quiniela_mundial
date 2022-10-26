<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Quiniela_premios.php");
$quiniela_premios = new Quiniela_premios();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$quiniela_premios->get_quiniela_premios();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$quiniela_premios->get_quiniela_premios_x_id($body["quiniela_prem_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$quiniela_premios->insert_quiniela_premios($body["quiniela_prem_id"],$body["quiniela_prem_quiniela"],$body["quiniela_prem_puesto"],$body["quiniela_prem_premio"],$body["quiniela_prem_descripcion"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$quiniela_premios->update_quiniela_premios($body["quiniela_prem_id"],$body["quiniela_prem_quiniela"],$body["quiniela_prem_puesto"],$body["quiniela_prem_premio"],$body["quiniela_prem_descripcion"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$quiniela_premios->delete_quiniela_premios($body["quiniela_prem_id"]);
        echo json_encode("Delete Correcto");

     break;

}

?>

