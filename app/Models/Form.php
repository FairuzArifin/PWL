<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi'];

    public function author(){
        return $this->belongsTo(User::class);
    }
}
