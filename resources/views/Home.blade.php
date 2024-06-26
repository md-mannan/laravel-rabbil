@extends('Layout/app')

@section('PageTitle', 'Home Page')
@section('content')
    <div class="container-fluid p-0">
        <div class="row m-0 paralax d-flex justify-content-center align-content-center">
            <div class="col-md-4 text-center">

                <h1 class="text-white text-uppercase text-bold">Software Engineer</h1>
                <h3 class="text-white">Mobile & Web Devlopment</h3>
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row mt-5 mb-5">
            <h2 class="text-center mb-5 text-uppercase">Our Services</h2>
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
    </div>

    <div class="container">

        <div class="row mt-5 mb-5">
            <h2 class="text-center mb-5 text-uppercase">Recent Project</h2>
            <div class="col-3">
                <div class="card" style="width:100%;">
                    <img src="{{ asset('image/banner.png') }}" class="card-img-top" style="height:200px" alt="Baner Img">
                    <div class="card-body">
                        <h5 class="card-title">Project Name</h5>
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
                        <h5 class="card-title">Project Name</h5>
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
                        <h5 class="card-title">Project Name</h5>
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
                        <h5 class="card-title">Project Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <h2 class="text-uppercase text-center mb-4">Contact with me</h2>
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
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6698.993332313097!2d47.9265610343816!3d29.25476682009066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2skw!4v1712954642979!5m2!1sen!2skw"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>


    </div>

@endsection
