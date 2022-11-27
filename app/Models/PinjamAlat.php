<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamAlat extends Model
{
    use HasFactory;
    protected $table = 'pinjam_alat';
    protected $primarykey = 'id';
    public function alat()
    {
        $this->hasOne(alat::class, 'fk_id_alat');
    }
}
