<?php 

namespace Model;

class Usuario extends ActiveRecord{
    //Base de datos
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id','nombre', 'apellido','email', 'password', 'telefono', 'admin', 'confirmado', 'token'];//Tiene que tener el mismo nombre que esta en la base de datos

    //Como son public puedes acceder ya sea en la clase misma o en el objeto una vez que sea instanciado
    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->admin = $args['admin'] ?? "0";
        $this->confirmado = $args['confirmado'] ?? "0";
        $this->token = $args['token'] ?? '';

    }

    //Mensaje de validacion para la creacion de una cuenta
    //Protected solo se pueden acceder en esta misma clase y public puedes acceder desde otro lado como lo es con esta funcion usada en loginController
    public function validarNuevaCuenta() {
        if(!$this->nombre){//Accedes a los atributos de la misma clase
            self::$alertas['error'][] = 'El Nombre  es obligatorio';  //Como hereda de ActiveRecord puedes utilizar alertas que es protected
        }
        
        if(!$this->apellido){//Accedes a los atributos de la misma clase
            self::$alertas['error'][] = 'El Apellido es obligatorio';  //Como hereda de ActiveRecord puedes utilizar alertas que es protected
        }
        if(!$this->email){//Accedes a los atributos de la misma clase
            self::$alertas['error'][] = 'El Email es obligatorio';  //Como hereda de ActiveRecord puedes utilizar alertas que es protected
        }
        if(!$this->password){//Accedes a los atributos de la misma clase
            self::$alertas['error'][] = 'El password es obligatorio';  //Como hereda de ActiveRecord puedes utilizar alertas que es protected
        }
        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El password debe contener al menos 6 caracteres';
        }
        return self::$alertas;

    }

    public function validarLogin(){
        if(!$this->email){
            self::$alertas['error'][] = "El email es obligatorio";
        }
        if(!$this->password){
            self::$alertas['error'][] = "El password es obligatorio";
        }

        return self::$alertas;
    }

    public function validarEmail(){
        if(!$this->email){
            self::$alertas['error'][] = "El email es obligatorio";
        }
        return self::$alertas;
    }

    public function validarPassword() {
        if(!$this->password){
            self::$alertas['error'][] = "El password es obligatorio";
        }
        if(strlen($this->password) < 6 ){
            self::$alertas{'error'}[] = "EL password tiene que tener al menos 6 caracteres";
        }
    }

    //Revisa si el usuario ya existe 
    public function existeUsuario() {
        $query = "SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1";//Se usa $this por que accedes al email que esta en loginController y el LIMIT es para que a la primer coincidencia se pare es importante que revises tu codigo en sql
        
        
        $resultado = self::$db->query($query); //con esto accedes $db que esta en activeRecor

        if($resultado->num_rows) {//Se usa la sintaxis de flecha por que es un objeto con eso accedes a num_rows donde 1 es que encontro un correro igual al escrito
            self::$alertas['error'][] = "El usuario ya esta registrado";
        }

        return $resultado;
    }

    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);//Lo vuelve a asignar el password en el mismo lugar solo que ahora hasheado
    }

    public function crearToken() {
        $this->token = uniqid();
    }

    public function comprobarPasswordAndVerificado($password) {
        $resultado = password_verify($password,$this->password);//EL this->email es el que se almacena en el activerecord en memoria
        if(!$resultado || !$this->confirmado){
            self::$alertas['error'][] = 'Password Incorrecto o tu cuenta no ha sido confirmada';    
        }else{
            return true;
        }
    }
    
}