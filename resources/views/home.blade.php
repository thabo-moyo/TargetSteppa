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
        <div class="row mt-2">
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
        <div class="row mt-5">
            <div class="col-12">
                <form class="card-container">
                    <div class="task task-1 w-100 d-flex flex-column h-100">
                        <input class="inp-cbx" id="cbx" type="checkbox" style="display: none;" />
                        <label class="cbx" for="cbx">
                            <span>
                                <svg viewbox="0 0 12 9">
                                    <polyline points="1 5 4 8 11 1"></polyline>
                                </svg>
                            </span>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
