<?php
namespace App\Classes;

use App\Contracts\Animal;

    class Souris implements Animal
    {
        public function crier()
        {
            echo "La souris chicote.";
        }
    }