<?php
 class Quinielas extends Conectar{
       public function get_quinielas( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM quinielas WHERE creado_por='A'";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_quinielas_x_id($quiniela_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM quinielas WHERE  id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$quiniela_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_quinielas($quiniela_id,$quiniela_nombre,$quiniela_tipo_de_quiniela,$quiniela_descripcion,$quiniela_creado_por,$quiniela_fecha_de_creacion,$quiniela_codigo_compartir,$quiniela_ganador){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO quinielas (id,nombre,tipo_de_quiniela,descripcion,creado_por,fecha_de_creacion,codigo_compartir,ganador) VALUES (?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_id);
            $sql->bindValue(2,$quiniela_nombre);
            $sql->bindValue(3,$quiniela_tipo_de_quiniela);
            $sql->bindValue(4,$quiniela_descripcion);
            $sql->bindValue(5,$quiniela_creado_por);
            $sql->bindValue(6,$quiniela_fecha_de_creacion);
            $sql->bindValue(7,$quiniela_codigo_compartir);
            $sql->bindValue(8,$quiniela_ganador);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_quinielas($quiniela_id,$quiniela_nombre,$quiniela_tipo_de_quiniela,$quiniela_descripcion,$quiniela_creado_por,$quiniela_fecha_de_creacion,$quiniela_codigo_compartir,$quiniela_ganador){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE quinielas set 
                  nombre=?,
                  tipo_de_quiniela=?,
                  descripcion=?,
                  creado_por=?
                  fecha_de_creacion=? 
                  codigo_compartir=?
                  ganador=?
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_nombre);
            $sql->bindValue(2,$quiniela_tipo_de_quiniela);
            $sql->bindValue(3,$quiniela_descripcion);
            $sql->bindValue(4,$quiniela_creado_por);
            $sql->bindValue(5,$quiniela_fecha_de_creacion);
            $sql->bindValue(6,$quiniela_codigo_compartir);
            $sql->bindValue(7,$quiniela_ganador);
            $sql->bindValue(8,$quiniela_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_quinielas($quiniela_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="DELETE from quinielas
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>