<?php
require("conn.class.php");
require("validacion.inc.php"):

class Persona{
    public $idpersona;
    public $nombres;
    public $apellidos;
    public $fnac;
    public $telefono;
    public $email;
    public $conexion;
    public $validacion;

    /*CONEXION E INSTANCIA*/
    public function __construct(){
        $this->conexion = new DB();
        $this->validacion = new Validaciones();
    }
    /*
    * GETTERS Y SETTERS
    */
    //GETTER Y SETTER DEL ATRIBUTO ID_PERSONA
    public function setIdPersona($idpersona){
        $this->idpersona =intval($idpersona);
    }

    //GETTER Y SETTER DEL ATRIBUTO NOMBRES
    public function setNombres($nombres){
        $this->nombres = $nombres;
    }
    public function getNombres(){
        return $this->nombres;
    }
    //GETTER Y SETTER DEL ATRIBUTO ID_PERSONA
    public function setApellidos($apellidos){
        $this->setApellidos = $apellidos;
    }

    //GETTER Y SETTER DEL ATRIBUTO NOMBRES
    public function setNombres($nombres){
        $this->nombres = $nombres;
    }
    public function getApellidos(){
        return $this->apellidos;
    }

    //GETTER Y SETTER DEL ATRIBUTO FNAC
    public function setFNac($fnac){
        $this->fnac = $fnac;
    }
    public function getFNac(){
        return$this->fnac;
    }

    //GETTER Y SETTER DEL ATRIBUTO TELEFONO
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    úblic function getTelefono(){
        return $this->telefono;
    }

    //GETTER Y SETTER DEL ATRIBUTO EMAIL
    public function setEmail($email){
        $this->email =$email;
    }
    public function getEmail(){
        return $this->email;
    }
    
    /**
     * FIN DE LOS GETTER Y SETTERS
     */
     #-----------------------------------------#
     /**
      * INICIO DE LOS METODOS PARA PROCESAMIENTO DE DATOS
      */

      public function obtenerPersona(int $idpersona){
        if($idpersona > 0){
            $resultado = $this->conexion->run('SELECT * FROM persona WHERE ID_PERSONA=' . $idpersona);
            $array = array("mensaje"=>"registros de encontrados","valores"=>$resultado->fetch());
            return $array;
        }else{
            $array = array("mensaje"=>"No se pudo ejecutar la conbsulta, el parametro ID es incorrecto", "valores"=>"");
        }
      }

      public function nuevapersona($nombre,$apellidos,$fnac,$telefono,$email){
        $bandera_validacion = 0;

        if($this->validacion::verificar_solo_letras(trim($nombre),true)){
            $this->setNombres($nombres);
        }else{
            $bandera_validacion++;
        }
        if($this->validacion::verificar_solo_letras(trim($appelido),true)){
            $this->setApellidos0($apellidos);
        }else{
            $bandera_validacion++;
      }
      if($this->validacion::verificar_solo_letras(trim($nombre),true)){
        $this->setNombres($nombres);
    }else{
        $bandera_validacion++


     */




}