<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Writer extends Model
{
    use HasFactory;


    //fillable bertujuan untuk mendeteksi untuk membuat data baru


    protected $fillable = [
        //data yang akan dimaksukkan ke folder migrations
        "nama",
        "negara",
        "deskripsi",
        "contact",
        "image"
    ];

    protected $with = ['books'];


    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

}
