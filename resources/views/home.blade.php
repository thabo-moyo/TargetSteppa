@extends('layouts.app')

@section('content')
    <div class="w-100">
        <div class="row">
            <div class="search-bar d-flex justify-content-between">
                <div class="search-container d-flex align-items-center ml-2" onclick="changeInput(this)">
                    <i class="fa fa-search"> </i>
                    <input type="text" class="ml-2" placeholder="Search">
                </div>
                <div class="notification-container d-flex align-items-center">
                    <i class="fa fa-bell fa-2px"></i>
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
            <div class="col-12">
                <form class="card-container">
                    <div class="inputGroup">
                        <input id="option1" name="option1" type="checkbox"/>
                        <label for="option1">Option One</label>
                      </div>
                </form>
            </div>
        </div>
    </div>
@endsection
