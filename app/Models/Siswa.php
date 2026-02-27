<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa'; // WAJIB TAMBAH INI

    protected $fillable = [
        'nama',
        'umur',
        'nilai'
    ];
}