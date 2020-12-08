<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'orders';
    public $timestaps = false;

    protected $fillable = ['id_customers', 'id_product'];
}
