<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'color',
    ];

    protected $appends = ['url'];

    public static function getAvailableBackgroundColors()
    {
        $elements = json_decode(
            File::get(resource_path('json/costumization.json'))
        );
        return $elements->backgrounds;
    }


    public function getUrlAttribute()
    {
        $hasMedia = $this->getFirstMedia('service');
        // dd($hasMedia);
        return $hasMedia != null ? $hasMedia->getUrl() : "";
    }


    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('service')
            ->singleFile();
    }
}
