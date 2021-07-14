<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    use HasFactory;

    protected $table = 'identity';
    protected $fillable = ['nama_identity'];
    public function books()
    {
        return $this->belongsToMany(Book::class,'identity_book','id_identity','id_book');
    }

}
