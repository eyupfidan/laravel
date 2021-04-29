<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactmodel extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $fillable  = ["adsoyad","mail","telefon","metin","created_at","updated_at"];
}
