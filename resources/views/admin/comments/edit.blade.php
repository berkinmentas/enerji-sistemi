@extends('admin.layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h2 class="fw-bold mb-4">Yorum Düzenle</h2>
                <div class="bg-white shadow">
                    <form class="form" id="commentsUpdate" enctype="multipart/form-data">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="name">{{ __('İsim') }}</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                       value="{{$comment->name}}">
                            </div>
                            <div class="mb-3">
                                <label for="title">{{ __('Ünvan') }}</label>
                                <input required type="text" class="form-control" id="title" name="title"
                                       value="{{$comment->title}}">
                            </div>
                            <div class="mb-3">
                                <label for="comment">{{ __('Yorum') }}</label>
                                <textarea type="text" class="form-control tinyMce" id="comment" name="comment"
                                          style="max-height: 200px">{{$comment->comment}}</textarea>
                            </div>
                            <div class="mb-3">

                                @include('admin.includes._dropzone-single', ['title' => 'Görsel'])
                                @if(!empty($comment->getMedia('logo')) && count($comment->getMedia('logo')) > 0)

                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3 col-lg-2">
                                                <div class="gallery-image mb-3">
                                                    <img src="{{ $comment->getFirstMediaUrl('logo') }}"
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
                                Yorum Güncelle
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
                let $projects = $("form#commentsUpdate");

                $projects.on("submit", function (e) {
                    e.preventDefault();

                    $projects.find("button[type=submit]").attr("disabled", "disabled");
                    $.ajax({
                        url: '{{ route('admin.comments.update', ['comment' => $comment->id]) }}',
                        method: 'PUT',
                        data: $projects.serialize(),
                        success: function () {
                            window.location = "{{ route('admin.comments.index') }}";
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
