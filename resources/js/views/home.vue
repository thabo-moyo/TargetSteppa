<template>
    <div class="container mt-12 transition duration-300 mx-auto " :class="toggleNav ? 'translate-x-[10%]' : 'translate-x-0'" >
        <div class="mb-8">
            <h1 class="text-[24px] font-medium">Projects</h1>
        </div>
        <div class="">
            <div class="flex justify-between ">
                <div class="search-filters flex">
                    <button class="mr-3 btn-default btn active focus:outline-none">
                        <p>All </p>
                    </button>
                    <button class="mr-3 btn btn-default focus:outline-none">
                        <p>Targets</p>
                    </button>
                    <button class="mr-3 btn btn-default focus:outline-none">
                        <p>Projects</p>
                    </button>
                    <button class="mr-3 btn btn-default focus:outline-none">
                        <p>Business</p>
                    </button>
                </div>
                <div class="flex items-center">
                    This Week
                    <span class="material-icons">expand_more</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {useStore} from 'vuex'
import {computed, reactive, ref, nextTick} from 'vue'
import SearchBar from "../components/SearchBar";
import {store} from "../store";

export default {
    name: 'home',
    components: {SearchBar},
    props: [
        'toggleNav'
    ],
    setup() {
    },
    computed: {
        projects: () => {
            return store.state.projects.projects
        }
    }
};
</script>
