<?php

use Illuminate\Support\Facades\File;

function cleanHtmlContent($content)
{
    $string = strip_tags($content, '<h1><h2><h3><h4><h5><strong><p><em><blockquote><ul><ol><table><td><th><tr><a>');
    $string = preg_replace('#(<[a-z ])(style=("|\')(.?)("|\'))([a-z ]*>)#', '\\1\\6', $string);
    $string = preg_replace('/(<p>&nbsp;<\/p>)+$/', '', $string);
    $string = str_replace('<p>&nbsp;</p>', '', $string);
    return $string;
}
function handleUploadedDocuments($model, array $document, array $withCustomProperties = [], string $collection = ''): void
{
    try {
        $pathSource = storage_path('app/documents_tmp/' . $document['filename']);

        if (empty($collection)) {
            $mimeType = explode('/', File::mimeType($pathSource));
            $collection = 'document';
            if ($mimeType[0] === 'image')
                $collection = 'image';
            elseif ($mimeType[0] === 'video')
                $collection = 'video';
        }
        $model->addMedia($pathSource)
            ->usingName($document['title'])
            ->withCustomProperties($withCustomProperties)
            ->toMediaCollection($collection);
    } catch (\Exception|\Throwable $exception) {
        throw new Exception($exception->getMessage());
    }
}

function handleUploadedSingleFile($model, array $document, string $collection): void
{
    try {
        $pathSource = storage_path('app/documents_tmp/' . $document['filename']);

        $model->addMedia($pathSource)
            ->usingName($document['title'])
            ->toMediaCollection($collection);

        if ($model->getMedia($collection)->count() > 1)
            $model->getFirstMedia($collection)->delete();

    } catch (\Exception|\Throwable $exception) {
        throw new Exception($exception->getMessage());
    }
}
