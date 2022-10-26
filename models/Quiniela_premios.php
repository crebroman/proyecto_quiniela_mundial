<?php
 class Quiniela_premios extends Conectar{
       public function get_quiniela_premios( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM quiniela_premios ";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_quiniela_premios_x_id($quiniela_prem_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM quiniela_premios WHERE id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$quiniela_prem_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_quiniela_premios($quiniela_prem_id,$quiniela_prem_quiniela,$quiniela_prem_puesto,$quiniela_prem_premio,$quiniela_prem_descripcion){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO quiniela_premios (id,quiniela,puesto,premio,descripcion) VALUES (?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_prem_id);
            $sql->bindValue(2,$quiniela_prem_quiniela);
            $sql->bindValue(3,$quiniela_prem_puesto);
            $sql->bindValue(4,$quiniela_prem_premio);
            $sql->bindValue(5,$quiniela_prem_descripcion);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_quiniela_premios($quiniela_prem_id,$quiniela_prem_quiniela,$quiniela_prem_puesto,$quiniela_prem_premio,$quiniela_prem_descripcion){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE quiniela_premios set 
                  quiniela=?,
                  puesto=?,
                  premio=?,
                  descripcion=? 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_prem_quiniela);
            $sql->bindValue(2,$quiniela_prem_puesto);
            $sql->bindValue(3,$quiniela_prem_premio);
            $sql->bindValue(4,$quiniela_prem_descripcion);
            $sql->bindValue(5,$quiniela_prem_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_quiniela_premios($quiniela_prem_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="DELETE from quiniela_premios 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_prem_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>