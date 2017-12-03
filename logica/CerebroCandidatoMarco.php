<?php
include '../persistencia/candidatoDBHelper.php';

/**
 * Description of CerebroCandidato
 *
 * @author marco
 */
//class CerebroCandidato {
    //put your code here
//    function getCandidatosNoAceptados() {
        /*$datos = $_GET['datos'];
        $method = $_SERVER['REQUEST_METHOD'];*/
        /*
         * De todo lo que envio el cliente busca un llave especifica por cuestiones
        de seguridad.
         */
        //$option = basename(filter_input(INPUT_GET, 'option', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW));

        /*
         * 
         */
        /*if($method == "GET" || $option == "candidatosNoAceptados" ){
            $mHelperCandidato = new candidatoDBHelper();
            echo $mHelperCandidato->getNoAceptados();

        }*/
 //   }
//}
    
    $opcion = $_POST['option'];
    $foto = $_POST['foto'];
    $nombre = $_POST['nombre'];
    $apePat = $_POST['apellidoPaterno'];
    $apeMat = $_POST['apellidoMaterno'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $matricula = $_POST['matricula'];
    $carrera = $_POST['carrera'];
    $creditos = $_POST['creditos'];    
    $temaTesis = $_POST['temaDeTesis'];
    $direTesis = $_POST['directorDeTesis'];
    $lugarTrabajo = $_POST['lugarDeTrabajo'];
    $horarioTrab1 = $_POST['horarioDeTrabajo1'];
    $horarioTrab2 = $_POST['horarioDeTrabajo2'];
    $cartaCompro = $_POST['cartaCompromiso'];
    $cartaExp = $_POST['cartaExposicionDeMotivos'];
    $contrasena = $_POST['contrasena'];
    
    if ($opcion == "registrarCandidato") {
        $candidato = new candidato();
        
        $candidato->setNombre($nombre);
        $candidato->setApellidoPaterno($apellidoPaterno);
        $candidato->setApellidoMaterno($apellidoMaterno);
        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+"
                       . "([a-zA-Z0-9\._-]+)+$/", $email)) {
           $candidato->setEmail($email);
        } else {
            die("Correo " . $email . " incorecto.");
        }
        $candidato->setCelular($celular);
        $candidato->setMatricula($matricula);
        $candidato->setCarrera($carrera);
        $candidato->setCreditos($creditos);
        $candidato->setTemaTesis($temaTesis);
        $candidato->setDirectorTesis($directorTesis);
        $candidato->setLugarTrabajo($lugarTrabajo);
        $candidato->setCartaComprimiso($cartaComprimiso);
        $candidato->setCartaExpoMotivos($cartaExpoMotivos);
        $candidato->setContrasena($contrasena);
        $candidato->setHorarioTrabajo('10');
        
        if($_FILES['imagen']['error'] === 4) {
	die( 'Es necesario establecer una imagen' );
	//Si los inputs están seteados y el archivo no tiene errores, se procede
        } else if($_FILES['imagen']['error'] === 0 ) {
            //Otras comprobaciones
            $imagenBinaria = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            //Nombre del archivo
            $nombreArchivo = $_FILES['imagen']['name'];

            //Extensiones permitidas
            $extensiones = array('jpg', 'jpeg', 'gif', 'png', 'bmp');

            //Obtenemos la extensión (en minúsculas) para poder comparar
            $extension = strtolower(end(explode('.', $nombreArchivo)));

            //Verificamos que sea una extensión permitida, si no lo es mostramos un mensaje de error
            if(!in_array($extension, $extensiones)) {
                    die( 'Sólo se permiten archivos con las siguientes extensiones: '.implode(', ', $extensiones) );
            } else {
		//Si la extensión es correcta, procedemos a comprobar el tamaño del archivo subido
		//Y definimos el máximo que se puede subir
		//Por defecto el máximo es de 2 MB, pero se puede aumentar desde el .htaccess o en la directiva 'upload_max_filesize' en el php.ini

		$tamañoArchivo = $_FILES['imagen']['size']; //Obtenemos el tamaño del archivo en Bytes
		$tamañoArchivoKB = round(intval(strval( $tamañoArchivo / 1024 ))); //Pasamos el tamaño del archivo a KB

		$tamañoMaximoKB = "2048"; //Tamaño máximo expresado en KB
		$tamañoMaximoBytes = $tamañoMaximoKB * 1024; // -> 2097152 Bytes -> 2 MB

		//Comprobamos el tamaño del archivo, y mostramos un mensaje si es mayor al tamaño expresado en Bytes
		if($tamañoArchivo > $tamañoMaximoBytes) {
			die( "El archivo ".$nombreArchivo." es demasiado grande. El tamaño máximo del archivo es de ".$tamañoMaximoKB."Kb." );
		} else {
                    $candidato->setImageIcon($imagenBinaria);
                }
            }
        }
        
        echo 'contenido de imagen = ' . $imagenBinaria;
        
        //$helper = new candidatoDBHelper();
        
        //$helper->setCandidato($candidato);
    }
    
    //$respuesta = "entre con: " . $nombre . ", " . $email . ", " . $contrasena;
    //echo $respuesta;
    //$helper = new candidatoDBHelper();
    //$candiadato = new candidato($nombre, $apellidoPaterno, $apellidoMaterno, $contrasena, $matricula, $email, $celular, $carrera)
    
?>
