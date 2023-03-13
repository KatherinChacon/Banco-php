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
                <form id="feria" action="verificarCliente.php" method="POST">
                    <h2 class="portal" >Validar datos de clientes registrados</h2>                    
                    <p>Digite el documento de identidad</p>
                    <br>
                    <label>Documento de identidad: </label>
                    <input type="text" name="documento"/>
                    <input class="bothe" type="submit" name="consultar" value="Consultar"/>
                    <?php
                    
                        if(isset($_POST['consultar'])){
                            include ("db.php");
                                $documento = $_POST['documento'];

                                $resultado = mysqli_query($conn, "SELECT * FROM informacion_cliente WHERE documento = $documento");
                                while($consulta = mysqli_fetch_array($resultado)){
                    ?>
                    <br>
                    <br>
                    <?php
                            echo "El Documento de identidad es: {$consulta ['documento']}"."<br>";                
                            echo "El Tipo de documento es: {$consulta ['Tipo']}"."<br>";
                            echo "El Nombre Completo es: {$consulta ['nombre']}"."<br>";
                            echo "La Fecha de nacimiento es: {$consulta ['fecha_nacimiento']}"."<br>";
                            echo "El Numero Celular es: {$consulta ['celular']}"."<br>";
                            echo "La Dirección de Residencia es: {$consulta ['direccion']}"."<br>";
                            echo "El Departamento de Residencia es: {$consulta ['departamento']}"."<br>";
                            echo "La Ciudad de residencia es: {$consulta ['ciudad']}"."<br>";
                            echo "El Estado Civil es: {$consulta ['Estado']}"."<br>";
                            echo "El Correo Electronico es: {$consulta ['correo']}"."<br>";
                        }
                    }
                    
                    ?>
                
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