<?php

class database{
    private $hostname="localhost"; //ubicación del motor de la base de datos.
    private $database = "tecnostar"; //aquí va el nombre de nuestra base de datos.
    private $username = "root";//usuario de la base de datos.
    private $password = ""; //contraseña con la que se accede a la base de datos,
                            //generalmente en xampp, está vacío. 
    private $charset = "utf8"; //propiedades para conectarse al motor de bd.

    function conectar ()
    {
        try{
        $conexion = "mysql:host=" . $this->hostname ."; dbname=" .$this->database. 
        "; charset=" .$this->charset; //la seguidilla de denominaciones se llama concatenar.

        $options = [ //opciones para arreglar el comportamiento de la consulta de la.
            
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //genera excepciones con la conexion.

            PDO:: ATTR_EMULATE_PREPARES => false //config para evitar que las preparaciones de consultas sean reales y seguras.
        ]; 

        $pdo = new PDO($conexion, $this->username, $this->password, $options); // el signo $ declara una variable,
        //por lo que en este caso se le relaciona la información del método PDO, junto con los datos
        // de las variables que previamente se le han asignado. Así mismo, se llaman los atributos
        // 'username' y 'password' con "this" por lo que no están dentro de algún otro método.

        return $pdo; //en caso de que lo anterior sea satisfactorio, se llama PDO, que trae la 
                     //conexión a la BD consigo. 

        } catch(PDOException $e) { //Catch permite tomar una acción si es que el proceso anterior falla en algo. 

            echo 'error conexion'.$e->getMessage();//en la variable $e se relaciona la información de error.
            //echo es una respuesta en texto frente a un error en el proceso.

            exit; //Este exit obedece a que si hay error de conexión, ya no genera ninguna otra 
                  //acción, por errores como password, nombre, etc. 

        }  
    }
}