<template>
    <div class="dashboard flex-column ">
        <div class="user text-center p-3 w-100 flex-column justify-evenly align-items-center">
            <div class="profile-image-container ratio-1x1 m-1">
                <a href=""> <img class="mx-auto img-fluid d-block rounded-circle"
                                               src=""></a>
            </div>
            <div class="profile-info text-center ">
                <p class="mb-2 mt-1"></p>
                <small class="small">Member</small>
            </div>
        </div>
        <div
            class="navigation-items text-left flex-column w-100 h-100 align-items-center justify-content-left">
            <div class="item item1 ease-in-1s">
                <i class="fas fa-home fa-2x"></i>
                <p> Targets </p>
            </div>
            <div class="item item2 active ease-in-1s">
                <i class="fas fa-shoe-prints fa-2x"></i>
                <p> Stepped on </p>
            </div>
            <div class="item item3 ease-in-1s">
                <i class="fas fa-tasks fa-2x"></i>
                <p> Progress </p>
            </div>
            <div class="item item4 ease-in-1s">
                <i class="fas fa-stopwatch fa-2x"></i>
                <p> Reminders </p>
            </div>
        </div>
        <hr>
        <div class="promo justify-self-end mt-2">
            <p>KEEP IT STEPPIN!</p>
        </div>

    </div>
</template>
