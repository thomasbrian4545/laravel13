<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = [];

    // protected function nama(): Attribute
    // {
    //     return Attribute::make(
    //         // get: fn (string $value) => strtoupper($value)
    //         // get: fn (string $value) => $value." S.Kom"
    //         get: fn () => "Sdr/i " . $this->attributes['nama']
    //     );
    // }

    protected function tanggalLahir(): Attribute
    {
        return Attribute::make(
            get: function (string $value) {
                $nama_bulan = [
                    "Januari", "Februari", "Maret", "April", "Mei",
                    "Juni", "Juli", "Agustus", "September", "Oktober",
                    "November", "Desember"
                ];
                $tanggal = date("d", strtotime($value));
                $bulan = date("m", strtotime($value)) - 1;
                $tahun = date("Y", strtotime($value));
                return "$tanggal $nama_bulan[$bulan] $tahun";
            }
        );
    }

    protected function namaBesar(): Attribute
    {
        return Attribute::make(
            // get: fn () => strtoupper($this->nama)
            get: fn ($value, array $attributes) => strtoupper($attributes['nama'])
        );
    }

    protected function nama(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => strtolower($value),
        );
    }

    protected $casts = [
        'ipk' => 'integer',
    ];
}
