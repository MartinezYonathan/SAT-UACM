<?php
include '../base/candidatoDBHelper.php';

/**
 * Description of CerebroCandidato
 *
 * @author marco
 */
//class CerebroCandidato {
    //put your code here
    $datos = $_GET['datos'];
    $method = $_SERVER['REQUEST_METHOD'];
    /*
     * De todo lo que envio el cliente busca un llave especifica por cuestiones
    de seguridad.
     */
    $option = basename(filter_input(INPUT_GET, 'option', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW));
    
    /*
     * 
     */
    if($method == "GET" || $option == "candidatosNoAceptados" ){
        $mHelperCandidato = new candidatoDBHelper();
        echo $mHelperCandidato->getNoAceptados();
        
    }
//}

?>