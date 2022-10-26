<?php
 class Configuracion extends Conectar{
       public function get_configuracion( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM configuracion";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_configuracion_x_id($conf_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM configuracion WHERE id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$conf_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_configuracion($conf_id,$conf_nombre,$conf_valor){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO configuracion (id,nombre,valor) VALUES (?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$conf_id);
            $sql->bindValue(2,$conf_nombre);
            $sql->bindValue(3,$conf_valor);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_configuracion($conf_id,$conf_nombre,$conf_valor){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE configuracion set 
                  nombre=?,
                  valor=?
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$conf_nombre);
            $sql->bindValue(2,$conf_valor);
            $sql->bindValue(3,$conf_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_configuracion($conf_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="Delete from configuracion  
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$conf_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>