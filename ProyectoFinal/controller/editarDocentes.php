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
$telefono=$_POST['t'];
$direccion=$_POST['d'];
$especialidad=$_POST['es'];
$categoria=$_POST['c'];
$fechacontrato=$_POST['fc'];
$cia=$_POST['cia'];
if(isset($_POST['co'])!=""&&isset($_POST['ci'])!=""&&isset($_POST['n'])!=""&&isset($_POST['a'])!=""&&isset($_POST['g'])!=""&&isset($_POST['fn'])!=""&&isset($_POST['e'])!=""&&isset($_POST['p'])!=""&&isset($_POST['t'])!=""&&isset($_POST['d'])!=""&&isset($_POST['es'])!=""&&isset($_POST['c'])!=""&&isset($_POST['fc'])!=""&&isset($_POST['cia'])!=""){
    $instacia=new Editar();
    $veri=$instacia->editarDocentes($codigo,$ci,$nombre,$apellido,$genero,$fechanac,$edad,$pais,$telefono,$direccion,$especialidad,$categoria,$fechacontrato,$cia);
    if($veri){
        echo "<script>window.location='../view/docentes.html'</script>";
    }
}
?>