<?php
 class Grupos extends Conectar{
       public function get_grupos( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM grupos WHERE ";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_grupos_x_id($grupo_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM grupos WHERE id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$grupo_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_grupos($grupo_id,$grupo_codigo){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO grupos (id,codigo) VALUES (?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$grupo_id);
            $sql->bindValue(2,$grupo_codigo);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_grupos($grupo_id,$grupo_codigo){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE grupos set 
                  codigo=?
                  where  
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$grupo_codigo);
            $sql->bindValue(2,$grupo_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_grupos($grupo_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="Delete from grupos  
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$grupo_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>