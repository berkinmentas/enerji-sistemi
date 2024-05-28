@extends('admin.layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h2 class="fw-bold mb-4">Galeri Düzenle</h2>
                <div class="bg-white shadow">
                    <form class="form" id="pagesUpdate" enctype="multipart/form-data">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="name">{{ __('Galeri Adı') }}</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                       value="{{$gallery->name}}">
                            </div>
                            <div class="mb-3">

                                @include('admin.includes._dropzone', ['title' => 'Görseller'])
                                @if(count($gallery->media) > 0)
                                    <div class="file_manager mt-3">
                                        <div class="row clearfix">
                                            @foreach($gallery->media as $media)
                                                @continue($media->collection_name === 'logo')
                                                <div class="col-sm-12 col-md-4 col-lg-2">
                                                    <div class="card">
                                                        <div class="file">
                                                            <div class="hover">
                                                                <button data-id="{{ $media->id }}" type="button"
                                                                        class="btn btn-icon btn-danger btn-document-delete">
                                                                    <i class="fa-solid fa-trash-arrow-up"></i>
                                                                </button>
                                                            </div>
                                                            <a href="{{ $media->getUrl() }}" target="_blank">

                                                                @if($media->collection_name == 'document')
                                                                    <div class="icon">
                                                                        <i class="mdi mdi-file-document-box text-info"></i>
                                                                    </div>
                                                                @elseif($media->collection_name == 'video')
                                                                    <div class="icon">
                                                                        <i class="mdi mdi-file-document-box text-info"></i>
                                                                    </div>
                                                                @elseif($media->collection_name == 'image')
                                                                    <div class="image"
                                                                         style="background-image: url('{{ $media->getUrl('thumb') ?? $media->getUrl() }}')">
                                                                    </div>
                                                                @endif
                                                                <div class="file-name">
                                                                    <p class="m-b-5 text-muted"><abbr
                                                                            title="{{ $media->name }}">{{ $media->name }}</abbr>
                                                                    </p>
                                                                    <small>Size: {{ $media->human_readable_size }} <span
                                                                            class="date text-muted">{{ $media->created_at->diffForHumans() }}</span>
                                                                    </small>
                                                                </div>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="p-4 bg-gray d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm me-1 btn-spinner d-none" role="status"
                                      aria-hidden="true"></span>
                                Galeriyi Güncelle
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('js-stack')
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                let $projects = $("form#pagesUpdate");

                $projects.on("submit", function (e) {
                    e.preventDefault();

                    $projects.find("button[type=submit]").attr("disabled", "disabled");
                    $.ajax({
                        url: '{{ route('admin.galleries.update', ['gallery' => $gallery->id]) }}',
                        method: 'PUT',
                        data: $projects.serialize(),
                        success: function () {
                            window.location = "{{ route('admin.galleries.index') }}";
                        },
                        error: function (e) {
                            $projects.find("button[type=submit]").removeAttr("disabled")
                            ajaxDefaultErrorCallback(e);
                        }
                    });
                });
            });
            let deleteButtons = document.querySelectorAll('.btn-document-delete');
            deleteButtons.forEach(function (item, i) {
                item.addEventListener('click', function () {
                    let $id = $(this).attr('data-id');
                    $.ajax({
                        url: '{{ route('admin.galleries.deleteImage') }}',
                        method: 'POST',
                        data: {
                            id: $id
                        },
                        success: function () {
                            item.parentElement.parentElement.remove();
                        },
                        error: function (e) {
                            ajaxDefaultErrorCallback(e);
                            //$contactFormPage.find("button[type=submit]").removeAttr("disabled")
                            // ajaxDefaultErrorCallback(e);
                        }
                    });
                })
            });

        </script>
    @endpush
@endsection
