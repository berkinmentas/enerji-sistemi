@extends('layouts.layout')
@section('branchOffices')
    <section class="top-banner">
        <div class="text-center">
            <span><a href="/" class="home-link">Ana Sayfa</a></span>
            <span class="mx-1">/</span>
            <span class="home-active-page">Şubelerimiz</span>
        </div>
    </section>

    <section class="branchOffices">
        <div class="container">
            <div class="mt-5">
                <div class="row">
                    @foreach($branchOffices as $branchOffice)
                        <div class="col-md-6 col-lg-4 col-sm-12 mt-4">
                            <div class="card overflow-hidden" style=" border-radius: 20px">
                                @if(!empty($branchOffice->location))
                                <div class="map ">
                                    {!! $branchOffice->location !!}
                                </div>
                                @endif
                                <div class="card-body" style="background-color: #1e2f37; color: white">
                                    <div class="location text-center">
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
                    @endforeach
                    <!--
                                        <div class="col-md-6 col-lg-4 col-sm-12 pe-5 mt-3">
                        <div class="row align-items-center justify-content-center">
                                <div class="map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d6142.339939555392!2d27.92242!3d39.668391!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMznCsDQwJzAzLjAiTiAyN8KwNTUnMTYuMCJF!5e0!3m2!1sen!2sus!4v1715682338170!5m2!1sen!2sus"
                                        height="250" style="border:0; width: 100%" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="location mt-2">
                                    <div class="location-title fw-bold">
                                        Merkez
                                    </div>
                                    <div class="address">Yeni Sanayi Sitesi, 17. Sk., No: 20</div>
                                    <div>Karesi/BALIKESİR</div>
                                    <div class="phone-number-one">+90 (266) 246 33 46</div>
                                    <div class="phone-number-two">+90 (266) 246 22 44</div>
                                    <div class="e-mail">info@ozaytubular.com</div>
                                </div>
                        </div>
                    </div>

                    -->
                </div>
            </div>
        </div>
    </section>

@endsection
