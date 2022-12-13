<?php
include 'sql_conection.php';

//$bd_select = mysqli_select_db('lavanderia', $conn);
$conn -> select_db('seyerclean');

if (!$conn) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}
    if (isset($_GET["folio"])) {
        $folio = $_GET['folio'];
        $abono = $_GET['abono'];
    }
    else{
        echo 'error';
    }
   
    date_default_timezone_set("America/Mexico_city");
    $time = date("H:i:s");
    $fecha = date("Y-m-d");
    //$sql = "INSERT INTO `tepa` (`Folio`, `Nombre`, `Telefono`, `Fecha`,`Hora`, `Total`, `Servicios`, `Fechaparaentrega`, `Fechaentregado`, `Pagado`) VALUES ('$folio', '$nombre', '$telefono','$fecha','$time','$total', '$servicios', 2022-20-20,2022-20-20,'$abono')";
    echo $folio . '<br>';
    echo $abono . '<br>';
    echo $time . '<br>';
    echo $fecha . '<br>';

    if ($abono == 0){
        $sql =  "UPDATE `tepa` SET `Fechaentregado`= '$fecha', `Hora entregado`= '$time' WHERE `IDcontrol` = '$folio'";
    }
    else{
        $sql =  "UPDATE `tepa` SET `Fechaentregado`= '$fecha', `Hora entregado`= '$time',`Pagado`='$abono', `fechadepago`= '$fecha' WHERE `IDcontrol` = '$folio'";
    }
    
    $result = $conn->query($sql);

    if (!$result) {
        
        echo "Error de BD, no se pudo INSERTAR\n";
        exit;
    }
    else {
        echo "S404E";
    }

mysqli_close($conn)
?>