<?php
 class Ubicaciones extends Conectar{
       public function get_ubicaciones( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM ubicaciones ";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_ubicaciones_x_id($ubicaciones_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM ubicaciones WHERE id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$ubicaciones_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_ubicaciones($ubicaciones_id,$ubicaciones_nombre,$ubicaciones_ciudad){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO ubicaciones (id,nombre,ciudad) VALUES (?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$ubicaciones_id);
            $sql->bindValue(2,$ubicaciones_nombre);
            $sql->bindValue(3,$ubicaciones_ciudad);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_ubicaciones($ubicaciones_id,$ubicaciones_nombre,$ubicaciones_ciudad){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE ubicaciones set  nombre=?, ciudad=?  
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$ubicaciones_nombre);
            $sql->bindValue(2,$ubicaciones_ciudad);
            $sql->bindValue(3,$ubicaciones_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_ubicaciones($ubicaciones_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="DELETE from ubicaciones 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$ubicaciones_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>