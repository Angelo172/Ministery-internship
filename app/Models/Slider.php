<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Http\Models\User;

class Slider extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'image',
        'status',
        'date',
        'user_id'
    ];

    public function users(): BelongsTo
{
    return $this->belongsTo(User::class);
}
public function registerMediaCollection(): void
{
    $this->addMediaCollection('post-image')
        ->singleFile()
        ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif'])
        ->useDisk('public');
}
}
