<?php 

include("db.php");

    if (isset($_GET['documento'])){
        $documento = $_GET['documento']; 
        $query = "SELECT * FROM datos WHERE documento = $documento";
        $resultado = mysqli_query($conn, $query);
        
        if (mysqli_num_rows($resultado) == 1){
            $row = mysqli_fetch_array($resultado);
            $documento = $row['documento'];
            $nombre = $row['nombre'];
            $correo = $row['correo'];
            $cuenta = $row['cuenta'];        
        }
    }

    if(isset($_POST['Actualizar'])){
        $documento = $_GET['documento'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $cuenta = $_POST['cuenta'];

       $query = "UPDATE datos set documento = '$documento',nombre = '$nombre',
       correo='$correo',cuenta='$cuenta' WHERE documento = $documento";
       mysqli_query($conn,$query);
       
       $_SESSION['message'] = 'Datos Actualizados satisfactoriamente';
       $_SESSION['message_type'] = 'success';
   
       header("Location: index.php");
    }
?>

<?php include ("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?documento=<?php echo $_GET['documento'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="documento" value="<?php echo $documento?>" class="form-control" placeholder="Actualice el Documento">
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre?>" class="form-control" placeholder="Actualice el Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" name="correo" value="<?php echo $correo?>" class="form-control" placeholder="Actualice el Correo">
                    </div>
                    <div class="form-group">
                        <input type="text" name="cuenta" value="<?php echo $cuenta?>" class="form-control" placeholder="Actualice la Cuenta">
                    </div>
                    <button class="btn btn-success" name="Actualizar">
                        Actualizar
                    </button>
                </form>

            </div>

        </div>
        
    </div>

</div>


<?php include ("includes/footer.php") ?>