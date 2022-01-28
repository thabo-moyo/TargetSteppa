<template>
    <div class="bg-teal">
        <h1> {{notification.message}}</h1>
    </div>
</template>

<script>
import notificationEnums from "../Enums/notificationEnums";

export const namespace = 'notifications';
export default {
    name: "notificationBar",
    props: {
        notification: {
            type: Object,
            required: true,
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

</style>
