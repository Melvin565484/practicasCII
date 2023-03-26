<?php

    //intefaces 

    interface Iidentificarte{
        public function identificacion();
    }

        //implementacion de interfaces
    class Persona implements Iidentificarte{
        public  $dni;
        public  $nombre;
        public  $pape;

        function __construct($dni, $nombre, $pape)
        {
            $this->dni= $dni;
            $this->nombre= $nombre;
            $this->pape= $pape;
        }


        public function getDNI(){
        return $this->dni;
        }
    
        public function getNombre()
        {
        return $this->nombre;
        }

        public function getPape()
        {
        return $this->pape;
        }
        public function identificacion(){echo "Por favor identifiquese";}
    
    }

    class Propietario extends Persona{
        public $direccion;

        function __construct( $direccion)
        {
            $this->direccion=$direccion;
        }

        public function getDireccion()
        {
            return $this->direccion;
        }

    }

    class Cliente extends Persona{
        public $telefono;
        public $vehiculos;

        function __construct( $telefono, $vehiculos)
        {
            $this->telefono=$telefono;
            $this->vehiculos=$vehiculos;
        }
        
        public function getTelefono()
        {
            return $this->telefono;
        }

        public function getVehiculos()
        {
            return $this->vehiculos;
        }

    }

    class Vehiculo implements Iidentificarte{
        public $matricula;
        public $marca;
        public $modelo;

        function __construct($matricula, $marca, $modelo)
        {
            $this->matricula=$matricula;
            $this->marca=$marca;
            $this->modelo=$modelo;
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getModelo(){
            return $this->modelo;
        }
        public function identificacion(){echo "Por favor identifiquese";}
    }

    class Coche extends Vehiculo{
        public $anchura;
        public $altura;

        function __construct($anchura, $altura)
        {
            $this->anchura=$anchura;
            $this->altura=$altura;
        }

        public function getAnchura(){
            return $this->anchura;
        }

        public function getAltura(){
            return $this->altura;
        }
    }
        
    
    class Moto extends Vehiculo{
        public $limitador;
        
        function __construct($limitador)
        {
            $this->limitador=$limitador;
        }

        public function getLimitador(){
            return $this->limitador;
        }
    }
    
    
$persona = new Persona(125546, "Alucard", "ninguno");
        echo
        "<h2>Persona</h2>".
        " DNI: ". 
        $persona->getDNI()."<br/>".
        "Nombre: ".
        $persona->getNombre()."<br/>".
        "Pape: ".
        $persona->getPape()."<br/>".
        $persona->identificacion();

$propietario = new Propietario( "San Miguel" );
        echo
        "<h3>Propietario</h3>".
        " DNI: ". 
        $persona->getDNI()."<br/>".
        "Nombre: ".
        $persona->getNombre()."<br/>".
        "Pape: ".
        $persona->getPape()."<br/>".
        " Direccion: ". 
        $propietario->getDireccion();

$cliente = new Cliente(79582637, 6);
        echo
        "<h3>Cliente</h3>".
        " DNI: ". 
        $persona->getDNI()."<br/>".
        "Nombre: ".
        $persona->getNombre()."<br/>".
        "Pape: ".
        $persona->getPape()."<br/>".
        " Telefono: ".
        $cliente->getTelefono()."<br/>".
        "Vehiculos: ".
        $cliente->getVehiculos()."<br/><br/>";

$vehiculo = new Vehiculo("p4857648", "Subaru", "Impreza WRX STI");
        echo
        "<h3>Vehiculo</h3>".
        $vehiculo->identificacion().
        "Matricula: ".
        $vehiculo->getMatricula()."<br/>".
        "Marca: ".
        $vehiculo->getMarca()."<br/>".
        "Modelo: ".
        $vehiculo->getModelo()."&nbsp";

$cohe = new Coche(2.5,1.5);
        echo
        "<h3>Coche</h3>".
        "Matricula: ".
        $vehiculo->getMatricula()."&nbsp".
        "Marca: ".
        $vehiculo->getMarca()."&nbsp".
        "Modelo: ".
        $vehiculo->getModelo()."&nbsp".
        "Anchura: ".
        $cohe->getAnchura()."&nbsp".
        "Altura: ".
        $cohe->getAltura();

$moto = new Moto("250");
        echo
        "<h3>Moto</h3>".
        "Matricula: ".
        $vehiculo->getMatricula()."&nbsp".
        "Marca: ".
        $vehiculo->getMarca()."&nbsp".
        "Modelo: ".
        $vehiculo->getModelo()."&nbsp".
        "Limitador: ".
        $moto->getLimitador();
?>