<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

function getPrice($price)
{
    $price = floatval($price)/100;

    return number_format($price, 2, ',', ' '). ' Ar';
}
