<?php

namespace App\Services\MediaLibrary;

use \Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator as BasePathGenerator;

class CustomPathGenerator implements BasePathGenerator
{
    /**
     * Get the path for the given media, relative to the root storage path.
     *
     * @param \Spatie\MediaLibrary\MediaCollections\Models\Media $media
     *
     * @return string
     */
    public function getPath(Media $media): string
    {
        if ($media->model_type == 'App\Models\Product' && $media->collection_name == 'logo')
            return 'product/' . $media->model_id . '/logo/' . $media->id . '/';
        elseif ($media->model_type == 'App\Models\Product')
            return 'product/' . $media->model_id . '/' . $media->id . '/';
        elseif ($media->model_type == 'App\Models\Comment' && $media->collection_name == 'logo')
            return 'comment/' . $media->model_id . '/logo/' . $media->id . '/';
        elseif ($media->model_type == 'App\Models\Comment')
            return 'comment/' . $media->model_id . '/' . $media->id . '/';

        return md5($media->id . config('app.key')) . '/';
    }

    /**
     * Get the path for conversions of the given media, relative to the root storage path.
     *
     * @param \Spatie\MediaLibrary\MediaCollections\Models\Media $media
     *
     * @return string
     */
    public function getPathForConversions(Media $media): string
    {
        if ($media->model_type == 'App\Models\Product')
            return 'product/' . $media->model_id . '/' . $media->id . '/conversions/';
        elseif ($media->model_type == 'App\Models\Product')
            return 'product/' . $media->model_id . '/' . $media->id . '/conversions/';
        elseif ($media->model_type == 'App\Models\Comment')
            return 'comment/' . $media->model_id . '/' . $media->id . '/conversions/';
        elseif ($media->model_type == 'App\Models\Comment')
            return 'comment/' . $media->model_id . '/' . $media->id . '/conversions/';
        return md5($media->id . config('app.key')) . '/conversions/';
    }

    /**
     * Get the path for responsive images of the given media, relative to the root storage path.
     *
     * @param \Spatie\MediaLibrary\MediaCollections\Models\Media $media
     *
     * @return string
     */
    public function getPathForResponsiveImages(Media $media): string
    {
        if ($media->model_type == 'App\Models\Product')
            return 'product/' . $media->model_id . '/' . $media->id . '/responsive-images/';
        elseif ($media->model_type == 'App\Models\Product')
            return 'product/' . $media->model_id . '/' . $media->id . '/responsive-images/';
        elseif ($media->model_type == 'App\Models\Comment')
            return 'comment/' . $media->model_id . '/' . $media->id . '/responsive-images/';
        elseif ($media->model_type == 'App\Models\Comment')
            return 'comment/' . $media->model_id . '/' . $media->id . '/responsive-images/';


        return md5($media->id . config('app.key')) . '/responsive-images/';
    }
}
