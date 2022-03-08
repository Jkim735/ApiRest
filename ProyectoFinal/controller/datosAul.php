<?php
include '../model/insertar.php';
$codigo=$_POST['c'];
$nombre=$_POST['n'];
$capacidad=$_POST['ca'];
$categoria=$_POST['cat'];
if(isset($_POST['c'])!=""&&isset($_POST['n'])!=""&&isset($_POST['ca'])!=""&&isset($_POST['cat'])!=""){
    $instacia=new Insertar();
    $veri=$instacia->Aulainsert($codigo,$nombre,$capacidad,$categoria);
    if($veri){
        echo "<script>window.location='../view/aulas.html'</script>";
    }
}
?>