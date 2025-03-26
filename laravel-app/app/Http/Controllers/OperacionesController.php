<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    //suma
    public function suma($num1 = 0, $num2 = 0)
    {
        return 'La suma de ' . $num1 . ' + ' . $num2 . ' es: ' . ($num1 + $num2);
    }

    //resta
    public function resta($num1 = 0, $num2 = 0)
    {
        return 'La resta de ' . $num1 . ' - ' . $num2 . ' es: ' . ($num1 - $num2);
    }

    //multiplicacion
    public function multiplicacion($num1 = 0, $num2 = 0)
    {
        return 'La multiplicacion de ' . $num1 . ' * ' . $num2 . ' es: ' . ($num1 * $num2);
    }

    //division
    public function division($num1 = 0, $num2 = 0)
    {
        if ($num2 == 0) {
            return 'No se puede dividir por 0';
        }
        return 'La division de ' . $num1 . ' / ' . $num2 . ' es: ' . ($num1 / $num2);
    }
}
