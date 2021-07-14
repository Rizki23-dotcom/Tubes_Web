<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title','writer','summary','price','photo','id_jenis'];

    public function isbn()
    {
        return $this->hasOne(Isbn::class,'id_isbn');
    }

    public function jenis()
    {
        return $this->belongsTo(Jenis::class,'id_jenis');
    }

    public function identity()
    {
        return $this->belongsToMany(Identity::class,'identity_book','id_book','id_identity')->withTimeStamps();
    }

    public function getIdentityBookAttribute()
    {
        return $this->identity->pluck('id')->toArray();
    }

}
