<?php
$conexion = mysqli_connect("localhost", "root", "", "bd-dcrio");

$nombre = $_POST["nombre"];
$actividad = $_POST["actividad"];
$lideres = $_POST["lideres"];
$fecha = $_POST["fecha"];
$hora1 = $_POST["hora1"];
$hora2 = $_POST["hora2"];

if($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["name"]);
    $nombre_final = date("m-d-y"). "-".date("H-i-s"). "-". $nombre_base;
    $ruta = "archivo/". $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
    if($subirarchivo){
        $insetarSQL = "INSERT INTO informesa(nombre, actividad, lideres, fecha, hora1, hora2, archivo) VALUES ('$nombre', '$actividad', 
        '$lideres', '$hora1', '$hora2', '$ruta')";
    $resultado = mysqli_query($conexion, $insetarSQL);
    if($resultado){
        echo"<script>alert('Se ha enviado el informe'); window.location='ambiental.html'</script>";
    } else {
        printf("Errormessage: %s\n", mysqli_error($conexion));
    }
    }
} else {
    echo "Error al subir archivo";
}