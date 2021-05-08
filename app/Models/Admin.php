<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table='tb_admin';
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    protected $fillable=[
        'id',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',

    ];
}
