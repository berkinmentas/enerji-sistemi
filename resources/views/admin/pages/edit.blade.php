@extends('admin.layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h2 class="fw-bold mb-4">Sayfa Düzenle</h2>
                <div class="bg-white shadow">
                    <form class="form" id="pagesUpdate" enctype="multipart/form-data">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="name">{{ __('Sayfa Adı') }}</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                       value="{{$page->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="description">{{ __('Sayfa Açıklaması') }}</label>
                                <textarea rows="8" type="text" class="form-control tinyMce" id="description" name="description"
                                        >{{$page->description}}</textarea>
                            </div>
                            <div class="mb-3">

                                @include('admin.includes._dropzone-single', ['title' => 'Görsel'])
                                @if(!empty($page->getMedia('logo')) && count($page->getMedia('logo')) > 0)

                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 col-lg-2">
                                                <div class="gallery-image mb-3">
                                                    <img src="{{ $page->getFirstMediaUrl('logo', 'thumb') }}"
                                                         alt="Logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="p-4 bg-gray d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm me-1 btn-spinner d-none" role="status"
                                      aria-hidden="true"></span>
                                Sayfayı Güncelle
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
                        url: '{{ route('admin.pages.update', ['page' => $page->id]) }}',
                        method: 'PUT',
                        data: $projects.serialize(),
                        success: function () {
                            window.location = "{{ route('admin.pages.index') }}";
                        },
                        error: function (e) {
                            $projects.find("button[type=submit]").removeAttr("disabled")
                            ajaxDefaultErrorCallback(e);
                        }
                    });
                });
            });

        </script>
    @endpush
@endsection
