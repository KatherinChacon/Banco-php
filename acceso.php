<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banco My Savings</title>
        <link rel="stylesheet" href="css/principal.css" >
        <meta charset="utf-8">
    </head>
    <body>
        <header>
            <img class="img" src="imagenes/marranito.jpg" alt="My Savings">       
            <div id="menuheader">
                <ul class="nave">
                   <li><a href="principal.html">Inicio</a></li>
                   <li><a href="">Atención al cliente</a>
                     <ul>
                        <li><a href="sedes.html">Sedes</a></li>
                        <li><a href="canales.html">Nuestros Canales</a></li>
                     </ul>
                   </li>
                   <li><a href="personas.html">Personas</a></li>
                   <li><a href="empresas.html">Empresas</a></li>
                   <li><a class="bothe" href="registro.html">Registrate</a></li>
                   <li><a class="bothe" href="acceso.php">Acceso Empleados</a></li>
                </ul>
            </div>
        </header>
        <article>
        <?php 
        if(isset($_POST['enviar'])){

            if(empty($_POST['usuario'])|| empty($_POST['password'])){
                echo "<script language='JavaScript'>
                alert('El usuario o la contraseña no han sido ingresados');
                location.assign('acceso.php');
                </script>";
            }else{
                include ("db.php");
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];
                $query = "select * from login where nombre_usu='".$usuario."' and contraseña='".$password."'";
                $resultado = mysqli_query($conn,$query);
                if($fila=mysqli_fetch_assoc($resultado)){
                    echo "<script language='JavaScript'>
                alert('Bienvenido');
                location.assign('index.php');
                </script>";
                }else{
                    echo "<script language='JavaScript'>
                alert('El usuario o la contraaseña son incorrectos');
                location.assign('acceso.php');
                </script>";                
                }
            }
        }else{
        ?>
        <div id="paginas">
            <div id="acceso">
                <h2 class="portal" >Acceso al portal</h2>
                <div id="tabla">
                    <form margin-left="20px" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                        <label>usuario: </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="usuario"/>
                        <br>
                        <label>Contraseña: </label>
                        &nbsp;&nbsp;
                        <input type="password" name="password"/>
                        <input class="bothe" type="submit" name="enviar" value="Ingresar"/>
                    </form>
                </div>
               <br>
               <br>
               <br>
               <br>
               <h3 class="center">En caso de olvidar su usuario o contraseña por favor comunicarse con nuestra linea nacional 6012345678</h3>
            </div>
                <?php }?>
        </div>
        <footer>
            <div id="menufoot">
                <ul>
                   <li><a href="entidad.html">Nuestra entidad</a></li>
                   <li><a href="contactenos.html">Contáctenos</a></li>
                   <li><a href="beneficios.html">Beneficios</a></li>
                   <li><a href="verificarCliente.php">Verificar Cliente</a></li>
                </ul>
            </div>
        </footer>
    </article>
    </body>
</html>