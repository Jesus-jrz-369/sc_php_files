<?php
include 'sql_conection.php';

//$bd_select = mysqli_select_db('lavanderia', $conn);
$conn -> select_db('seyerclean');

if (!$conn) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}

$fecha = $_GET['fecha'];
$datenew = date('Ymd', strtotime($fecha));
echo $datenew;
$sql       = "SELECT * FROM `tepa` WHERE `fechadepago` = $datenew";
$result = $conn->query($sql);

if (!$result) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: " . mysql_error();
    exit;
}
else {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "/";
        echo "info3312";
        echo "/";
        echo ($row['Folio']);
        echo "/";
        echo ($row['IDcontrol']);
        echo "/";
        echo ($row['Nombre']);
        echo "/";
        echo ($row['Fecha']);
        echo "/";
        echo ($row['Hora']);
        echo "/";
        echo ($row['Total']);
        echo "/";
        echo ($row['Servicios']);
        echo "/";
        echo ($row['Fechaentregado']);
        echo "/";
        echo ($row['Pagado']);
    }

    /* liberar el conjunto de resultados */
    $result->close();
}
?>