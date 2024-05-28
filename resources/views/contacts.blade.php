@extends('layouts.layout')
@section('contacts')
    <section class="top-banner">
        <div class="text-center">
            <span><a href="/" class="home-link">Ana Sayfa</a></span>
            <span class="mx-1">/</span>
            <span class="home-active-page">İletişim</span>
        </div>
    </section>

    <section class="contact-us">
        <div class="container">
            <div class="mt-5">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="row">
                        @foreach($locations as $branchOffice)
                            @if($branchOffice->title == 'Merkez')
                                <div class="col-md-12 col-lg-12 col-sm-12 mt-4">
                                    <div class="card card-centre overflow-hidden mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-12 col-lg-7 col-sm-12">
                                                @if(!empty($branchOffice->location))
                                                    <div class="map p-0">
                                                        {!! $branchOffice->location !!}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-md-12 col-lg-5 col-sm-12">
                                                <div class="card-body align-items-center justify-content-center d-flex">
                                                    <div class="location text-center">
                                                        <div class="locationContent ">
                                                            @if(!empty($branchOffice->title))
                                                                <div class="location-title fw-bold">
                                                                    {{$branchOffice->title}}
                                                                </div>
                                                            @endif
                                                            @if(!empty($branchOffice->address))
                                                                <div class="address">{{$branchOffice->address}}</div>
                                                            @endif
                                                            <div>
                                                                @if(!empty($branchOffice->city))
                                                                    <span>{{$branchOffice->city}}</span>
                                                                @endif
                                                                @if(!empty($branchOffice->district))
                                                                    <span>{{$branchOffice->district}}</span>
                                                                @endif
                                                            </div>
                                                            @if(!empty($branchOffice->phone_number))
                                                                <div class="phone-number-one">{{$branchOffice->phone_number}}</div>
                                                            @endif
                                                            @if(!empty($branchOffice->phone_number2))
                                                                <div class="phone-number-two">{{$branchOffice->phone_number2}}</div>
                                                            @endif
                                                            @if(!empty($branchOffice->email))
                                                                <div class="e-mail">{{$branchOffice->email}}</div>
                                                            @endif
                                                            @if(!empty($branchOffice->location))
                                                                <div class="mt-2 go-to-location">
                                                                    <a href="{{$branchOffice->go_to_location}}" class="text-decoration-none go-to-location"><i class="fa-solid fa-location-dot pe-2 go-to-location-icon"></i>Konuma Git</a>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-md-6 col-lg-6 col-sm-12 mt-4">
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <div class="card card-other overflow-hidden">
                                            @if(!empty($branchOffice->location))
                                                <div class="map ">
                                                    {!! $branchOffice->location !!}
                                                </div>
                                            @endif
                                            <div class="card-body">
                                                <div class="location text-center mt-2">
                                                    <div class="locationContent">
                                                        @if(!empty($branchOffice->title))
                                                            <div class="location-title fw-bold">
                                                                {{$branchOffice->title}}
                                                            </div>
                                                        @endif
                                                        @if(!empty($branchOffice->address))
                                                            <div class="address">{{$branchOffice->address}}</div>
                                                        @endif
                                                        <div>
                                                            @if(!empty($branchOffice->city))
                                                                <span>{{$branchOffice->city}}</span>
                                                            @endif
                                                            @if(!empty($branchOffice->district))
                                                                <span>{{$branchOffice->district}}</span>
                                                            @endif
                                                        </div>
                                                        @if(!empty($branchOffice->phone_number))
                                                            <div class="phone-number-one">{{$branchOffice->phone_number}}</div>
                                                        @endif
                                                        @if(!empty($branchOffice->phone_number2))
                                                            <div class="phone-number-two">{{$branchOffice->phone_number2}}</div>
                                                        @endif
                                                        @if(!empty($branchOffice->email))
                                                            <div class="e-mail">{{$branchOffice->email}}</div>
                                                        @endif
                                                        @if(!empty($branchOffice->location))
                                                            <div class="mt-2 go-to-location">
                                                                <a href="{{$branchOffice->go_to_location}}" class="text-decoration-none go-to-location"><i class="fa-solid fa-location-dot pe-2 go-to-location-icon"></i>Konuma Git</a>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12 text-center mt-5">
                        <div class="contact-us-form-title"><h3>İletişim</h3></div>
                        <form id="contactForm" class="ps-5 contact-us-form">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address"
                                       data-sb-validations="required,email" name="email"
                                       oninvalid="this.setCustomValidity('Bu alan email olmak zorundadır.')"/>
                                <label for="emailAddress">Email Adresi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="Phone Number" type="text" placeholder="phoneNumber"
                                       data-sb-validations="required" name="phone"/>
                                <label for="phoneNumber">Telefon Numarası</label>
                            </div>
                            <div class="form-floating mb-3 contact-form-message">
                                <textarea class="form-control" id="message" type="text" placeholder="Mesaj"
                                          style="height: 10rem;" data-sb-validations="required"
                                          name="message"></textarea>
                                <label for="message">Mesaj</label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Gönder</button>
                            </div>
                        </form>
                        @push('js-stack')
                            <script>
                                window.addEventListener('DOMContentLoaded', () => {
                                    let $contactFormPage = $("form#contactForm");

                                    $contactFormPage.on("submit", function (e) {
                                        e.preventDefault();
                                        $contactFormPage.find("button[type=submit]").attr("disabled", "disabled");

                                        $.ajax({
                                            url: '{{ route('contacts.store') }}',
                                            method: 'POST',
                                            data: $contactFormPage.serialize(),
                                            success: function () {
                                                Swal.fire({
                                                    title: "Mesaj",
                                                    text: "Başarıyla kaydedilmiştir.",
                                                    icon: "success"
                                                });
                                                $contactFormPage[0].reset();
                                                $contactFormPage.find("button[type=submit]").removeAttr("disabled");
                                            },
                                            error: function (e) {
                                                $contactFormPage.find("button[type=submit]").removeAttr("disabled")
                                                ajaxDefaultErrorCallback(e);
                                            }
                                        });
                                    });
                                });
                            </script>
                        @endpush
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
