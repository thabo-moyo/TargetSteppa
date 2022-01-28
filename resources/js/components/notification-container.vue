<template>
    <div class="notificiation-container absolute z-10 right-0">
        <NotificationBar v-for="notification in notifications" :key="notification.id" :notification="notification"/>
    </div>
</template>

<script>
import NotificationBar from "./notificationBar";
import {mapState} from 'vuex';
export default {
name: "notificationContainer",
    components: {NotificationBar},
    computed: mapState('notification', ['notifications'])
}
</script>

<style scoped>

</style>
