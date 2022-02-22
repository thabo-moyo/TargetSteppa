<template>
    <Transition enter-active-class="transform transition ease-in-out duration-500 sm:duration-700" enter-from-class="-translate-x-full" enter-to-class="-translate-x-0" leave-active-class="transform transition ease-in-out duration-500 sm:duration-700" leave-from-class="-translate-x-0" leave-to-class="-translate-x-full">
        <div v-show="toggleNav" class="dashboard w-48 fixed left-0">
            <div class="text-left flex-column items-center w-100 ">
                <div class="p-3 ease-in-30 cursor-pointer hover:bg-indigo-400">
                    <p> Targets </p>
                </div>
                <div class="p-3 ease-in-30 cursor-pointer">
                    <p> Stepped on </p>
                </div>
                <div class="p-3 ease-in-30 cursor-pointer">
                    <p> Progress </p>
                </div>
                <div class="p-3 ease-in-3- cursor-pointer">
                    <p> Reminders </p>
                </div>
            </div>
        </div>
    </Transition>
</template>
<script>
export default {
    data() {
        return {
            image: "avatar.png"
        }
    },
    props: [
        'toggleNav'
    ]
}
</script>
