<template>
    <notification-container></notification-container>
    <div class="w-100">
        <search-bar @toggle-nav="toggleNav" :isOpen="navStatus"></search-bar>
        <navigation :toggle-nav="navStatus"></navigation>
        <router-view></router-view>
    </div>
</template>

<script>
import Navigation from "./views/header/navigation";
import Headerbar from "./views/header/headerbar";
import Dashboard from "./layouts/Dashboard";
import Home from './views/home'
import NotificationContainer from "./components/NotificationContainer";
import SearchBar from "./components/SearchBar";
import {ref} from "vue";

export default {
    name: "Index",
    components: {SearchBar, NotificationContainer, Home, Dashboard, Headerbar, Navigation},
    setup() {
        const navStatus = ref(false)
        const toggleNav = () => {
            navStatus.value = !navStatus.value
        }

        return {
            navStatus,
            toggleNav
        }
    }
}
</script>
