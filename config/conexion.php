<?php

class Conectar{

  protected $dbq;

     protected function Conexion(){
      try  {
            $conectar = $this ->dbq = new PDO("mysql:local=localhost;dbname=quiniela_mundial","root","");
            return $conectar;
     } 
       catch (Exception $e) 
        {
            print "Error BD:" .$e->getMessage() . "<br/>";
            die();

        }
    }


  public function set_names(){
       return $this->dbq->query("SET NAMES 'utf8'");
  }

}
?>