<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    protected $table = 'bio';
    protected $guarded; 

    public function user()
    {
        $this->belongsTo(Bio::class, 'id_user');
    }
}
