<?php

    $animalTipo1 = readline(); 
    $animalTipo2 = readline(); 
    $animalTipo3 = readline(); 

    if($animalTipo1 == "vertebrado")
    {

        if($animalTipo2 == "ave")
        {
            if($animalTipo3 == "carnivoro")
            {
                echo "aguia\n";
            }
            else if($animalTipo3 == "onivoro")
            {
                echo "pomba\n";
            }
        }
        else if($animalTipo2 == "mamifero")
        {
            if($animalTipo3 == "onivoro")
            {
                echo "homem\n";
            }
            else if($animalTipo3 == "herbivoro")
            {
                echo "vaca\n";
            }
        }

    }
    elseif($animalTipo1 == "invertebrado")
    {

        if($animalTipo2 == "inseto")
        {
            if($animalTipo3 == "hematofago")
            {
                echo "pulga\n";
            }
            else if($animalTipo3 == "herbivoro")
            {
                echo "lagarta\n";
            }
        }
        else if($animalTipo2 == "anelideo")
        {
            if($animalTipo3 == "hematofago")
            {
                echo "sanguessuga\n";
            }
            else if($animalTipo3 == "onivoro")
            {
                echo "minhoca\n";
            }
        }

    }

?>