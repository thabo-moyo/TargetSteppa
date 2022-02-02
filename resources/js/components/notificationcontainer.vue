<style scoped>
.fade-enter-active {
    transition: all 1s;
}

.fade-leave-active {
    opacity: 0;
}

.fade-enter,
.fade-leave-to {
    transition: all 2.3s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    transform: translateX(75px);
    opacity: 0;
}
</style>
<template>
    <div class="w-1/3 notification-container absolute z-10 right-0">
        <transition-group v-if="notifications" name="fade" mode="in-out" tag="div">
           <NotificationBar v-for="notification in notifications" :key="notification.id" :notification="notification"/>
        </transition-group>
    </div>
</template>

<script>
import NotificationBar from "./notificationBar";
import {mapState} from 'vuex';
export default {
name: "notificationContainer",
    components: { NotificationBar},
    computed: mapState('notification', ['notifications'])
}
</script>


