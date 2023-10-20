<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;
    protected $table = 'articles'; // Nama tabel dalam database

    protected $fillable = [
        'judul',
        'konten',
        'category_id',
        'slug',
        'kutipan',
        'image',
        'views',
        'is_published',
        'published_at',
    ];
}
