<?php
//Arreglos
//Matrices Numericas
$movie[0] = 'Shaolin Monk';
$movie[1] = 'Drunken Master';
$movie[2] = 'American Ninja';
$movie[3] = 'Once Upon a time in china';
$movie[4] = 'Replacement Killers';

//Matriz Asociativa
$persons = array('Mary' => 'Female',
                 'John' => 'Male',
                 'Mirriam' => 'Female'
                );

//Matrices Multidimensionales
$movies = array(
                'Comedy' => array('Pink Panther', 'John English'),
                'Action' => array('Die Hard', 'Expendables'),
                'Epic' => array('The Lord of the rings'),
                'Romance' => array('Romeo and Juliet')
               );

//Funciones de Matriz
//Count()
$nombres= array("Andrea", "Emilio", "Carmen");
echo count($nombres);//contar los elementos en un array

//Is_array()
$nombres= array("Andrea", "Emilio", "Carmen");
echo is_array($nombres);//determina si una variable es array 

//sort
$nombres= array("Andrea", "Emilio", "Carmen");
sort($nombres);

print_r($nombres);

//Ksort()
$nombreEdad= array("Andrea"=>22, "Emilio"=>35, "Carmen"=>18);
Ksort($nombreEdad);

print_r($nombreEdad);

//Asort()
$nombreEdad= array("Andrea"=>22, "Emilio"=>35, "Carmen"=>18);
asort($nombreEdad);

print_r($nombreEdad);


//Variables
$var= "Valor"; 

$cantidad = 5; 
 
$precio = 3; 
 
$importe = $cantidad * $precio; 
echo ($importe);

//Algunas convenciones comunes relativas a los nombres de las variables son:

$variable= "Valor"; 
$variable1= "Valor"; 
$mivariable= "Valor";  
$Variable= "Valor";  
$MiVariableLarga= "Valor";  

$lugar1 = "Buenos aires"; /*Correcto, puede comenzar por una letra de la 'a' a la 'z', no escribir todo en  mayus*/ 
$_lugar_2 = "México"; /*Correcto, puede comenzar por un guión bajo*/ 

//La interpretación de variables dentro de comillas. \
$comillasDobles = "Texto entre comillas dobles, puede contener 'comillas 
simples' dentro sin problemas"; 
 
$comillasSimples ='"Texto entre comillas simples, puede contener "comillas 
dobles" pero sin variables dentro, porque usa comillas simples para delimitar 
el inicio y fin del bloque'; 
 
$escapeDoble = "Texto con \"comillas\" dobles escapadas"; 
 
$espapeSencillo = "Texto con \'comillas\' simples escapadas"; 


$nombre="Melvin";
$apellido="Mendoza";
 
$variablesDobles = "Texto con variables como $nombre y $apellido 
intercaladas entre comillas dobles, que se reemplazarán por su valor"; 
print($variablesDobles);
//Concatenacion en PHP
//Entre un texto y una variable. 
$nombre = 'Santiago'; 
$concatenacion = '<p id="saludo">Hola '. $nombre.'</p>'; 
print($concatenacion);

//Entre una variable y otra variable. 
$nombre = 'Juan'; 
$apellido = 'Perez'; 
$concatenacion = '<p>Su nombre y apellido es '.$nombre.$apellido.'</p>'; 
print($concatenacion);

//Constantes en PHP Las  Constantes  en  PHP  se  definen  con  la  función  define()
define ("PI", 3.1415926); 
define ("BR", "<br />"); 
define ("LIBRO", "PHP 6"); 
print(PI); 
print(BR); 

//Condicional if
/*if ($_POST["password"]=="superagente86") { 
    echo "<h1>Bienvenidol</h1>"; 
}*/


//ELSE ELSEIF
$clima = "soleado";
if ($clima == "lluvia") { 
    echo "Llevar paraguas"; 
    } else { 
    echo "No llevar paraguas"; 
} 

//Switch
$dia = "miercoles";
switch ($dia){ 
case "lunes": 
$texto = "¡Feliz día Lunes!"; 
break; 

case "martes": 
$texto = "¡Feliz día Martes!"; 
break; 

case "miercoles": 
$texto = "¡Feliz día Miercoles!"; 
break; 

case "jueves": 
$texto = "¡Feliz día Jueves!"; 
break; 

case "viernes": 
$texto = "¡Feliz día Viernes!"; 
break; 

case "sabado": 
$texto = "¡Feliz día Sabado!"; 
break; 

case "Domingo": 
$texto = "¡Feliz día Domingo!"; 
break; 

} 
echo ($texto); 

