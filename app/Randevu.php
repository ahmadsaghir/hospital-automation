<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Randevu extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('randevu.show', $this);
    }
    public function poliklinik()
    {
        return $this->belongsTo(Poliklinik::class,'poliklinikID');
    }
}
