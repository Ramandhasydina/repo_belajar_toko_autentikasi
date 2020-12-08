<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customers';
    public $timestaps = false;

    protected $fillable = ['nama_customers','alamat'];
}
