@extends('admin.layouts.layout')
@section('content')
    <section class="contact-show">
        <div class="container">
            <div class="mt-5">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div>
                            <h4>
                                Mesaj - {{$contact->id}}
                            </h4>
                        </div>
                        <div class="contact-message-box bg-white shadow-lg p-5">
                            <div>
                                <span class="fw-bold">Email :</span>
                                <span>{{$contact->email}}</span>
                            </div>
                            <div class="my-3">
                                <span class="fw-bold">Telefon Numarası :</span>
                                <span>{{$contact->phone}}</span>
                            </div>
                            <div>
                                <span class="fw-bold">Mesaj :</span>
                                <span>{{$contact->message}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
