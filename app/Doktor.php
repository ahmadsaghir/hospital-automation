<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doktor extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('doktor.show', $this);
    }
    public function poliklinik()
    {
        return $this->hasOne(Poliklinik::class,'doktorID');
    }
}
