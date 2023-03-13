<?php 

include("db.php");

if(isset($_POST['save'])){
    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $cuenta = $_POST['cuenta'];
    
    $query = "INSERT INTO datos(documento,nombre,correo,cuenta) VALUES ('$documento','$nombre','$correo','$cuenta')";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        die("Consulta Fallo");
    }
    
    $_SESSION['message'] = 'Datos guardados satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header ("Location: index.php");
}
?>