//default
//Se utiliza despues del ultimo break, para que imprima en caso de que no seleccionen una opcion del switch
$dia1 = "no se ";
switch ($dia1){ 

    case "lunes": 
    $texto1 = "¡Feliz día Lunes!"; 
    break; 

    case "martes":   
    $texto1 = "¡Feliz día Martes!"; 
    break; 

    case "miercoles": 
    $texto1 = "¡Feliz día Miercoles!"; 
    break;
    
    case "jueves": 
    $texto1 = "¡Feliz día Jueves!"; 
    break; 

    case "viernes": 
    $texto1 = "¡Feliz día Viernes!"; 
    break; 

    case "sabado": 
    $texto1 = "¡Feliz día Sabado!"; 
    break; 

    case "Domingo": 
    $texto1 = "¡Feliz día Domingo!"; 
    break; 
   
    default:($texto1= "Especifique un dia");

}
echo ("Ejemplo default: ".$texto1);

//Bucles
//for loop
for($i=0;$i<=10; $i++)
{
    echo "Ciclo actual: ". $i . "<br/>";
}

//WHILE LOOP
$x=15;
while($x<25):
    echo "While se repite<br/>";
    $x++;//incremento
endwhile;

//Do while LOOP
$x=15;

do
{
    echo "While se repite al menos una vez<br/>";
    $x++;
}while($x<25);

//FOREACH
$valores = array(5,9,8,"Hola","Andrea");
foreach($valores as $key):
    echo $key. "<br/>";
endforeach;

//array numerico
$nombres= array("Jose","Sofia", "Andrea", "Alberto");

//accediendo directamente al indice
echo $nombres[0];
echo $nombres[1];
echo $nombres[2];

//recorriendo con un bucle
//foreach
foreach($nombres as $key)
{
    echo $key. "<br/>";

}

//recorriendo con un bucle
//for
/*
for($i=0;$i<$nombres;$i++):
    echo $nombres[$i]. "<br/>";
endfor;*/

//array asociaivo
$multiplecolors= array(
    "Jose" => array("Azul", "Rojo", "Verde"),
    "Sofia"=> array("Violeta", "Rosado")
);

echo "<h2>Jose</h2>";
echo $multiplecolors["Jose"][0]. "<br/>";
echo $multiplecolors["Jose"][1]. "<br/>";
echo $multiplecolors["Jose"][2]. "<br/>";

//Para la lectura de arrays asociativos, foreach
foreach($multiplecolors as $nombre=>$values)
{
    echo "<h2>$nombre </h2> <b> le gustan los colores: </b><br/>";
    foreach ($values as $colores):
        echo $colores . "<br/>";
    endforeach;

}

//Array multidimensional numerico
$multiNumerico=array(
    array("Jose", "Andrea", "Carmen"),
    array(22,35,18),
    array("Masculino", "Femenino", "Femenino")
);

//recorrer array
echo "Nombre:" .$multiNumerico[0][0] ."<br/>";
echo "Edad:" .$multiNumerico[1][0] ."<br/>";
echo "Sexo:" .$multiNumerico[2][0] ."<br/>";

//recorrer array
foreach($multiNumerico as $key=>$value)
{
    foreach($value as $datos):
        echo $datos. "<br/>";
    endforeach;

}

//recorrer array
for($i=0;$i<count($multiNumerico);$i++)
{
    echo "<br/>Fila: ". $i ."<br/>";
    for($j=0;$j<count($multiNumerico[$i]); $j++)
    {
        echo $multiNumerico[$i][$j] . "<br/>";
    }
}

//array multidimensional numerico
$asoc=array(
    "Jose"=>array(22, "Masculino"),
    "Andrea"=>array(35, "Femenino"),
    "Carmen"=>array(18, "Femenino")
);

//recorrer array
foreach($asoc as  $key=>$values){
    {
        echo "<b>$key</b><br/>";
    }
}

//array multidimensional numerico
$asoci=array(
    "Jose"=>array("Edad"=>22,"Sexo"=>"Masculino"),
    "Andrea"=>array("Edad"=>35,"Sexo"=>"Femenino"),
    "Carmen"=>array("Edad"=>18,"Sexo"=>"Femenino")
);

//recorrer array
foreach($asoci as  $key=>$values){
    {
        echo "<br/><b>$key</b><br/>";
        foreach($values as $key2=>$datos)
        {
            echo "<b>" .$key2 .": </b>";
            echo $datos . "<br/>";
        }
    }
}

//funciones de cadena
$cadena="Programacion Computacional IV";

//strtolower
echo strtolower($cadena);

//strtoupper
echo strtoupper($cadena);

//strlen
echo strlen($cadena);

//explode
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));

//substr
echo substr($cadena, 3, 4);

//str_replace
echo str_replace("IV", "I", $cadena);

//strpos
echo strpos($cadena, "IV");

//sha1
echo sha1($cadena);

//md5
echo md5($cadena);

//str_word_count
echo str_word_count($cadena);

//ucfirst
echo ucfirst($cadena);

//lcfirst
echo lcfirst($cadena);


//funciones numericas
//is_numeric
$number=5;
if(is_numeric($number)){
    echo  'El valor de number es numerico <br/>';
    if(is_numeric($number1)){
        echo 'El valor de $number1 es numerico <br/>';
    }else{
        echo 'El valor de $number1 no es numerico <br/>';
    }
}else{
    echo 'El valor de $number no es numerico <br/>';
}

