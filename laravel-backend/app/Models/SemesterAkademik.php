<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SemesterAkademik extends Model
{
    protected $table = 'semester_akademik';

    protected $fillable = [
        'kode_semester', 'nama_semester', 'tgl_mulai', 'tgl_selesai',
        'krs_mulai', 'krs_selesai', 'status',
    ];

    protected $casts = [
        'krs_mulai' => 'datetime',
        'krs_selesai' => 'datetime',
    ];

    public function isKrsOpen()
    {
    if (!$this->krs_mulai || !$this->krs_selesai) return false;

    return Carbon::now()->between($this->krs_mulai, $this->krs_selesai);
    }

    public function kelasKuliah()
    {
        return $this->hasMany(KelasKuliah::class);
    }

    public function krs()
    {
        return $this->hasMany(KRS::class);
    }

    public function khs()
    {
        return $this->hasMany(KHS::class);
    }

    public function tagihan()
    {
        return $this->hasMany(Tagihan::class);
    }
}
