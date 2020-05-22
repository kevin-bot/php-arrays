<?php 
    // COMO SABER SI UNA VARIABLE ES UN ARRAY
        $datos = array("Nombre"=>"Kevin", "Apellido"=>"Narvaez","Edad"=>20);        
            //echo is_array($datos);
        // ESTA FUNCION VERIFICA SI LA VARIBALE QUE SE PASA COMO PARAMETRO ES ARRAY DEVOLVIENDO UN TRUE O FALSE
    

    // COMO RECORRER LOS ELEMENTOS DE UN ARRAY ASOCIATIVO 
        print_r($datos);
        echo "<br>";
        echo json_encode($datos);
        echo "<br>";
        foreach ($datos as $key => $value) {
            echo "<br> A $key Le corresponde $value <br>";
        }

        // SALIDA :

        /*Array ( [Nombre] => Kevin [Apellido] => Narvaez [Edad] => 20 )

        {"Nombre":"Kevin","Apellido":"Narvaez","Edad":20}

        A Nombre Le corresponde Kevin

        A Apellido Le corresponde Narvaez

        A Edad Le corresponde 20 */

        //AGREGAR ELEMENTO NUEVO A UN ARRAY ASOCIATIVO
        $datos["Pais"] = "Colombia";
        

    // CÓMO RECORRER UN ARRAY INDEXADO 
        echo "<br><br>";
    $semana = array("Lunes","Martes","Miercoles","Jueves","Viernes");

        for ($i=0; $i < count($semana); $i++){
            echo $semana[$i] ."<br>";
        }
        //AGREGAR UN ELEMENTO MÁS AL ARRAY
        $semana[] = "Sábado";

        //ORDENAR ELEMENTOS 
        echo "<br><br>"; 
        // SE UTILIZA EL METODO PREDEFINIDO SORT($ARRAY)
        sort($semana);
        for ($i=0; $i < count($semana); $i++){
            echo $semana[$i] ."<br>";
        }
?>