
<?php
echo "sql";
$host = '192.168.1.165';
$database = "seyerclean";
$user = "root";
$password = "root";

$tabledb = "tepa";
//$conn = new mysqli($host, $user, $password, $database);
$conn = mysqli_connect($host, $user, $password, $database);
if ($conn ->connect_errno){
    echo "FALLA EN EL SISTEMA\n";
    exit;
}
else{
    echo ("101");
}

//$bd_select = mysqli_select_db('lavanderia', $conn);
$conn -> select_db('seyerclean');

if (!$conn) {
    echo 'No pudo seleccionar la base de datos. \n';
    exit;
}

?>
