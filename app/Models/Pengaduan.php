<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    // Mengenalkan tabel
    protected $table = 'pengaduan';
    // Mengenalkan column yang terdapat di tabel pengaduan
    protected $guarded;

    // relasi tabel pengaduan -> users
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
