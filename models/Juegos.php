<?php
 class Juegos extends Conectar{
       public function get_juegos( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM juegos ";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_juegos_x_id($juego_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM juegos WHERE id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$juego_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_juegos($juego_id, $juego_estructura, $juego_fecha, $juego_ubicacion,$juego_jugador_1, $juego_jugador_2,$juego_goles_1,$juego_goles_2,$juego_seleccion_1,$juego_seleccion_2){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO juegos (id,estructura,fecha,ubicacion,jugador_1,jugador_2,goles_1,goles_2,seleccion_1,seleccion_2) VALUES (?,?,?,?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$juego_id);
            $sql->bindValue(2,$juego_estructura);
            $sql->bindValue(3,$juego_fecha);
            $sql->bindValue(4,$juego_ubicacion);
            $sql->bindValue(5,$juego_jugador_1);
            $sql->bindValue(6,$juego_jugador_2);
            $sql->bindValue(7,$juego_goles_1);
            $sql->bindValue(8,$juego_goles_2);
            $sql->bindValue(9,$juego_seleccion_1);
            $sql->bindValue(10,$juego_seleccion_2);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_juegos($juego_id, $juego_estructura, $juego_fecha, $juego_ubicacion,$juego_jugador_1, $juego_jugador_2,$juego_goles_1,$juego_goles_2,$juego_seleccion_1,$juego_seleccion_2){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE juegos set 
                  estructura=?,
                  fecha=?,
                  ubicacion=?,
                  jugador_1=?,
                  jugador_2=?,
                  goles_1=?,
                  goles_2=?,
                  seleccion_1=?,
                  seleccion_2=? 
                  where 
                   id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$juego_estructura);
            $sql->bindValue(2,$juego_fecha);
            $sql->bindValue(3,$juego_ubicacion);
            $sql->bindValue(4,$juego_jugador_1);
            $sql->bindValue(5,$juego_jugador_2);
            $sql->bindValue(6,$juego_goles_1);
            $sql->bindValue(7,$juego_goles_2);
            $sql->bindValue(8,$juego_seleccion_1);
            $sql->bindValue(9,$juego_seleccion_2);
            $sql->bindValue(10,$juego_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_juegos($juego_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="DELETE from juegos  
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$juego_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>