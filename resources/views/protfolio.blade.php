@extends('Layout/app')

@section('PageTitle', 'Protfolio Page')
@section('content')
    <div class="container-fluid mb-5" style="background: #ff279a">
        <div class="row py-3">
            <div class="col-md-12">
                <h4 class="  text-white text-center text-uppercase">Our Protfolio</h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width:100%;">
                    <img src="{{ asset('image/banner.png') }}" class="card-img-top" style="height:200px" alt="Baner Img">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width:100%;">
                    <img src="{{ asset('image/banner.png') }}" class="card-img-top" style="height:200px" alt="Baner Img">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width:100%;">
                    <img src="{{ asset('image/banner.png') }}" class="card-img-top" style="height:200px" alt="Baner Img">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width:100%;">
                    <img src="{{ asset('image/banner.png') }}" class="card-img-top" style="height:200px" alt="Baner Img">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
