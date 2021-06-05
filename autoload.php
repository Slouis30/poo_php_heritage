<?php 
    function chargerClasse($classname){
        require($classname.".php");
    }
    spl_autoload_register("chargerClasse");