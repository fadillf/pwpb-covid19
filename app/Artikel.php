<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'table_artikel';
    protected $guarded = ['id'];

    public function Kategori(){
        return $this->belongsTo(\App\Kategori::class, 'kategori_id', 'id');
        
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
