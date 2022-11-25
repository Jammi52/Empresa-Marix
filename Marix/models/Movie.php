<?php
require_once "./config/dataconnection.php";

class Movie extends conexion{

    public function _construct(){
        $this->conectar();
    }

       public function insertMovie ($nombre, $categoria, $duracion){
        $sql = "INSERT INTO peliculas (nombre, categoria, duracion) Values ('$nombre', '$categoria', '$duracion')"; 
        $result = mysqli_query($this->conectar(), $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function getMovies (){
     $sql = "SELECT * FROM datos";
     $result = mysqli_query($this->conectar(), $sql);
     return $result;  
    }

    public function deleteMovie($idPelicula){
        $sql = "DELETE FROM peliculas where idPelicula = '$idPelicula'";
        $result = mysqli_query($this->conectar(), $sql);   

        if($result){
            Header ("Location: index.php");
        }else{
echo "Hubo un error al intentar eliminar el dato";
        }
    }

}
?>