<?php

use App\Classes\Chat;
use App\Classes\Chien;
use App\Classes\Souris;

    require __DIR__ . "/vendor/autoload.php";

    $chien   = new Chien();
    $chat    = new Chat();
    $souris  = new Souris();

    $souris->crier();

