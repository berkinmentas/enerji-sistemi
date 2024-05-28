@extends('layouts.layout')
@section('pages')
    <section class="top-banner">
        <div class="text-center">
            <span><a href="/" class="home-link">Ana Sayfa</a></span>
            <span class="mx-1">/</span>
            <span class="home-active-page ">{{$page->name}}</span>
        </div>
    </section>
    <section class="pages mt-5">
        <div class="container">
            <div class="row">
                @if(!empty($page->getFirstMediaUrl('logo')))
                    <div class="col-md-12 col-lg-6 col-sm-12 mb-5">
                        <div>
                            <div class="about-us-image text-center">
                                <img class="img-fluid" src="{{$page->getFirstMediaUrl('logo')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12 px-5">
                        <div class="col-md-12 -col-sm-12 col-lg-12 text-center mb-5">
                            <h1>{{ $page->name }}</h1>
                        </div>
                        <div class="col-md-12 -col-sm-12 col-lg-12">
                            {!! $page->description !!}
                        </div>
                    </div>
                @endif
                @if(empty($page->getFirstMediaUrl('logo')))
                    <div class="col-md-12 col-sm-12 col-lg-12 text-center mb-5">
                        <h1>{{ $page->name }}</h1>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        {!! $page->description !!}
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
