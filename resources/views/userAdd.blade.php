@extends('Layout/app')

@section('PageTitle', 'About Page')

@section('content')

    <div class="container mb-5">
        <div class="row ">

            <div class="col-12 d-flex  align-items-center justify-content-center">
                <div class="card p-5" style="width:40em !important">

                    <h1 class="card-title" id="card-title">Fill Form with User Information </h1>

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter User Full Name"
                                aria-describedby="nameHelp">

                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" placeholder="Enter User Email Address" class="form-control" id="email"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="+88-017-81280235">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button onclick="SendData()" type="button" class="btn btn-primary">Add</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
