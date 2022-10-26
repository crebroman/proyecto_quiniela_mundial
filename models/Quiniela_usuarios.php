<?php
 class Quiniela_usuarios extends Conectar{
       public function get_quiniela_usuarios( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM quiniela_usuarios WHERE estado='A'";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_quiniela_usuarios_x_id($quiniela_usr_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM quiniela_usuarios id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$quiniela_usr_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_quiniela_usuarios($quiniela_usr_id,$quiniela_usr_quiniela,$quiniela_usr_usuario){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO quiniela_usuarios (id,quiniela,usuario,password,estado) VALUES (?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_usr_id);
            $sql->bindValue(2,$quiniela_usr_quiniela);
            $sql->bindValue(3,$quiniela_usr_usuario);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_quiniela_usuarios($quiniela_usr_id,$quiniela_usr_quiniela,$quiniela_usr_usuario){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE quiniela_usuarios set 
                  quiniela=?,
                  usuario=?,
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_usr_quiniela);
            $sql->bindValue(2,$quiniela_usr_usuario);
            $sql->bindValue(3,$quiniela_usr_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_quiniela_usuarios($quiniela_usr_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="DELETE from quiniela_usuarios 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_usr_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>