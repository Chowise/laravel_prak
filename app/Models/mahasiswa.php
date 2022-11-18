<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";
    protected $primarykey = 'nim';
    protected $incerementing = false;
    protected $keyType = 'string';

    protected $fillable =['nim', 'nama', 'umur', 'alamat', 'kota', 'jurusan', 'created_at', 'updated_at'];

}
