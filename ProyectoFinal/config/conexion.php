<?php
class Conectar{
    public function conexion(){
        $conect=mysqli_connect("localhost","root","","NUEVO");
        return $conect;
    }
}
?>