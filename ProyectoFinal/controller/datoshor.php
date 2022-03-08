<?php
include '../model/insertar.php';
$codigo=$_POST['c'];
$nombrehorario=$_POST['nh'];
if(isset($_POST['c'])!=""&&isset($_POST['nh'])!=""){
    $instacia=new Insertar();
    $veri=$instacia->Horarioinsert($codigo,$nombrehorario);
    if($veri){
        echo "<script>window.location='../view/horarios.html'</script>";
    }
}
?>