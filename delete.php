<?php 
include ("db.php");

if (isset($_GET['documento'])){
    $documento = $_GET['documento'];
    $query = "DELETE FROM datos WHERE documento = $documento";
    $resultado = mysqli_query($conn, $query);
    if (!$resultado){
        die("Fallo");
    }

    $_SESSION['message'] = 'Datos eliminados satisfactoriamente';
    $_SESSION['message_type'] = 'danger';

    header("Location: index.php");
}
?>