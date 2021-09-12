<div class="dashboard col-3 d-flex flex-column align-items-center h-100">
    <div class="user text-center p-3 w-100 d-flex flex-column justify-evenly align-items-center">
        <div class="profile-image-container ratio-1x1 m-1">
            <a href="{{ url('/') }}"> <img class="mx-auto img-fluid d-block rounded-circle"
                    src="{{ url('avatar.png') }}"></a>
        </div>
        <div class="profile-info text-center ">
            <p class="mb-2 mt-1">Thabo Moyo</p>
            <small class="small">Member</small>
        </div>
    </div>
    <div
        class="navigation-items text-left d-flex flex-column w-100 h-100 align-items-center justify-content-left">
        <div class="item item1">
            <i class="fas fa-home fa-2x"></i>
            <p> Targets </p>
        </div>
        <div class="item item2 active">
            <i class="fas fa-shoe-prints fa-2x"></i>
            <p> Stepped on </p>
        </div>
        <div class="item item3">
            <i class="fas fa-tasks fa-2x"></i>
            <p> Progress </p>
        </div>
        <div class="item item4">
            <i class="fas fa-stopwatch fa-2x"></i>
            <p> Reminders </p>
        </div>
    </div>
    <hr>
    <div class="promo justify-self-end mt-2">
        <p>KEEP IT STEPPIN!</p>
    </div>
</div>
