<template>
    <div class="dashboard w-48 fixed left-0">
        <div class="text-center p-3 w-100 flex-column justify-evenly items-center">
            <div class="profile-image-container ratio-1x1 m-1">
                <a href=" "> <img class="mx-auto rounded-full aspect-auto" src="avatar.png"></a>
            </div>
            <div class="profile-info text-center ">
                <p class="mb-2 mt-1"></p>
                <small class="small">Member</small>
            </div>
        </div>
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
</template>
<script>
export default {
    data: function () {
        return {
            image: "avatar.png"
        }
    }
}
</script>
