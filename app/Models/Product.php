<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\File;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class Product extends Model implements HasMedia
{
    use HasFactory, softDeletes, InteractsWithMedia;

    protected $fillable = [
        'product_category_id',
        'name',
        'sub_name',
        'description',
        'hot_water_capacity',
        'cold_water_capacity',
        'internal_boiler_thickness',
        'outer_boiler_thickness',
        'tube_length',
        'outer_tube_diameter',
        'inner_tube_diameter',
        'glass_thickness',
        'tube_reflectance_ratio',
        'empty_tube_temperature',
        'tube_material',
        'vacuum',
        'heat_loss_coefficient',
        'light_absorption',
        'surface_coating',
    ];


    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('logo')
            ->acceptsFile(function (File $file) {
                return in_array($file->mimeType, ['image/jpeg', 'image/png', 'image/webp']);
            })
            ->singleFile()
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('thumb')
                    ->width(200)
                    ->height(200)
                    ->quality(90)
                ->nonQueued();
            });

        $this
            ->addMediaCollection('image')
            ->acceptsFile(function (File $file) {
                return in_array($file->mimeType, ['image/jpeg', 'image/png'], 'image/webp');
            })
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('thumb')
                    ->width(200)
                    ->height(200)
                    ->quality(90)
                    ->nonQueued();
            });

        $this
            ->addMediaCollection('document');

        $this
            ->addMediaCollection('video');
    }
}
