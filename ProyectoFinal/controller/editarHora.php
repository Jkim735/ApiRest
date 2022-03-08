<?php
include '../model/editar.php';
$codigo=$_POST['c'];
$nombrehorario=$_POST['nh'];
if(isset($_POST['c'])!=""&&isset($_POST['nh'])!=""){
    $instacia=new Editar();
    $veri=$instacia->editarHorario($codigo,$nombrehorario);
    if($veri){
        echo "<script>window.location='../view/horarios.html'</script>";
    }
}
?>