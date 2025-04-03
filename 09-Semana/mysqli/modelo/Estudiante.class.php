<?php

class Estudiante extends Conexion{

    public $id ;
    public $nombres; 
    public $apellidos; 
    public $email ;
    public $fechaNacimiento;

    function __construct(){
        parent::__construct();
    }

    public function consultarForEach(){
        try{
            // Validamos la conexion
            if(parent::connect()){
                $sql = "SELECT * FROM estudiante";
                $rows = $this->conection->query($sql);

                foreach($rows as $fila){
                    echo "<br>";
                    echo "<strong>ID:</strong> ".$fila["id"]."<br>";
                    echo "<strong>NOMBRES: </strong>".$fila["nombres"]."<br>";
                    echo "<strong>APELLIDOS:</strong> ".$fila["apellidos"]."<br>";
                    echo "<strong>EMAIL:</strong> ".$fila["email"]."<br>";
                    echo "<strong>FECHA NACIMIENTO:</strong> ".$fila["fechaNacimiento"]."<br>";
                    echo "<hr>";
                }
            }

        }catch(Exception $e){
            echo "<br>Se detectaron errores, verifiquelos por favor";
            echo $e->getMessage();
        }finally{
            parent::desconect();
        }
    }


    public function agregar(){
        try{


            if(parent::connect()){
                $sql = "INSERT INTO estudiante(nombres,apellidos,fechaNacimiento,email) VALUES(?,?,?,?)";
                $statement = $this->conection->prepare($sql);
                $statement->bind_param('ssss',$this->nombres,$this->apellidos,$this->fechaNacimiento,$this->email);
                $statement->execute();

                $id = $statement->insert_id;

                return $id;
            }

        }catch(Exception $e){
            echo "<br>Se detectaron errores, verifiquelos por favor";
            echo $e->getMessage();
        }finally{
            parent::desconect();
        }
    }

}

?>