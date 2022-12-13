<?php
include 'sql_conection.php';

//$bd_select = mysqli_select_db('lavanderia', $conn);
$conn -> select_db('seyerclean');

if (!$conn) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}

    if (isset($_GET["nombre"])) {
        echo 'entre';
    }

    $nombre = $_GET['nombre'];
    $telefono = $_GET['tel'];
    $total = $_GET['total'];
    $abono = $_GET['abono'];
    $folio = $_GET['folio'];
    $servicios = $_GET['servicios'];
    echo $servicios;

    date_default_timezone_set("America/Mexico_city");
    $time = date("H:i:s");
    $fecha = date("Y-m-d");
    echo $time;
    echo $fecha;

    
    $faltante = $total - $abono;

    if ($faltante <= 0){
        $sql = "INSERT INTO `tepa` (`Folio`, `Nombre`, `Telefono`, `Fecha`,`Hora`, `Total`, `Servicios`, `Fechaparaentrega`, `Pagado`,`fechadepago`) VALUES ('$folio', '$nombre', '$telefono','$fecha','$time','$total', '$servicios', 2022-20-20,'$abono','$fecha')";
    }
    else{
        $sql = "INSERT INTO `tepa` (`Folio`, `Nombre`, `Telefono`, `Fecha`,`Hora`, `Total`, `Servicios`, `Fechaparaentrega`, `Pagado`) VALUES ('$folio', '$nombre', '$telefono','$fecha','$time','$total', '$servicios', 2022-20-20,'$abono')";
    }

    $result = $conn->query($sql);
    if (!$result) {
        echo "Error de BD, no se pudo INSERTAR\n";
        exit;
    }
    else {
        echo "Ingreso exitoso\n";
    }

mysqli_close($conn)
?>