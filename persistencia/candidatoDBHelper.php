<?php
include '../persistencia/DBConexion.php';
include '../logica/candidato.php';

class candidatoDBHelper {
    
    private $conexion;
    
    function __construct() {
        $this->conexion = new DBConexion();
    }
    
    function getNoAceptados() {
        $this->conexion->conectar();
        $sql = "SELECT * FROM CANDIDATO WHERE IDGRUPO IS NULL";
           $result = $this->conexion->consulta($sql);
            if ($result->num_rows > 0) {
            //output data of each row
            $json = array();
            while($reg = $result->fetch_assoc()) {
            
                $myObj = array(
                    'idcandidato' => $reg['IDCANDIDATO'],
                     'idasesor' => $reg['IDASESOR'],
                     'idgrupo' => $reg['IDGRUPO'],
                     'foto' => $reg['FOTO'],
                     'nombre' => $reg['NOMBRE'],
                     'apellidoPaterno' => $reg['APELLIDOPATERNO'],
                     'apellidoMaterno' => $reg['APELLIDOMATERNO'],
                     'contrasena' => $reg['CONTRASENA'],
                     'matricula' => $reg['MATRICULA'],
                     'email' => $reg['EMAIL'],
                     'celular' => $reg['CELULAR'],
                     'carrera' => $reg['CARRERA'],
                     'credito' => $reg['CREDITOS'],
                     'tematesis' => $reg['TEMADETESIS'],               
                     'directorDeTesis' => $reg['DIRECTORDETESIS'],
                     'lugarTabajo' => $reg['LUGARTRABAJO'],
                     'horarioTrabajo' => $reg['HORARIOTRABAJO'],
                     'cartaCompromiso' => $reg['CARTACOMPROMISO'],
                     'cartaExpoMotivos' => $reg['CARTAEXPOMOTIVOS']
                );
                array_push($json, $myObj);
                }
            } else {
            echo "0 results";
            }
            $this->conexion->cerrarConexion();
            return json_encode($json, JSON_FORCE_OBJECT);      
    }
    
    function setCandidato($candidato) {
        //Conectando con la base
        $this->conexion->conectar();
        //obteniendo los datos del objeto candidato
        $foto = $candidato->getImageIcon();
        $nombre = $candidato->getNombre();
        $apellidoPat = $candidato->getApellidoPaterno();
        $apellidoMat = $candidato->getApellidoMaterno();
        $contrasena = $candidato->getContrasena();
        $matricula = $candidato->getMatricula();
        $email = $candidato->getEmail();
        $celular = $candidato->getCelular();
        $carrera = $candidato->getCarrera();
        $creditos = $candidato->getCreditos();
        $temaTesis = $candidato->getTemaTesis();
        $dirTesis = $candidato->getDirectorTesis();
        $lugarTrabajo = $candidato->getLugarTrabajo();
        $horarioTrabajo = $candidato->getHorarioTrabajo();
        $cartaComp = $candidato->getCartaComprimiso();
        $cartaExpo = $candidato->getCartaExpoMotivos();
        //Creando sentencia SQL con los datos recuperados del objeto candidato
        $sql = "INSERT INTO CANDIDATO (FOTO, NOMBRE,"
                . " APELLIDOPATERNO, APELLIDOMATERNO, CONTRASENA, MATRICULA,"
                . " EMAIL, CELULAR, CARRERA, CREDITOS, TEMADETESIS,"
                . " DIRECTORDETESIS, LUGARTRABAJO, HORARIOTRABAJO,"
                . " CARTACOMPROMISO, CARTAEXPOMOTIVOS)"
                . "VALUES (" . "$foto" . "," . "$nombre" . ","
                . "$apellidoPat" . "," . "$apellidoMat" . "," 
                . "$contrasena" . "," . "$matricula" . "," . "$email" . ","
                . "$celular" . "," . "$carrera" . "," . "$creditos" . ","
                . "$temaTesis" . "," . "$dirTesis" . "," . "$lugarTrabajo" . ","
                . "$horarioTrabajo" . "," . "$cartaComp" . "," . "$cartaExpo" 
                . ")";
        $this->conexion->consulta($sql);
        $this->conexion->cerrarConexion();
    }
}
