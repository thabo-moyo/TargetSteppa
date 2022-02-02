<template>
<!-- <div class="w-full home-content">
        <div class="row">
            <div class="flex justify-between pl-7">
                <div class="search-filters flex">
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
        <div class="row">
            <h1 v-for="project in projects">
                {{ project.title }}
            </h1>
        </div>
    </div>-->
</template>
<script>
import {useStore} from 'vuex'
import {computed, reactive, ref, nextTick} from 'vue'
import SearchBar from "../components/searchBar";
import {store} from "../store";

export default {
    name: 'home',
    components: {SearchBar},
    setup() {
    },
    computed: {
        projects:  () => {
            return store.state.projects.projects
        }
    }
};
</script>
