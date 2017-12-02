<?php
/**
 * Description of candidato
 *
 * @author marco
 */
class candidato {
    private $id;
    private $imageIcon;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $contrasena;
    private $matricula;
    private $email;
    private $celular;
    private $carrera;
    private $creditos;
    private $temaTesis;
    private $directorTesis;
    private $lugarTrabajo;
    private $horarioTrabajo;
    private $cartaComprimiso;
    private $cartaExpoMotivos;
    private $asesor;
    
    function __construct($id, $nombre, $apellidoPaterno, $apellidoMaterno,
                         $contrasena, $matricula, $email, $celular, $carrera) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->contrasena = $contrasena;
        $this->matricula = $matricula;
        $this->email = $email;
        $this->celular = $celular;
        $this->carrera = $carrera;
    }
    
    function getId() {
        return $this->id;
    }

    function getImageIcon() {
        return $this->imageIcon;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidoPaterno() {
        return $this->apellidoPaterno;
    }

    function getApellidoMaterno() {
        return $this->apellidoMaterno;
    }

    function getContrasena() {
        return $this->contrasena;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getEmail() {
        return $this->email;
    }

    function getCelular() {
        return $this->celular;
    }

    function getCarrera() {
        return $this->carrera;
    }

    function getCreditos() {
        return $this->creditos;
    }

    function getTemaTesis() {
        return $this->temaTesis;
    }

    function getDirectorTesis() {
        return $this->directorTesis;
    }

    function getLugarTrabajo() {
        return $this->lugarTrabajo;
    }

    function getHorarioTrabajo() {
        return $this->horarioTrabajo;
    }

    function getCartaComprimiso() {
        return $this->cartaComprimiso;
    }

    function getCartaExpoMotivos() {
        return $this->cartaExpoMotivos;
    }

    function getAsesor() {
        return $this->asesor;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setImageIcon($imageIcon) {
        $this->imageIcon = $imageIcon;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidoPaterno($apellidoPaterno) {
        $this->apellidoPaterno = $apellidoPaterno;
    }

    function setApellidoMaterno($apellidoMaterno) {
        $this->apellidoMaterno = $apellidoMaterno;
    }

    function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setCarrera($carrera) {
        $this->carrera = $carrera;
    }

    function setCreditos($creditos) {
        $this->creditos = $creditos;
    }

    function setTemaTesis($temaTesis) {
        $this->temaTesis = $temaTesis;
    }

    function setDirectorTesis($directorTesis) {
        $this->directorTesis = $directorTesis;
    }

    function setLugarTrabajo($lugarTrabajo) {
        $this->lugarTrabajo = $lugarTrabajo;
    }

    function setHorarioTrabajo($horarioTrabajo) {
        $this->horarioTrabajo = $horarioTrabajo;
    }

    function setCartaComprimiso($cartaComprimiso) {
        $this->cartaComprimiso = $cartaComprimiso;
    }

    function setCartaExpoMotivos($cartaExpoMotivos) {
        $this->cartaExpoMotivos = $cartaExpoMotivos;
    }

    function setAsesor($asesor) {
        $this->asesor = $asesor;
    }
}
