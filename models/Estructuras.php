<?php
 class Estructuras  extends Conectar{
       public function get_estructuras( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM estructuras ";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_estructuras_x_id($est_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM estructuras WHERE id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$est_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_estructuras($est_id,$est_nombre){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO estructuras (id,nombre) VALUES (?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$est_id);
            $sql->bindValue(2,$est_nombre);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_estructuras($est_id,$est_nombre){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE estructuras set 
                  nombre=?,
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$est_nombre);
            $sql->bindValue(2,$est_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_estructuras($est_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="DELETE from estructuras  
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$est_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>