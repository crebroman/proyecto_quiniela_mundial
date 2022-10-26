<?php
header('Content-Type: application/json');


require_once("../config/conexion.php");
require_once("../models/Paises_grupos.php");
$paises_grupos = new Paises_grupos();

$body = json_decode(file_get_contents("php://input"),true);


switch($_GET["op"]){
      case "GetAll":
         $datos=$paises_grupos->get_paises_grupos();
         echo json_encode($datos);

      break;

      case "GetId":
         $datos=$paises_grupos->get_paises_grupos_x_id($body["paisgrup_id"]);
        echo json_encode($datos);

      break;
      
      
      case "Insert":
        $datos=$paises_grupos->insert_paises_grupos($body["paisgrup_id"],$body["paisgrup_pais"],$body["paisgrup_grupo"]);
       echo "Se Registro Correctamente";

     break;

     case "Update":
        $datos=$paises_grupos->update_paises_grupos($body["paisgrup_id"],$body["paisgrup_pais"],$body["paisgrup_grupo"]);
       echo "Update Correcto";

     break;

     case "Delete":
        $datos=$paises_grupos->delete_paises_grupos($body["paisgrup_id"]);
        echo json_encode("Datos Eliminados Correctamente");

     break;

}

?>

