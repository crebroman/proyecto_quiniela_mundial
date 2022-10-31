<?php
 class Quiniela_tipos  extends Conectar{
       public function get_quiniela_tipos( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM quiniela_tipos ";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_quiniela_tipos_x_id($quiniela_tipo_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM quiniela_tipos WHERE id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$quiniela_tipo_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_quiniela_tipos($quiniela_tipo_id,$quiniela_tipo_nombre){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO quiniela_tipos (id,nombre) VALUES (?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_tipo_id);
            $sql->bindValue(2,$quiniela_tipo_nombre);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_quiniela_tipos($quiniela_tipo_id,$quiniela_tipo_nombre){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE quiniela_tipos set 
                  nombre=?                 
                  where 
                   id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_tipo_nombre);
            $sql->bindValue(2,$quiniela_tipo_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_quiniela_tipos($quiniela_tipo_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="DELETE from quiniela_tipos 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_tipo_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>