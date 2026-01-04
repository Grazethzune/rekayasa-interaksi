<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KRSDetailResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $kelas = $this->kelasKuliah;
        $mk    = $kelas->mataKuliah;

        return [
            'id' => $this->id,
            'mata_kuliah_id' => $mk->id,
            'kelas_kuliah_id' => $kelas->id,
            'kode_mk'      => $mk->kode_mk,
            'nama_mk'     => $mk->nama_mk,
            'sks'         => $mk->sks,
            'semester'    => $mk->semester_saran,
            'kode_kelas'  => $kelas->kode_kelas,
            'dosen'       => optional($kelas->dosen)->nama_dosen,
            'hari'        => $kelas->hari,
            'jam_mulai'   => $kelas->jam_mulai,
            'jam_selesai' => $kelas->jam_selesai,
            'kuota'       => $kelas->kapasitas_max ?? 0,
            'terisi'      => $kelas->krs_detail_count ?? $kelas->krsDetail()->count(),
            'nilai'       => $this->nilai ?? null,
            'full'        => ($kelas->kapasitas_max ?? 0) > 0
                                  ? ($kelas->krs_detail_count ?? $kelas->krsDetail()->count()) >= ($kelas->kapasitas_max ?? 0)
                                  : false,        ];
    }
}
