<?php
namespace App\Classes;

use App\Contracts\Animal;

    class Chien implements Animal 
    {
        public function crier() : void
        {
            echo "Wouf";
        }
    }