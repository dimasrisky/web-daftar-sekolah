<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'daftar_kecamatan';
    protected $fillable = [
        'nama'
    ];

    public function sekolah(){
        return $this->hasMany(Sekolah::class);
    }

}
