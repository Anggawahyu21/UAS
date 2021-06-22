<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MGuru extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_guru','nip','nama','profesi','tempatlhr','tgllhr', 'alamat', 'email', 'notelp','foto'
    ];


}
