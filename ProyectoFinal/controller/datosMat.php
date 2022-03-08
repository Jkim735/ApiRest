<?php
include '../model/insertar.php';
$codigo=$_POST['c'];
$materia=$_POST['n'];
$docente=$_POST['do'];
$duracion=$_POST['du'];
$paralelo=$_POST['pa'];
$dia=$_POST['di'];
if(isset($_POST['c'])!=""&&isset($_POST['n'])!=""&&isset($_POST['do'])!=""&&isset($_POST['du'])!=""&&isset($_POST['pa'])!=""&&isset($_POST['di'])!=""){
    $instacia=new Insertar();
    $veri=$instacia->Materiainsert($codigo,$materia,$docente,$duracion,$paralelo,$dia);
    if($veri){
        echo "<script>window.location='../view/materias.html'</script>";
    }
}
?>