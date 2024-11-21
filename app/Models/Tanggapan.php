<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapan';
    protected $guarded;

    public function pengaduan()
    {
        $this->belongsTo(Pengaduan::class, 'id_pengaduan');
    }

    public function user()
    {
        $this->belongsTo(User::class, 'id_user');
    }
}
