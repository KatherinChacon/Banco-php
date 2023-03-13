<?php
//Se crea clase
class OBJElementosFrm{
    function __construct()
    {
    }
    //Se crea función crear lista
    function CrearListaEstado($Lista,$nombre)
    {
        $cadenaInicio = '<select name = "'.$nombre.'">';

        $opcion = "";
        //Se recorre el arreglo
        foreach ($Lista as $valor){
           //Se imprime la lista en HTML
           $opcion = "<option>". $valor."</option>".$opcion;
           }
           $cadenaFinal = "</select";
           $listaSelect = $cadenaInicio.$opcion.$cadenaFinal;
           return $listaSelect;
    }
    //Se crea función crear lista
    function CrearListaTipoDoc($Lista,$nombre)
    {
     $cadenaInicio = '<select name = "'.$nombre.'">';

     $opcion = "";
     //Se recorre el arreglo
     foreach ($Lista as $valor){
        //Se imprime la lista en HTML
        $opcion = "<option>". $valor."</option>".$opcion;
        }
        $cadenaFinal = "</select";
        $listaSelect = $cadenaInicio.$opcion.$cadenaFinal;
        return $listaSelect;     
    } 
}

?>
