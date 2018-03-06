  <br><a href="index.php?metodo=insertar">Insertar</a>
<br><a href="index.php?metodo=buscar&id=0">Buscar</a>
<br><a href="index.php?metodo=modificar&id=0">Modificar</a>
<br><a href="index.php?metodo=eliminar&id=0">Eliminar</a>
<p>

<?php
    //conectar al servidor de base de datos mysql, ya no se usa
    //$enlace = mysql_connect('localhost', 'root', '');

    //conectar al servidor de base de datos mysql, ya no se usa
    //mysqli(host, usuario, contraseña, base de datos, puerto si usa);
    $enlace = new mysqli('localhost', 'root', '', 'hoja_vida_rt');

    if ($enlace->connect_errno) {
        printf("Connect failed: %s\n", $enlace->connect_error);
        exit();
    }

    if (isset($_GET['metodo'])) {

        switch ($_GET['metodo']) {

            case 'insertar':
                    //insertar
                    $campos = "id_recurso_tecnologico, estado, cuenta_con_manual, inicio_de_uso, descripcion_mantenimiento_correctivo_preventivo, repuesto_intalado, costo";
                    $valores =" '0298', 'nuevo', 'si', '2/03/2017', 'no', 'no', 'no' ";

                    if (!$enlace->query( "INSERT INTO recurso_tecnologico ($campos) values ($valores)" )) {
                        echo"Errormessage: %s\n", $enlace->error;
                    }else {
                        echo "<b>Insertado";
                    }

                break;

            case 'modificar':
                    //modificar
                    if (!$enlace->query( "UPDATE recurso_tecnologico SET id_recurso_tecnologico='321243' WHERE estado = ".$_GET['estado'] )) {
                        echo"Errormessage: %s\n", $enlace->error;
                    }else {
                        echo "<b>Modificado";
                    }
                break;

            case 'eliminar':
                    //eliminar
                    if (!$enlace->query( 'DELETE FROM recurso_tecnologico WHERE estado='.$_GET['estado'] )) {
                        echo "Errormessage: %s\n", $enlace->error;
                    }else {
                        echo "<b>Borrado";
                    }

                break;

            case 'buscar':
                    if ($resultado = $enlace->query( 'SELECT * FROM recurso_tecnologico WHERE estado='.$_GET['estado'] )) {
                        while ($recurso_tecnologico = $resultado->fetch_object()) {
                            echo "<br>".$recurso_tecnologico->id_recurso_tecnologico.' '.$recurso_tecnologico->estado;
                        }
                        $resultado->close();
                    }else {
                        echo "Errormessage: %s\n", $enlace->error;
                    }
                break;
        }

        $enlace->close();
    }

?>