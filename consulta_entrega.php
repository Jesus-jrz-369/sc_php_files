<?php
include 'sql_conection.php';

//$bd_select = mysqli_select_db('lavanderia', $conn);
$conn -> select_db('seyerclean');

if (!$conn) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}

$sql       = "SELECT * FROM `tepa` WHERE `Fechaentregado` = 0000-00-00";
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
        echo ($row['Telefono']);
        echo "/";
        echo ($row['Fecha']);
        echo "/";
        echo ($row['Hora']);
        echo "/";
        echo ($row['Total']);
        echo "/";
        echo ($row['Pagado']);
        echo "/";
        echo ($row['Servicios']);
    }

    /* liberar el conjunto de resultados */
    $result->close();
}
?>