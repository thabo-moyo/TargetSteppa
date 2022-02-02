<template>
    <notification-container></notification-container>
    <div class="w-100">
        <search-bar></search-bar>
        <navigation></navigation>
        <router-view></router-view>
    </div>
</template>

<script>
import Navigation from "./views/header/navigation";
import Headerbar from "./views/header/headerbar";
import Dashboard from "./layouts/dashboard";
import Home from './views/home'
import NotificationContainer from "./components/notificationcontainer";
import SearchBar from "./components/searchBar";

export default {
    name: "Index",
    components: {SearchBar, NotificationContainer, Home, Dashboard, Headerbar, Navigation},
}
</script>