//number format
$numbers=256148;
echo number_format($number);

//rand
echo rand(1,100);//genera un numero aleatorio del 1 al 100

//round
echo round(2.39);

//sqrt
echo sqrt(24);

//cos
echo cos(24);

//sin
echo sin(24);

//tan
echo tan(24);

//pi
echo pi();

//funciones fecha y hora
//date(Y-m-d,[timestamp]);

echo time();

//identificadores de zona horaria
$identificadores= DateTimeZone::listIdentifiers();

foreach($identificadores as $key=>$valores){
    echo $valores."<br/>";
}

//Establecer zona horaria
$identificador="Pacific/Wake";
date_default_timezone_get($identificador);

echo date_default_timezone_get();

//Cambiar de zona horaria
echo "El tiempo en: ".date_default_timezone_get(). "es" . date("H: i: s")."<br/>";

date_default_timezone_set("Pacific/Wake");
echo "El tiempo en: ". date_default_timezone_get(). "es" . date("H: i: s");

//funcion mktime
/*mktime(hour, minute, second, month, day, year, is_dst);

echo mktime(0,0,0,10,13,2025)*/

//Parametros de tiempo
//r
echo date("r");

//a, A
echo date("a")."<br/>";
echo date("A");

//g,G
echo date("g")."<br/>";
echo date("G");

//h,H
echo date("h")."<br/>";
echo date("H");

//i, S
echo date("i")."<br/>";
echo date("s");

//parametros de dia
echo date("d");
echo date("j");
echo date("D");
echo date("l");
echo date("w");
echo date("z");
echo date("m");
echo date("n");
echo date("M");
echo date("F");
echo date("t");

//Parametros de a'o
echo date("L");
echo date("Y");
echo date("y");

//Funciones definidas por el usuario
function colores($color="verde"){
    return "<p> Su color favorito es: $color</p>";

}

//pasamos  un valor como argumento
echo colores("Azul");

//si no se pasa un valor como argumento, tomara el valor por defecto
echo colores();

//por valor
function saludo($nombre){
    $nombre .= ", Buenos dias";
}

$nombre="Sofia Flores ";
saludo($nombre);

echo $nombre;

//declaramos un arreglo llamado fruta
$fruta= array("manzana", "uva", "pera");

//creamos una funcion llamada frutas y pasaremos un argumento fruta
function frutas($fruta){
    //llamado al arreglo fruta
    //y agregamos una fruta al arreglo
    array_push($fruta, "Sandia");
}

//llamado a la funcion frutas
frutas($fruta);
var_dump($fruta);

//por referencia
//ahora el argumento se pasa por referencia
//anteponiendo el simbolo  &
function saludo1(&$nombre){
    $nombre .= ",Buenos dias";
}

$nombre="Sofia Flores";
saludo1($nombre);

echo $nombre;


//funciones anonimas, son funciones sin nombre
$saludo = function(){
    return "Hola";
};

echo $saludo(); //Devuelve Hola

//Anadiendo una funcion en otra
function saludoi($saludar){
    echo $saludar();
}

saludoi (function(){
    return "Buenos dias";
});

//Clausuras, use
$color="Azul";

$mostrar = function() use($color){
    echo "Su color favorito es $color";
};

$mostrar();

//si se altera el valor de la variable $color no afectara la variable original

$color="Azul";

$mostrar = function() use($color){
    //echo "Su color favorito es $color";
    echo $color="Verde";
};

$mostrar();
echo $color; //mostrara el color azul

//si se quiere alterar usar ampersand & 
$color="Azul";

$mostrar = function() use(&$color){
    //echo "Su color favorito es $color";
    echo $color="Verde";
};

$mostrar();
echo $color;

//callbacks
$sludo = function($nombre){
    printf("Hola". $nombre);
};

$saludo("Andrea");//Devuelve Hola Andrea
call_user_func($saludo, "Amigos");//Devuelve Hola Amigos

/* DEClARACIONES DE TIPO
fuction  saludo ($nombre){
    echo "Hola" .$nombre;
}
saludo(["Carmen"]); */

function saludo2(array $nombre){
    echo "Hola" . join("".$nombre);
}

//llamado a la funcion saludo
//pasamos un arreglo de nombre como argumento
saludo2(["Carmen", "Jose"]);

//Declaraciones de tipo de evolucion

//declaracion de funcion suma
//se define como un valor de retorno un valor entero
function suma($numero1, $numero2):int{
    return $numero1+$numero2;
}

//con var_dump visualizamos el tipo de dato que retorna
var_dump(suma(6,7));
//  si cambiamos el valor de retorno estara devolviendo el valor sin decimales
var_dump(suma(6.5,2.7));

//declaracion de funcion suma
//se define como un valor de retorno un valor entero
//especificamos el valor float para que devuelva decimales
function suma1($numero1, $numero2):float{
    return $numero1+$numero2;
}

//  si cambiamos el valor de retorno estara devolviendo el valor sin decimales
var_dump(suma1(6.5,2.7));








?>