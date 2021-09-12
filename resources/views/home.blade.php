@extends('layouts.app')

@section('content')
    <div class="col-12 d-flex">
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

@endsection
