@extends('layouts.layout')
@section('pages')
    <section class="pages mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 -col-sm-12 col-lg-12 text-center mb-5">
                   <h1>{{ $page->name }}</h1>
                </div>
                <div class="col-md-12 -col-sm-12 col-lg-12">
             {!! $page->description !!}
                </div>
            </div>
        </div>
    </section>
@endsection
