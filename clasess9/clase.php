<?php

class Mascota {
  protected $nombre;
  protected $edad;
  protected $raza;
  
  public function __construct($nombre, $edad, $raza) {
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->raza = $raza;
  }
  
  public function hacerSonido() {
    return "Miau";
    // Código para hacer un sonido genérico de mascota
  }
  
  public function getNombre() {return $this->nombre;}
  public function getEdad() {return $this->edad;}
  public function getRaza() {return $this->raza;}

}

//uso Clase Gato

$miGato = new Mascota("Minimi", 1, "Angora");
$miGato1 = new Mascota("Mishifu", 2, "Egipcio");


echo "<h2>Clases Mascota  y Libro...</h2>";
echo "<h4>Mascota</h4>";
echo "Mi gato se llama " . $miGato->getNombre(). " y tiene ". $miGato->getEdad(). " anio su raza es ".$miGato->getRaza();
echo "<h4></h4>";
echo "Mi gato se llama " . $miGato1->getNombre(). " y tiene ". $miGato1->getEdad(). " anio su raza es ".$miGato1->getRaza()."</tr>";

//Clase libro
class Libro {
  protected $titulo;
  protected $isbn;
  protected $genero;
  protected $autor;
  
  public function __construct($titulo, $isbn, $genero, $autor) {
    $this->titulo = $titulo;
    $this->isbn = $isbn;
    $this->genero = $genero;
    $this->autor = $autor;
  }
  
  
  public function getTitulo() {return $this->titulo;}
  public function getIsbn() {return $this->isbn;}
  public function getGenero() {return $this->genero;}
  public function getAutor() {return $this->autor;}
 

}

//uso Clase Libro

$milibro = new Libro("LA VOZ DE LOS VALIENTES", 9788467068542, "Novela contemporanea", "Rafael Tarradas Bulto");

echo "<h4>Libro</h4>";
echo "El libro tiene como titulo: " . $milibro->getTitulo(). 
"<h4></h4>".
"  ISBN: ". $milibro->getIsbn(). 
"<h4></h4>".
" Genero: ".$milibro->getGenero().
"<h4></h4>".
 " Autor: ".$milibro->getAutor();
?>