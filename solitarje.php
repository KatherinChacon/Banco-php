<?php 
include ("db.php");

if(isset($_POST['enviar'])){
$documento = $_POST['documento'];
$Tipo = $_POST['Tipo'];
$nombre = $_POST['nombre'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$departamento = $_POST['departamento'];
$ciudad = $_POST['ciudad'];
$Estado = $_POST['Estado'];
$correo = $_POST['correo'];
         
mysqli_query($conn, "INSERT INTO informacion_cliente (documento,Tipo,nombre,fecha_nacimiento,
celular,direccion,departamento,ciudad,Estado,correo) VALUES ('$documento','$Tipo','$nombre','$fecha_nacimiento',
'$celular','$direccion','$departamento','$ciudad','$Estado','$correo')");

}
?>

<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco My Savings</title>
    <link rel="stylesheet" href="css/principal.css">
    <meta charset="utf-8">
</head>

<body>
    <header>
        <img class="img" src="imagenes/marranito.jpg" alt="My Savings">
        <div id="menuheader">
            <ul class="nave">
                <li><a href="principal.html">Inicio</a></li>
                <li><a>Atención al cliente</a>
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
        <div id="paginas">
            <form id="registro" action="solitarje.php" method="POST">
                <h2 class="portal">Solicitud de tarjeta</h2>
                <div id="tabla">
                    <table margin-left="20px">
                        <tr>
                            <td><i>Documento de identidad:</i></td>
                            <td><input type="text" name="documento"/> </td>
                        </tr>
                        <tr>
                            <td><i>Tipo de documento:</i></td>
                            <td>
                                <?php
                                include("claseformulario.php");
                                $Tipo = array("Registro civil", "Tarjeta de identidad", "Cédula extranjera", "Cédula de ciudadania", "");
                                $Estado = array("Viudo/a", "Divorciado/a", "Separado/a", "Unión Libre", "Casado/a", "Soltero/a", "");

                                $ElementosFrm = new OBJElementosFrm();
                                echo $ElementosFrm->CrearListaTipoDoc($Tipo, "Tipo");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><i>Nombre Completo:</i></td>
                            <td><input type="text" name="nombre"/></td>
                        </tr>
                        <tr>
                            <td><i>Fecha de nacimiento:</i></td>
                            <td><input type="date" name="fecha_nacimiento" /></td>
                        </tr>
                        <tr>
                            <td><i>Numero Celular:</i></td>
                            <td><input type="text" name="celular"/></td>
                        </tr>
                        <tr>
                            <td><i>Dirección de Residencia:</i></td>
                            <td><input type="text" name="direccion"/></td>
                        </tr>
                        <tr>
                            <td><i>Departamento de Residencia:</i></td>
                            <td><input type="text" name="departamento"/></td>
                        </tr>
                        <tr>
                            <td><i>Ciudad de residencia:</i></td>
                            <td><input type="text" name="ciudad" /></td>
                        </tr>
                        <tr>
                            <td><i>Estado Civil:</i></td>
                            <td>
                                <?php
                                $ElementosFrm = new OBJElementosFrm();
                                echo $ElementosFrm->CrearListaEstado($Estado, "Estado");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="20%"><i>Correo Electronico:</i></td>
                            <td width="30%"><input type="email" placeholder="correo@mysavings.com" name="correo"/></td>
                        </tr>                        
                    </table>
                </div>
                <div id="registro1"><input class="bothe" type="submit" name="enviar" value="Enviar"/></div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h3 class="center">Una vez ingreses tus datos y finalices la solicitud, en las siguientes 24 horas recibiras en tu correo la información para seguir con el proceso de entrega de tu tarjeta</h3>                        
            </form>
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