@extends('layouts.app')

@section('content')

    <div class="container center-screen ">
        <div class="glass d-flex home-content position-relative shadow">
            @include('layouts.includes.dashboard')

            <div class="w-100 overflow-y-scroll">
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
                <div class="row pl-3 pr-3">
                    <div class="d-flex justify-content-between ml-3">
                        <div class="search-filters d-flex">
                            <button class="m-3 btn-default btn active focus:outline-none">
                                <p>All
                            </button>
                            <button class="m-3 btn btn-default focus:outline-none">
                                <p>Targets</p>
                            </button>
                            <button class="m-3 btn btn-default focus:outline-none">
                                <p>Projects</p>
                            </button>
                            <button class="m-3 btn btn-default focus:outline-none">
                                <p>Business</p>
                            </button>
                        </div>
                        <div class="add-new m-3 ">
                            <button
                                onclick="toggleModal('create_modal')"
                                class="btn inline bg-blue-300 text-gray-600 active:bg-purple-600 font-bold  text-sm px-3 py-2 rounded  hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                <i class="fas fa-plus mr-2"></i>
                                Add New
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row mt-1 p-3">
                    <div class="col-6">
                        <div class="current-progress glass bg-transparent h-100 p-4 text-left">
                            <div class="progress-heading mb-2">
                                <h5>Welcome {{ Auth::user()->name }}</h5>
                            </div>
                            <div class="progress-subtitle">
                                <p>Your currently have 5 tasks in progress</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-1 overflow-x-auto">
                    @for ($i = 2; $i < 8; $i++)
                        <div class="col-4">
                            <form class="tasks-container p-3">
                                <div class="task task-1 w-100 h-100 shadow">
                                    <div class="d-flex justify-content-between align-content-center mt-2">
                                        <div class="task-status d-flex justify-content-center align-content-center pt-1">
                                            <input class="inp-cbx" id="cbx-{{ $i }}" type="checkbox" />
                                            <label class="cbx" for="cbx-{{ $i }}">
                                                <span>
                                                    <svg viewbox="0 0 12 9">
                                                        <polyline points="1 5 4 8 11 1"></polyline>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="task-progress ">
                                            <div class="bg-green-200 text-gray-600 active:bg-purple-600 font-bold  text-sm px-3 py-2 rounded  hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                                                In Progress
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-3">
                                        <div class="col-12 d-flex flex-column align-content-start">
                                            <div class="task-heading position-relative col-12 text-left mb-1">
                                                <h5 class="text-capitalize text-1xl"> Project - TargetSteppa</h5>
                                            </div>
                                            <div class="task-heading inline col-4 text-left w-100">
                                                <small class="inline text-sm"> 15 Sep 2020 - 15 Sep 2020 </small>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="w-80 mx-auto border-0 bg-gray-700 mb-3">
                                    <div class="row mt-1 mb-4">
                                        <div class="col-12">
                                            <div class="task-heading position-relative col-12 text-left mb-1">
                                                <p class="text-base"> Create a task/target manager web application using
                                                    laravel. This way we will learn a lot of code which will benefit us ...
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <hr class="w-80 mx-auto border-0 bg-gray-100">

                                    <div class="row">
                                        <div class="relative pt-1">
                                            <div class="flex mb-2 pl-2 pr-2 items-center justify-between">
                                                <div class="text-left">
                                                    <span>Progress</span>
                                                </div>
                                                <div class="text-right">
                                                    <span class="text-xs font-semibold inline-block text-red-400">
                                                        {{ $i }}0%
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                                                <div style="width:{{ $i }}0%"
                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500 ease-in-3s">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ml-3 w-20  text-center align-content-start justify-content-start">
                                        <div class="bg-blue-500 hover:bg-blue-700 text-white  py-2 px-2 pt-1 pb-1 rounded-full">
                                           <small>5 days left</small>
                                          </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endfor

                </div>
                @include('product.create')
            </div>
        </div>
    </div>
@endsection
