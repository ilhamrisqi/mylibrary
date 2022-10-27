<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    private static array $writers = [
        [
            'id' => 1,
            'nama' => 'ilham',
            'negara' => 'Indonesia',
            'deskripsi' => 'Asyiap',
            'contact' => '08232',
            'image' => 'foto1.jpg'
        ],
        [
            'id' => 2,
            'nama' => 'Risqi',
            'negara' => 'Indonesia',
            'deskripsi' => 'Muantap',
            'contact' => '082121',
            'image' => 'foto2.jpg'],
        [
            'id' => 3,
            'nama' => 'Rudy',
            'negara' => 'Indonesia',
            'deskripsi' => 'Yoooiiiii',
            'contact' => '081122',
            'image' => 'foto3.jpg'],
        [
            'id' => 4,
            'nama' => 'Tino',
            'negara' => 'Indonesia',
            'deskripsi' => 'aaawwww',
            'contact' => '08343443',
            'image' => 'foto4.jpg'],
        [
            'id' => 5,
            'nama' => 'Toni',
            'negara' => 'Indonesia',
            'deskripsi' => 'Infffoooooo',
            'contact' => '084545455',
            'image' => 'foto5.jpg'
        ]
    ];

    public static function index(): \Illuminate\Support\Collection
    {
        return collect(self::$writers);
    }

    public static function getWriter($id)
    {
        return self::index()->firstWhere('id', $id);
    }
}
