<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$numero = $_POST['numero'];
$numeroC = $_POST['numeroC'];
$correos = $_POST['correos'];
$cedula = $_POST['cedula'];
$identificacion =$_POST['identificacion'];
$direccion = $_POST['direccion'];

if (
    !empty($nombre) || !empty($apellido)
    || !empty($numero) || !empty($numeroC) ||
    !empty($correos) || !empty($cedula)|| 
    !empty($identificacion)
) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "formularios";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {

        die('connect error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
        $SELECT = "SELECT cedula from seguro where cedula = ? limit 1";
        $INSERT = "INSERT INTO seguro (nombre,apellido,numero,numeroC,correos,cedula,identificacion,direccion)
        values(?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("i", $cedula);
        $stmt->execute();
        $stmt->bind_result($cedula);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssiissss", $nombre, $apellido, $numero, $numeroC, $correos, $cedula,$identificacion,$direccion);
            $stmt->execute();
            echo '<script type="text/javascript">
alert("Tus datos se enviaron correctamente");
window.location.href="../codigoHtml/PaginaPrincipal.html";
</script>';
        } else {
            echo '<script type="text/javascript">
alert("Numero de cedula repetido");
window.location.href="Seguro.html";
</script>';
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "todos los datos son OBLIGATORIOS";
    die();
}
