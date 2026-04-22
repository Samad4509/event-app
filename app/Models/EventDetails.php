<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class EventDetails extends Model
{
    use HasFactory;

    protected $table = 'event_details';

    protected $fillable = [
        'event_id',
        'type',
        'name',
        'slug',
        'description',
        'image',
        'checklist',
        'stats',
        'sort_order',
    ];

    protected $casts = [
        'stats' => 'array',
    ];

    // ── Relationship ──────────────────────────────────────────
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    // ── Auto slug from name ───────────────────────────────────
    protected static function booted(): void
    {
        static::saving(function (self $detail) {
            if ($detail->name) {
                $detail->slug = Str::slug($detail->name);
            }
        });
    }

    // ── Checklist as array ────────────────────────────────────
    public function getChecklistItemsAttribute(): array
    {
        if (!$this->checklist) return [];
        return array_filter(
            array_map('trim', explode("\n", $this->checklist))
        );
    }
}