<style scoped>

</style>
<template>
    <div class="w-1/3 notification-container absolute z-10 right-0">
        <TransitionGroup v-if="notifications" name="fade" mode="in-out" tag="div">
           <NotificationBar v-for="(notification, index) in notifications" :key="notification.id" :notification="notification"/>
        </TransitionGroup>
    </div>
</template>

<script>
import NotificationBar from "./NotificationBar";
import {mapState} from 'vuex';
export default {
name: "notificationContainer",
    components: { NotificationBar},
    computed: mapState('notification', ['notifications'])
}
</script>


