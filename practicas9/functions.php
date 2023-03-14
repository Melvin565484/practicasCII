<?php
//constante con el nombre del archivo
define('FILENAME', 'datos.txt'); 

//funcion listar    
function getData(){
//si el archivo no existe, lo creamos vacío        
if(!file_exists(FILENAME)){
     file_put_contents(FILENAME, '');
     }//obtener los datos del archivo y convertir en array        
     $data = file_get_contents(FILENAME);
     $data = json_decode($data, true);
      //si los datos no son array, lo inicializamos vacio
      if(!is_array($data)){
        $data=[];
        }
        return $data;
         }
         //function guardar
         function saveData($name, $lastname, $age){
             //obtener dataos actuales del archivo
             $data = getData();
             //crear nuevo registro 
             $record=[
                'name' => $name,
                 'lastname' => $lastname,
                  'age' => $age
                ];
                   //agregar el nuevo registro al array 
                   $data[] = $record;
                   //convertir el array a formato JSON y guardar en archivo
                   $data = json_encode($data);
                    file_put_contents(FILENAME, $data);
        }
//funcion actualizar 
 function updateData($cod, $name, $lastname, $age){
     //obtener los datos actuales
     $data = getData();
      //actualizar el registro correspondiente
       $data[$cod]['name'] = $name;
       $data[$cod]['lastname'] = $lastname;
       $data[$cod]['age'] = $age;
        //convertir a formato json y guardar  en el archivo
        $data = json_encode($data);
        file_put_contents(FILENAME, $data);
    }

//funcion eliminar
function deleteData($cod){
    //obtener los datos actuales
    $data = getData();
    //eliminar el registro correspondiente
    //$data[2]->indice
    unset($data[$cod]);

    //reindexar el array
    $data = array_values($data);

    //convertir a formato json y guardar  en el archivo
    $data = json_encode($data);
    file_put_contents(FILENAME, $data);
}
    
    
?>








































