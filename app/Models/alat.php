<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;


class alat extends Model
{
    use HasFactory;
    protected $table = 'data_alat';
    protected $primarykey = 'id';
}