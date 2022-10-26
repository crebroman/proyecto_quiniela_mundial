<?php
 class Usuarios extends Conectar{
       public function get_usuarios( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM usuarios ";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_usuarios_x_id($usuario_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM usuarios WHERE id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$usuario_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_usuarios($usuario_id,$usuario_nombre,$usuario_correo){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO usuarios (id,nombre,correo,password,estado) VALUES (?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usuario_id);
            $sql->bindValue(2,$usuario_nombre);
            $sql->bindValue(3,$usuario_correo);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_usuarios($usuario_id,$usuario_nombre,$usuario_correo){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE usuarios set 
                  nombre=?,
                  correo=?               
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usuario_nombre);
            $sql->bindValue(2,$usuario_correo);
            $sql->bindValue(3,$usuario_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_usuarios($usuario_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="DELETE from usuarios 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$usuario_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>