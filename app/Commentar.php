<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentar extends Model
{
	protected $table='comment';
	public $timestamps=false;
	protected $fillable =['id_article', 'nama','email','comment','tanggal',]; 
}
