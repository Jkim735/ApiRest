<?php
include '../model/eliminar.php';
$codigo=$_POST['ci'];
if(isset($_POST['ci'])!=""){
    
    $instacia=new Eliminar();
    $veri=$instacia->eliminarAdministrativo($codigo);
    if($veri){
        echo "<script>window.location='../view/administrativo.html'</script>";
    }
}
?>