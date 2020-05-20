<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Kategori extends Model
{
    protected $table = 'table_kategori';
    protected $guarded = ['id'];

    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug($value, '-');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
    public function Artikel(){
        return $this->hasMany(\App\Artikel::class, 'kategori_id', 'id');
    }
}
