<?php
include '../model/editar.php';
$ci=$_POST['ci'];
$nombre=$_POST['n'];
$apellido=$_POST['a'];
$genero=$_POST['g'];
$fechanac=$_POST['fn'];
$pais=$_POST['p'];
$telefono=$_POST['t'];
$direccion=$_POST['d'];
$cargo=$_POST['c'];
if(isset($_POST['ci'])!=""&&isset($_POST['n'])!=""&&isset($_POST['a'])!=""&&isset($_POST['g'])!=""&&isset($_POST['fn'])!=""&&isset($_POST['p'])!=""&&isset($_POST['t'])!=""&&isset($_POST['d'])!=""&&isset($_POST['c'])!=""){
    $instacia=new Editar();
    $veri=$instacia->editarAdministrativo($ci,$nombre,$apellido,$genero,$fechanac,$pais,$telefono,$direccion,$cargo);
    if($veri){
        echo "<script>window.location='../view/administrativo.html'</script>";
    }
}
?>