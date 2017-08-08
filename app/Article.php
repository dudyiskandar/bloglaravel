<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $table='article';
	public $timestimes =false;
    protected $fillable = [	'judul', 'isi', 'kategori', 'foto', 'screenshoot1', 'screenshoot2', 'screenshoot3', 'screenshoot4', 'screenshoot5', 'bahasa_pem', 'status', 'author', 'tanggal' ];
}
