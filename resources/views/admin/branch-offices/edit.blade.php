@extends('admin.layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <h2 class="fw-bold mb-4">Şube Düzenle</h2>
                <div class="bg-white shadow">
                    <form class="form" id="branchOfficeUpdate" enctype="multipart/form-data">
                        <div class="p-4">
                            <div class="mb-3">
                                <label for="location">{{ __('Şube Konumu (iFrame)') }}</label>
                                <textarea rows="8" type="text" class="form-control" id="location" name="location"
                                          >{{$branchOffice->location}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="go_to_location">{{ __('Şube Konum Bağlantısı') }}</label>
                                <textarea rows="8" type="text" class="form-control" id="go_to_location" name="go_to_location"
                                >{{$branchOffice->go_to_location}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="title">{{ __('Şube Adı') }}</label>
                                <input required type="text" class="form-control" id="title" name="title"
                                       value="{{$branchOffice->title}}">
                            </div>
                            <div class="mb-3">
                                <label for="address">{{ __('Adres') }}</label>
                                <input required type="text" class="form-control" id="address" name="address"
                                       value="{{$branchOffice->address}}">
                            </div>
                            <div class="mb-3">
                                <label for="city">{{ __('İl') }}</label>
                                <input required type="text" class="form-control" id="city" name="city"
                                       value="{{$branchOffice->city}}">
                            </div>
                            <div class="mb-3">
                                <label for="district">{{ __('İlçe') }}</label>
                                <input required type="text" class="form-control" id="district" name="district"
                                       value="{{$branchOffice->district}}">
                            </div>
                            <div class="mb-3">
                                <label for="phone_number">{{ __('Telefon Numarası #1') }}</label>
                                <input required type="text" class="form-control" id="phone_number" name="phone_number"
                                       value="{{$branchOffice->phone_number}}">
                            </div>
                            <div class="mb-3">
                                <label for="phone_number2">{{ __('Telefon Numarası #2') }}</label>
                                <input type="text" class="form-control" id="phone_number2" name="phone_number2"
                                       value="{{$branchOffice->phone_number2}}">
                            </div>
                            <div class="mb-3">
                                <label for="email">{{ __('E-Mail') }}</label>
                                <input required type="text" class="form-control" id="email" name="email"
                                       value="{{$branchOffice->email}}">
                            </div>

                        </div>
                        <div class="p-4 bg-gray d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <span class="spinner-border spinner-border-sm me-1 btn-spinner d-none" role="status"
                                      aria-hidden="true"></span>
                                Şube Güncelle
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
                let $projects = $("form#branchOfficeUpdate");

                $projects.on("submit", function (e) {
                    e.preventDefault();

                    $projects.find("button[type=submit]").attr("disabled", "disabled");
                    $.ajax({
                        url: '{{ route('admin.branchOffices.update', ['branchOffice' => $branchOffice->id]) }}',
                        method: 'PUT',
                        data: $projects.serialize(),
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
