<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'event_date',
        'seats',
        'image',
        'event_type_id',

        // SEO
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_image',

        // EXTRA
        'position',
        'status',
    ];

    public function eventType()
    {
        return $this->belongsTo(EventType::class);
    }
  

   public function details()
{
    return $this->hasMany(EventDetails::class, 'event_id')->orderBy('sort_order');
}
    
}
