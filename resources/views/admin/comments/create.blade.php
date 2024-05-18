@extends('admin.layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h2 class="fw-bold mb-4">Ürün Ekle</h2>
                <div class="bg-white shadow">
                    <form class="form" id="commentsStore" enctype="multipart/form-data">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="name">{{ __('İsim') }}</label>
                                <input required type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="title">{{ __('Ünvan') }}</label>
                                <input required type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="comment">{{ __('Yorum') }}</label>
                                <textarea type="text" class="form-control tinyMce" id="comment" name="comment" style="max-height: 200px"></textarea>
                            </div>
                            <div class="mb-3">
                                @include('admin.includes._dropzone-single', ['title' => 'Görsel'])
                            </div>
                        </div>
                        <div class="p-4 bg-gray d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm me-1 btn-spinner d-none" role="status"
                                      aria-hidden="true"></span>
                                Yorum Ekle
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
                let $projects = $("form#commentsStore");

                $projects.on("submit", function (e) {
                    e.preventDefault();
                    let $form = $(this);
                    let formData = new FormData($form[0]);
                    $projects.find("button[type=submit]").attr("disabled", "disabled");

                    $.ajax({
                        url: '{{ route('admin.comments.store') }}',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
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

