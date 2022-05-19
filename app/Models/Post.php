<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * Class Post
 * @package App\Models
 */
class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'time_read',
        'author_id',
        'category_id'
    ];

    /**
     * @param Media|null $media
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('smallThumb')
            ->fit(Manipulations::FIT_CROP, 150, 88);
        $this
            ->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 424, 248);
        $this
            ->addMediaConversion('randomTopPost')
            ->fit(Manipulations::FIT_CROP, 424, 432);
        $this
            ->addMediaConversion('randomSecondPost')
            ->fit(Manipulations::FIT_CROP, 872, 432);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
