<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'gallery_category_id'
    ];

    public function galleryCategory(){
        return $this->belongsTo(GalleryCategory::class, 'gallery_category_id', 'id');
    }
}
