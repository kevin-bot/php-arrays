<?php 
    // ARRAY MULTIDIMENCIONALES 
        $alimentos  = array(
                            "Fruta"=>array(
                                            "Tropical" => "Kiwi",
                                            "Citricos"=>"Mandarina",
                                            "Otros"=>"Manzana"    
                                        ),
                            "Leche"=>array(
                                            "Animal"=>"vaca",
                                            "Vegetal"=>"Coco"
                                        ),
                            "Carne"=>array(
                                            "Vacuno"=>"lomo",
                                            "Porcino"=>"pata"
                                        )
                        );
        // COMO SE VE ESTO                                 
            print_r($alimentos);
            echo "<br><br>";
            echo json_encode($alimentos);

        // ACCEDER A UN ELEMENTO
        echo "<br><br>";
        echo $alimentos["Fruta"] ["Tropical"];
        echo "<br>";
        echo $alimentos["Leche"] ["Animal"];
                   
?>