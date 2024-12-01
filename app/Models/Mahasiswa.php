<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nama',
        'npm',
        'fakultas',
        'prodi',
        'tingkat',
        'jenis_kelamin',
        'email',
        'phone',
        'alamat',
        'ukm',
        'alasan',
        'cv'
    ];
}
