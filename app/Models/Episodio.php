<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assistido'];

    public function serie()
    {
        $this->belongsTo(Serie::class);
    }
}
