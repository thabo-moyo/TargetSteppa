@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center align-content-center position-relative">
        <div class="glass d-flex home-content align-items-start">
            <div class="col-12 d-flex">
                <div class="dashboard col-3 d-flex flex-column align-items-center h-100">
                    <div class="user text-center p-3 w-100 d-flex flex-column justify-evenly align-items-center">
                        <div class="profile-image-container ratio-1x1 m-1">
                            <a href="{{ url('/') }}"> <img class="mx-auto img-fluid d-block rounded-circle"
                                    src="{{ url('avatar.png') }}"></a>
                        </div>
                        <div class="profile-info text-center ">
                            <p class="mb-2 mt-1">Thabo Moyo</p>
                            <small class="small">Member</small>
                        </div>
                    </div>
                    <div
                        class="navigation-items text-left d-flex flex-column w-100 h-100 align-items-center justify-content-left">
                        <div class="item item1">
                            <i class="fas fa-home fa-2x"></i>
                            <p> Targets </p>
                        </div>
                        <div class="item item2 active">
                            <i class="fas fa-shoe-prints fa-2x"></i>
                            <p> Stepped on </p>
                        </div>
                        <div class="item item3">
                            <i class="fas fa-tasks fa-2x"></i>
                            <p> Progress </p>
                        </div>
                        <div class="item item4">
                            <i class="fas fa-stopwatch fa-2x"></i>
                            <p> Reminders </p>
                        </div>
                    </div>
                    <hr>
                    <div class="promo justify-self-end mt-2">
                        <p>KEEP IT STEPPIN!</p>
                    </div>
                </div>
                <div class="col-9">
                    <div class="row mb-4">
                        <div class="search-bar d-flex ">
                            <div class="search-container d-flex align-items-center">
                                <i class="fa fa-search d"> </i>
                                <p class="">Search</p>
                            </div>
                            <div class="
                                    greeting">

                            </div>
                            <div class="notification-container">
                                <i class="fa fa-bell fa-1x"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex justify-content-between ml-3">
                            <div class="search-filters d-flex">
                                <p class="p-3 active">All</p>
                                <p class="p-3">Targets</p>
                                <p class="p-3">Projects</p>
                                <p class="p-3">Business</p>
                            </div>
                            <div class="add-new btn d-flex align-items-center">
                                <i class="fas fa-plus mr-2"></i>
                                <p> Add New </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
        <div class="circle circle1" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine"></div>
        <div class="circle circle2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"></div>
    </div>

@endsection
