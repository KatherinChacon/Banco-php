<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">

            <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset();}?>

            <div class="card card-body">
                <form action="save.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="documento" clas="form-control" placeholder="Documento Identidad" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" clas="form-control" placeholder="Nombre Completo" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="correo" clas="form-control" placeholder="Correo" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="cuenta" clas="form-control" placeholder="Cuenta" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Cuenta</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT * FROM datos";
                    $resultado_datos = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($resultado_datos)){?>
                        <tr>
                            <td><?php echo $row['documento']?></td>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['correo']?></td>
                            <td><?php echo $row['cuenta']?></td>
                            <td>
                                <a href="edit.php?documento=<?php echo $row['documento']?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="delete.php?documento=<?php echo $row['documento']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>