<?php
 class Quiniela_invitaciones extends Conectar{
       public function get_quiniela_invitaciones( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM quiniela_invitaciones ";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_quiniela_invitaciones_x_id($quiniela_inv_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM quiniela_invitaciones WHERE id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$quiniela_inv_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_quiniela_invitaciones($quiniela_inv_id,$quiniela_inv_usuario,$quiniela_inv_quiniela,$quiniela_inv_fecha_de_creacion,$quiniela_inv_status){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO quiniela_invitaciones (id,usuario,quiniela,fecha_de_creacion,status) VALUES (?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_inv_id);
            $sql->bindValue(2,$quiniela_inv_usuario);
            $sql->bindValue(3,$quiniela_inv_quiniela);
            $sql->bindValue(4,$quiniela_inv_fecha_de_creacion);
            $sql->bindValue(5,$quiniela_inv_status);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_quiniela_invitaciones($quiniela_inv_id,$quiniela_inv_usuario,$quiniela_inv_quiniela,$quiniela_inv_fecha_de_creacion,$quiniela_inv_status){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE quiniela_invitaciones set 
                  usuario=?,
                  quiniela=?,
                  fecha_de_creacion=?,
                  status=? 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_inv_usuario);
            $sql->bindValue(2,$quiniela_inv_quiniela);
            $sql->bindValue(3,$quiniela_inv_fecha_de_creacion);
            $sql->bindValue(4,$quiniela_inv_status);
            $sql->bindValue(5,$quiniela_inv_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_quiniela_invitaciones($quiniela_inv_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="Delete from quiniela_invitaciones  
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_inv_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>