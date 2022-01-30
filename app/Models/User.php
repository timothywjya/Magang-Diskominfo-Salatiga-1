<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'No_Telepon',
        'email',
        'password',
        'nik',
        'nama_depan',
        'nama_belakang',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kecamatan',
        'kelurahan',
        'rt',
        'rw',
        'agama',
        'kwn',
        'pekerjaan',
        'warga',
        'berkas',
        'nama_ibu',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ekraf()
    {
        return $this->hasMany(Ekraf::class);
    }
    public function pariwisata()
    {
        return $this->hasMany(Pariwisata::class);
    }
    public function kur()
    {
        return $this->hasMany(Kur::class);
    }
}
