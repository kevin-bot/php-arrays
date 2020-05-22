<?php 

    // EN ESTE CASO SE CREA UN ARRAY SEMANA 
    // NO ES NECESARIO PONER EL INDICE "[0] = ["Lunes"]"
    // PHP RECONOCE QUE ESTAMOS CREANDO UN ARRAY INDEXADO  
    // PERO TAMBIEN PUEDE PONER LOS INDICES EN LOS CORCHETES, PERO SE DEBE DE TENER CUIDADO   

    // PRIMERA FORMA DE CREAR ARRAY INDEXADO
    $semana []= ["Lunes"]; // i = 0
    $semana []= ["Martes"]; // i = 1
    $semana []= ["Miercoles"]; // i = 2 
    $semana []= ["Jueves"]; // i = 3
    $semana []= ["Viernes"]; // i = 4
    print_r($semana[1]);
    
    // SEGUNDA FORMA DE CREAR ARRAY INDEXADO
    // TODA LA DECLARACIÓN EN UNA SOLA LÍNEA
    $semanas =array("Lunes","Martes","Miercoles","Jueves","Viernes");
    echo "</br>El Día es: ".$semanas[1];

    // ____________________________**_______________________________

    // ARRAY ASOCIATIVO 
    // ARRAYS QUE SE IDENTIFICAN CON UN NOMBRE Y NO UN INDICE
    $datos = array("nombre"=>"Kevin", "Apellido"=>"Narvaez","Salario"=>5000);
    echo "</br>". $datos["Salario"];

    
?>