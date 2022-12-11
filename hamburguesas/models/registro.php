<?php
require_once "./config/dataconnection.php";

class Movie extends conexion{

    public function _construct(){
        $this->conectar();
    }

       public function insertMovie ($Usuario, $Email, $Contraseña){
        $sql = "INSERT INTO Datos (Usuario, Email, Contraseña) Values ('$Usuario', '$Email', '$Contraseña')"; 
        $result = mysqli_query($this->conectar(), $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function getMovies (){
     $sql = "SELECT * FROM Datos";
     $result = mysqli_query($this->conectar(), $sql);
     return $result;  
    }

    public function deleteMovie($idUsuario){
        $sql = "DELETE FROM Datos where idUsuario = '$idUsuario'";
        $result = mysqli_query($this->conectar(), $sql);   

        if($result){
            Header ("Location: index.php");
        }else{
echo "Hubo un error al intentar eliminar el dato";
        }
    }

}
?>