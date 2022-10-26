<?php
 class Administradores extends Conectar{
       public function get_administradores( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM administradores WHERE estado='A'";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_administradores_x_id($adm_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM administradores WHERE estado='A' and id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$adm_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_administradores($admins_id,$admins_nombre,$admins_correo,$admins_password,$admins_estado){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO administradores (id,nombre,correo,password,estado) VALUES (?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$admins_id);
            $sql->bindValue(2,$admins_nombre);
            $sql->bindValue(3,$admins_correo);
            $sql->bindValue(4,$admins_password);
            $sql->bindValue(5,$admins_estado);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_administradores($admins_id,$admins_nombre,$admins_correo,$admins_password,$admins_estado){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE administradores set 
                  nombre=?,
                  correo=?,
                  password=?,
                  estado=? 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$admins_nombre);
            $sql->bindValue(2,$admins_correo);
            $sql->bindValue(3,$admins_password);
            $sql->bindValue(4,$admins_estado);
            $sql->bindValue(5,$admins_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_administradores($admins_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE administradores set 
                  estado='I' 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$admins_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>