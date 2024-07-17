<div class="topbar px-[1.5rem]">
    <h3 class="title">{{$title}}</h3>
    <div class="wrapper-position relative hidden lg:inline-block">
        <div class="topbar-profile group">
            <div class="wrapper flex items-center gap-3">
                <div class="wrapper flex flex-col items-end">
                    <h6>Aditya Prayatna</h6>
                    <p>Admin Management</p>
                </div>
                <img src="{{asset('assets/image/profile/profile-not-found.svg')}}"
                     class="img-fluid profile-image" alt="Profile Profile" draggable="false">
            </div>
            <div class="arrow-border">
                <i class="fa-solid fa-chevron-down" style="font-size: 0.65rem;"></i>
            </div>
        </div>
        <div class="popup-topbar">
            <div class="modal-topbar">
                <a href="{{ route('profile.index') }}"
                   class="wrapper group flex items-center mb-1 {{ Request::is('profile*') ? 'active' : '' }}">
                    <p class="flex gap-2 items-center">
                        <i class="fa-solid fa-circle-user"></i>
                        Profile
                    </p>
                </a>
                <form>
                    <div type="submit" class="wrapper group flex items-center">
                        <p class="flex gap-2 items-center">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Logout
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="topbar-hamburger flex lg:hidden items-center justify-center group">
        <i class="fa-solid fa-bars-staggered"></i>
    </div>
</div>

<script>
    const topbarProfile = document.querySelector('.topbar-profile');
    const popupTopbar = document.querySelector('.popup-topbar');
    const hamburger = document.querySelector('.topbar-hamburger');
    const sidebar = document.querySelector('.sidebar');

    topbarProfile.addEventListener('click', function() {
        topbarProfile.classList.toggle('active');
        popupTopbar.classList.toggle('active');
    });

    hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('active');
        sidebar.classList.toggle('active');
    });
</script>
