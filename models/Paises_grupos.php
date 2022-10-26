<?php
 class Paises_grupos extends Conectar{
       public function get_paises_grupos( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM paises_grupos ";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_paises_grupos_x_id($paisgrup_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM paises_grupos WHERE estado='A' and id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$paisgrup_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_paises_grupos($paisgrup_id,$paisgrup_pais,$paisgrup_grupo){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO paises_grupos (id,pais,grupo) VALUES (?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$paisgrup_id);
            $sql->bindValue(2,$paisgrup_pais);
            $sql->bindValue(3,$paisgrup_grupo);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_paises_grupos($paisgrup_id,$paisgrup_pais,$paisgrup_grupo){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE paises_grupos set 
                  pais=?,
                  grupo=?,
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$paisgrup_pais);
            $sql->bindValue(2,$paisgrup_grupo);
            $sql->bindValue(3,$paisgrup_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_paises_grupos($paisgrup_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="DELETE from paises_grupos 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$paisgrup_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>