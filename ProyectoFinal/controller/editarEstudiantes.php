<?php
include '../model/editar.php';
$codigo=$_POST['co'];
$ci=$_POST['ci'];
$nombre=$_POST['n'];
$apellido=$_POST['a'];
$genero=$_POST['g'];
$fechanac=$_POST['fn'];
$edad=$_POST['e'];
$pais=$_POST['p'];
$matricula=$_POST['m'];
$telefono=$_POST['t'];
$direccion=$_POST['dir'];
if(isset($_POST['co'])!=""&&isset($_POST['ci'])!=""&&isset($_POST['n'])!=""&&isset($_POST['a'])!=""&&isset($_POST['g'])!=""&&isset($_POST['fn'])!=""&&isset($_POST['e'])!=""&&isset($_POST['p'])!=""&&isset($_POST['t'])!=""&&isset($_POST['m'])!=""&&isset($_POST['t'])!=""&&isset($_POST['dir'])!=""){
    $instacia=new Editar();
    $veri=$instacia->EditarEstudiantes($codigo,$ci,$nombre,$apellido,$genero,$fechanac,$edad,$pais,$matricula,$telefono,$direccion);
    if($veri){
        echo "<script>window.location='../view/estudiantes.html'</script>";
    }
}
?>