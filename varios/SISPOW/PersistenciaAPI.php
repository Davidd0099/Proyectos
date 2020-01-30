<?php
    class Persistencia{
        
        public $estaConectado = false;
        public $mysqli;

        function __construct() {
            $this->mysqli = new mysqli("localhost", "root", "", "SISPOW");
            if ($this->mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
                //echo "Opppss, el servidor esta en mantenimiento";
                $this->estaConectado = false;
                exit();
            }
            $this->estaConectado = true;
        }
        
        function inserUpdDel($consulta) { 
            if($this->estaConectado){
                if (!$this->mysqli->query($consulta)) {
                    printf("Errormessage: %s\n", $this->mysqli->error);
                }
            }else{
                echo "No hay conexion a la BD";    
            }
        } 


        function consultar($consulta) { 
            if($this->estaConectado){
                $this->mysqli->real_query($consulta);
                $resultado = $this->mysqli->use_result();
                return $resultado;
            }else{
                echo "No hay conexion a la BD";    
            }
        } 
    
    }
       
        /*
        function insertar($tabla,$campos,$valores) { 

            $camposCadena = "";
            for($cont=0;$cont < count($campos); $cont++){
                if($cont == 0){
                    $camposCadena = $campos[$cont];
                }else{
                    $camposCadena = $camposCadena.",".$campos[$cont];
                }  
            }

            $campoValores = "";
            for($cont=0;$cont < count($valores); $cont++){
                if($cont == 0){
                    $campoValores = "'".$valores[$cont]."'";
                }else{
                    $campoValores = $campoValores.","."'".$valores[$cont]."'";
                }  
            }
         
            if($this->estaConectado){
                if (!$this->mysqli->query("insert into ".$tabla." (".$camposCadena.") values (".$campoValores.")")) {
                    printf("Errormessage: %s\n", $this->mysqli->error);
                }
            }else{
                echo "No hay conexion a la BD";    
            }
            
        } 
        */
?>
