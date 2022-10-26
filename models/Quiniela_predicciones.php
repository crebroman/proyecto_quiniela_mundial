<?php
 class Quiniela_predicciones extends Conectar{
       public function get_quiniela_predicciones( ){
           $conectar= parent::conexion();
           parent ::set_names();
           $sql="SELECT * FROM quiniela_predicciones ";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

       }


       public function get_quiniela_predicciones_x_id($quiniela_pred_id){
          $conectar= parent::conexion();
          parent ::set_names();
          $sql="SELECT * FROM quiniela_predicciones WHERE id = ?";
          $sql=$conectar->prepare($sql);
          $sql->bindValue(1,$quiniela_pred_id);
          $sql->execute();
          return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);

        }

        public function insert_quiniela_predicciones($quiniela_pred_id,$quiniela_pred_juego,$quiniela_pred_quiniela,$quiniela_pred_usuario,$quiniela_pred_gol_1,$quiniela_pred_gol_2,$quiniela_pred_juego_1,$quiniela_pred_juego_2){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="INSERT INTO quiniela_predicciones (id,juego,quiniela,usuario,gol_1) VALUES (?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_pred_id);
            $sql->bindValue(2,$quiniela_pred_juego);
            $sql->bindValue(3,$quiniela_pred_quiniela);
            $sql->bindValue(4,$quiniela_pred_usuario);
            $sql->bindValue(5,$quiniela_pred_gol_1);
            $sql->bindValue(6,$quiniela_pred_gol_2);
            $sql->bindValue(7,$quiniela_pred_juego_1);
            $sql->bindValue(8,$quiniela_pred_juego_2);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function update_quiniela_predicciones($quiniela_pred_id,$quiniela_pred_juego,$quiniela_pred_quiniela,$quiniela_pred_usuario,$quiniela_pred_gol_1,$quiniela_pred_gol_2,$quiniela_pred_juego_1,$quiniela_pred_juego_2){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="UPDATE quiniela_predicciones set 
                  juego=?,
                  quiniela=?,
                  usuario=?,
                  gol_1=? 
                  gol_2=? 
                  juego_1=? 
                  juego_2=? 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_pred_juego);
            $sql->bindValue(2,$quiniela_pred_quiniela);
            $sql->bindValue(3,$quiniela_pred_usuario);
            $sql->bindValue(4,$quiniela_pred_gol_1);
            $sql->bindValue(5,$quiniela_pred_gol_2);
            $sql->bindValue(6,$quiniela_pred_juego_1);
            $sql->bindValue(7,$quiniela_pred_juego_2);
            $sql->bindValue(8,$quiniela_pred_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }

          public function delete_quiniela_predicciones($quiniela_pred_id){
            $conectar= parent::conexion();
            parent ::set_names();
            $sql="DELETE from quiniela_predicciones 
                  where 
                  id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$quiniela_pred_id);
            $sql->execute();
            return $resultado=$sql->fetchall(PDO::FETCH_ASSOC);
  
          }         
 }

?>