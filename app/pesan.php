<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    protected $table='pesan';
    public $timestimes=false;
    protected $fillable =['nama', 'email', 'phone_number', 'pesan'];
}
