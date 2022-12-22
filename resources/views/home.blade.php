@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')
<style>
    #container {
        background: #eaeaea;
        height: 180px;
        display: flex;
        flex-direction: column;
    }
</style>
<div class="container d-flex">
    <div class="row pt-4">
        <div class="col-4 col-lg-2">
            <div class="">
                <h3 class="text-end p-4">
                    Code Tutorials
                    <small class="text-muted">step by step</small>
                </h3>
            </div>

        </div>
        <div class="col-6 col-lg-3">
            <img src="{{ asset('Images/profile.jpg') }}" class="rounded float-end img-fluid">
        </div>
        <div class="col-12 col-lg-7 d-flex ">
            <div class=" ">
                <p class="lead">
                    Lets Code!
                </p>
                <p class="p-4 pb-0">
                    Weather you are a begginer or advanced programmer im hoping my tutorials and tips can help you become a better developer. 
                    This site is a great way for myself to also freshen up on code and technology topics while helping others begin or further their code journey.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection