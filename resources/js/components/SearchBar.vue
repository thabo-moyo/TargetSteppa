<template>
    <div class="shadow-sm w-100 flex justify-between items-center text-primary pl-9 pr-9 pt-2">
        <div class="w-1/6 relative"  @click="$emit('toggleNav')">
            <TransitionGroup enter-active-class="transform transition ease-in-out duration-150 sm:duration-700" enter-from-class="opacity-0" enter-to-class="opacity-100" leave-active-class="transform transition ease-in-out duration-500 sm:duration-700" leave-from-class="opacity-100" leave-to-class="opacity-0">
                <span v-show="!isOpen" :key="1" class=" material-icons-outlined absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">menu</span>
                <span v-show="isOpen" :key="2" class=" material-icons-outlined absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">close</span>
            </TransitionGroup>
        </div>

        <div class="w-1/2 search-container flex justify-center items-center">
            <span class="material-icons text-black-50">search</span>
            <input type="text" class="ml-2" placeholder="Search">
        </div>
        <div class="w-25 flex justify-self-end justify-center items-center">
            <div class="mr-5">
                <span class="material-icons-outlined text-lg-[30px]">notifications</span>
            </div>
            <div class="flex items-center text-left mr-1">
                <p class="">Thabo Moyo</p>
                <span class="material-icons">expand_more</span>
            </div>
            <div class="w-[50px] h-[50px] ratio-1x1 m-1">
                <a href=" "> <img class="mx-auto rounded-full aspect-auto" src="avatar.png"></a>
            </div>
        </div>
    </div>
</template>
<script setup>
import {defineProps, defineEmits, toRefs} from "vue";

defineEmits(['toggleNav'])

const props = defineProps({
    isOpen: {
        required: true,
    }
})


</script>
