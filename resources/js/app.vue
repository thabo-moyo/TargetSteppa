<template>
    <div class="container">
        <div class="glass home-content">
            <div class="row">
                <div class="search-bar flex">
                    <div class="search-container flex align-items-center ml-2" onclick="changeInput(this)">
                        <i class="fa fa-search"> </i>
                        <input type="text" class="ml-2" placeholder="Search">
                    </div>
                    <div class="notification-container d-flex align-items-center">
                        <i class="fa fa-bell fa-2x"></i>
                    </div>
                </div>
            </div>
            <div class="row pl-3 pr-3">
                <div class="d-flex justify-content-between ml-3">
                    <div class="search-filters d-flex">
                        <button class="m-3 btn-default btn active focus:outline-none">
                            <p>All </p>
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
        </div>
    </div>

</template>

<script>
import Navigation from "./views/header/navigation";
import Headerbar from "./views/header/headerbar";

export default {
    name: "Index",
    components: {Headerbar, Navigation}
}
</script>
