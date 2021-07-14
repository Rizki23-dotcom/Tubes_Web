<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $table='jenisbuku';
    protected $fillable=['jenis_buku'];
    
    public function books()
    {
        return $this->hasMany(Book::class,'id_jenis');
    }

}
