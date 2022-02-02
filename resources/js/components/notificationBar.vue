<template>
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 m-2 shadow-md flex justify-between items-center" role="alert">
        <div class="flex items-center">
            <i class="fas fa-check fa-1x"></i>
            <div class="ml-2">
                {{ notification.id }}
                <p class="font-bold">{{ notification.title}}</p>
                <p class="text-sm">{{ notification.message }}.</p>
            </div>
        </div>
        <div @click="deleteNotification(notification)">
            <i class="fas fa-minus-circle fa-2x" ></i>
        </div>
    </div>
</template>

<script>
import notificationEnums from "../Enums/notificationEnums";
import {ref} from "vue";
import {store} from "../store";
export const namespace = 'notifications';
export default {
    namespaced: true,
    components: {
    },
    setup() {
        return {
            deleteNotification: (el) => store.commit('notification/DELETE_NOTIFICATION', el)
        }
    },
    props: {
        notification: {
        }
    },

    data() {
        return{
            bgclass: '',
        }
    },
    mounted() {
        this.bgclass = this.notification.type;
    }
}
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
    transition: opacity 3s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
}
</style>
