<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Paises.php");
$paises = new Paises();

$body = json_decode(file_get_contents("php://input"),true);

switch($_GET["op"]){
      case "GetAll":
         $datos=$paises->get_paises();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$paises->get_paises_x_id($body["paises_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$paises->insert_paises($body["paises_id"],$body["paises_nombre"],$body["paises_iso"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$paises->update_paises($body["paises_id"],$body["paises_nombre"],$body["paises_iso"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$paises->delete_paises($body["paises_id"]);
        echo json_encode("Datos Eliminados Correctamente");

     break;

}

?>

