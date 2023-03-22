<?php


    /*//clase abstracta
     abstract class Auto{
        //miembros de la clase
    
    }

    //interface
    interface iAuto{

    }
    interface iAuto2{}

    class Auto2 extends Auto{

    }
    class Auto3 implements iAuto, iAuto2{}

    //instancia de clase
    //-$auto = new Auto();
    $auto = new iAuto();*/

        //clase abstracta
        abstract class Mascota{
            public $nombre;
            public $edad;

            
            public function saludar(){
                echo "Funcion no abstracta";
            }
            public function getNombre(){
                return $this->nombre;
            }
            public function getEdad(){
                return $this->edad;
            }
            public function sonido(){echo "miau";}
            //metodo abstracto
            /*abstract function getNombre(){
                return $this->nombre;
            }
        }
        //establecer herencia
        class Gato extends Mascota{
            public function getNombre()
            {
                return $this->nombre;
            }*/
        }

       /* $gato = new Gato("misi",1);
        //echo $gato->saludar();
        echo $gato->getNombre();
        echo $gato->getEdad();
        $gato->sonido();*/



        //intefaces
        interface IMascota{
            public function getNombre();
            public function getEdad();
        }

        interface IMamifero{
            public function sonido();
        }

        //implementacion de interfaces
        class Gato implements IMascota, IMamifero{
            public $nombre;
            public $edad;

            function __construct($nombre, $edad)
            {
                $this->nombre= $nombre;
                $this->edad= $edad;
            }


            public function getNombre()
            {
                return $this->nombre;
            }
            public function getEdad()
            {
                return $this->edad;
            }
            public function sonido(){echo "";}

            
        }
        $gato = new Gato("misi",1);
        //echo $gato->saludar();
        echo
        "<h2>Clases Abstractas</h2>".
        "Nombre: ". 
        $gato->getNombre()."<br/>".
        "Edad: ".
        $gato->getEdad()."<br/>"."<br/>";

        abstract class Instrumento{
            public $name;
            public $tipo;
            
            public function tocar(){
                echo "<br/>*Suena musica*<br/>";
            }
            
            abstract function getTipo();
            abstract function getNombre();

        }

        class Guitarra extends Instrumento{
            public function getTipo()
            {
                return $this->tipo;
            }
            public function getNombre()
            {
                return $this->name;
            }
        }
        class Saxofon extends Instrumento{
            public function getTipo()
            {
                return $this->tipo;
            }
            public function getNombre()
            {
                return $this->name;
            }
        }
        class Violin extends Instrumento{
            public function getTipo()
            {
                return $this->tipo;
            }
            public function getNombre()
            {
                return $this->name;
            }
        }

        $instru = new Guitarra();
        $instru->name=" Guitarra ";
        $instru->tipo=" Electrica";
        echo
        "Nombre: ". 
        $instru->getNombre()."<br/>".
        "Tipo: ". 
        $instru->getTipo()."<br/>".
        $instru->tocar();

        $instru = new Saxofon();
        $instru->name=" Saxofon ";
        $instru->tipo=" Viento ";
        echo
        "Nombre: ". 
        $instru->getNombre()."<br/>".
        "Tipo: ". 
        $instru->getTipo()."<br/>".
        $instru->tocar();

        $instru = new Violin();
        $instru->name=" Violin ";
        $instru->tipo=" Cuerdas ";
        echo
        "Nombre: ". 
        $instru->getNombre()."<br/>".
        "Tipo: ". 
        $instru->getTipo()."<br/>".
        $instru->tocar();

        echo "<h3>Utilizando Interfaces</h3>";
        //intefaces
        interface IInstru{
            public function getNombre();
            public function getTipo();
        }

        interface ISonido{
            public function sonido();
        }

        //implementacion de interfaces
        class Guitarra1 implements IInstru, ISonido{
            public $nombre;
            public $tipo;

            function __construct($nombre, $tipo)
            {
                $this->nombre= $nombre;
                $this->tipo= $tipo;
            }


            public function getNombre()
            {
                return $this->nombre;
            }
            public function getTipo()
            {
                return $this->tipo;
            }
            public function sonido(){echo "<br/>*Suena musiquita buena*<br/>";}
        }

        $instrumento = new Guitarra1("Guitarra","Electrica");
        echo
        "Nombre: ". 
        $instrumento->getNombre()."<br/>".
        "Edad: ".
        $instrumento->getTipo()."<br/>"."<br/>".
        $instrumento->sonido();

        //implementacion de interfaces
        class Saxofon1 implements IInstru, ISonido{
            public $nombre;
            public $tipo;

            function __construct($nombre, $tipo)
            {
                $this->nombre= $nombre;
                $this->tipo= $tipo;
            }


            public function getNombre()
            {
                return $this->nombre;
            }
            public function getTipo()
            {
                return $this->tipo;
            }
            public function sonido(){echo "<br/>*Suena musiquita buena*<br/>";}
        }

        $instrumento = new Saxofon1("Saxofon","Viento");
        echo
        "Nombre: ". 
        $instrumento->getNombre()."<br/>".
        "Edad: ".
        $instrumento->getTipo()."<br/>"."<br/>".
        $instrumento->sonido();

        //implementacion de interfaces
        class Violin1 implements IInstru, ISonido{
            public $nombre;
            public $tipo;

            function __construct($nombre, $tipo)
            {
                $this->nombre= $nombre;
                $this->tipo= $tipo;
            }


            public function getNombre()
            {
                return $this->nombre;
            }
            public function getTipo()
            {
                return $this->tipo;
            }
            public function sonido(){echo "<br/>*Suena musiquita buena*<br/>";}
        }

        $instrumento = new Violin1("Violin","Cuerda");
        echo
        "Nombre: ". 
        $instrumento->getNombre()."<br/>".
        "Edad: ".
        $instrumento->getTipo()."<br/>"."<br/>".
        $instrumento->sonido();

        

?>