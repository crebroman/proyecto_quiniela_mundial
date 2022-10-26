<?php
 class Paises extends Conectar{
       public function get_paises( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM paises ";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_paises_x_id($adm_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM paises WHERE id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$adm_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_paises($paises_id,$paises_nombre,$paises_iso){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO paises (id,nombre,iso) VALUES (?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$paises_id);
            $sql->bindValue(2,$paises_nombre);
            $sql->bindValue(3,$paises_iso);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_paises($paises_id,$paises_nombre,$paises_iso){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE paises set 
                  nombre=?,
                  iso=?,
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$paises_nombre);
            $sql->bindValue(2,$paises_iso);
            $sql->bindValue(3,$paises_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_paises($paises_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="DELETE from paises 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$paises_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>