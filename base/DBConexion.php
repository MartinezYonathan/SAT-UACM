<?php
/**
 * Description of DBConexion
 *
 * @author marco
 */
class DBConexion {
    private $usuario;
    private $contrasena;
    private $servidor;
    private $nomBaseDeDatos;
    private $conexion;
    
    function __construct($usuario, $contrasena, $servidor, $nomBaseDeDatos) {
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->servidor = $servidor;
        $this->nomBaseDeDatos = $nomBaseDeDatos;
    }
    
    function conectar() {
        $this->conexion = mysqli_connect($this->servidor,
                                         $this->usuario,
                                         $this->contrasena,
                                         $this->nomBaseDeDatos);
        if (!$this->conexion) {
            //El die forza que el script termine, por lo tanto no es necesario
            //usar un else.
            die('Error de conexion('
                .mysqli_connect_errno()
                .')'
                .mysqli.connect_error());
        }
        echo 'Conexion exitosa'.mysqli_get_host_info($this->conexion).'<br>';
    }
    
    function cerrarConexion() {
        mysqli_close($this->conexion);
    }
    
    function getConexion() {
        return $this->conexion;
    }
}
