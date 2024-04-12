@extends('Layout/app')

@section('PageTitle', 'Service Page')
@include('Layout.menu')

@section('content')
    <div class="container-fluid mb-5" style="background: #ff279a">
        <div class="row py-3">
            <div class="col-md-12">
                <h4 class="  text-white text-center text-uppercase">Our Services</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width:100%;">
                    <img src="{{ asset('image/banner.png') }}" class="card-img-top" style="height:200px" alt="Baner Img">
                    <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width:100%;">
                    <img src="{{ asset('image/banner.png') }}" class="card-img-top" style="height:200px" alt="Baner Img">
                    <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width:100%;">
                    <img src="{{ asset('image/banner.png') }}" class="card-img-top" style="height:200px" alt="Baner Img">
                    <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width:100%;">
                    <img src="{{ asset('image/banner.png') }}" class="card-img-top" style="height:200px" alt="Baner Img">
                    <div class="card-body">
                        <h5 class="card-title">Service Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>


        </div>





        <div class="row mt-5 mb-5">
            <div class="col-md-6">
                <form action="">

                    <div class="mb-3 form-group">
                        <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="John Doe">
                    </div>


                    <div class="mb-3 form-group">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>

                    <div class="mb-3 form-group">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="phone" class="form-control" id="exampleFormControlInput1"
                            placeholder="+965-50923840">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Your Comments</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>

            </div>
            <div class="col-md-6">
                <h5>Address</h5>
                <p class=""><a class="text-decoration-none" href="#"><i class="fa-solid fa-location-dot"></i>
                        Shekhertek 8,Mohammadpur, Adabor, Dhaka-1207</a></p>
                <p class=""><a class="text-decoration-none" href="#"><i class="fa-solid fa-phone"></i>
                        +965-50923840 <span>Helpline</span></a></p>
                <p class=""><a class="text-decoration-none" href="#"><i class="fa-solid fa-envelope"></i>
                        mdmannan580@gmail.com</a></p>
            </div>
        </div>
    </div>
    </div>
