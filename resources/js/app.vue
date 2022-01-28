<template>
    <notification-container></notification-container>
    <div class="w-screen flex glass">
        <navigation></navigation>
        <router-view></router-view>
    </div>
</template>

<script>
import Navigation from "./views/header/navigation";
import Headerbar from "./views/header/headerbar";
import Dashboard from "./layouts/dashboard";
import Home from './views/home'
import NotificationContainer from "./components/notification-container";

export default {
    name: "Index",
    components: {NotificationContainer, Home, Dashboard, Headerbar, Navigation},
}
</script>
