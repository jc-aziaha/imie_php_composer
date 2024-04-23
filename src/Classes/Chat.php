<?php
namespace App\Classes;

use App\Contracts\Animal;

    class Chat implements Animal
    {
        public function crier()
        {
            echo "chat";
        }
    }