<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'tbl_kelas';
    protected $fillable = ['nama_kelas', 'semester_id'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}
