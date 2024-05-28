@extends('admin.layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h2 class="fw-bold mb-4">Ürün Ekle</h2>
                <div class="bg-white shadow">
                    <form class="form" id="branchOfficeStore" enctype="multipart/form-data">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="location">{{ __('Şube Konumu (iFrame)') }}</label>
                                <textarea rows="8" type="text" class="form-control" id="location" name="location"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="go_to_location">{{ __('Şube Konum Bağlantısı') }}</label>
                                <textarea rows="8" type="text" class="form-control" id="go_to_location" name="go_to_location"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="title">{{ __('Adres Başlığı') }}</label>
                                <input required type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="address">{{ __('Adres') }}</label>
                                <input required type="text" class="form-control" id="address" name="address">
                            </div>
                            <div class="mb-3">
                                <label for="city">{{ __('İl') }}</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                            <div class="mb-3">
                                <label for="district">{{ __('İlçe') }}</label>
                                <input type="text" class="form-control" id="district" name="district">
                            </div>
                            <div class="mb-3">
                                <label for="phone_number">{{ __('Telefon Numarası #1') }}</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number">
                            </div>
                            <div class="mb-3">
                                <label for="phone_number2">{{ __('Telefon Numarası #2') }}</label>
                                <input type="text" class="form-control" id="phone_number2" name="phone_number2">
                            </div>
                            <div class="mb-3">
                                <label for="email">{{ __('E-Mail') }}</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="p-4 bg-gray d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm me-1 btn-spinner d-none" role="status"
                                      aria-hidden="true"></span>
                                Şube Ekle
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
                let $projects = $("form#branchOfficeStore");

                $projects.on("submit", function (e) {
                    e.preventDefault();
                    let $form = $(this);
                    let formData = new FormData($form[0]);
                    $projects.find("button[type=submit]").attr("disabled", "disabled");

                    $.ajax({
                        url: '{{ route('admin.branchOffices.store') }}',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function () {
                            window.location = "{{ route('admin.branchOffices.index') }}";
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

