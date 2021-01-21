<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // questo comando protected serve solo per andare ad indicare il nome della tabella manualmente se non riesce a trovarla.
    // protected $table = 'products';
    protected $fillable = ['name', 'description', 'code', 'price'];
}
