<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';
    protected $fillable = ['nama','deskripsi','promotor','tanggal','waktu','tempat','gambar'];
    
}
