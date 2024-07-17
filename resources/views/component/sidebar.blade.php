<nav class="sidebar flex flex-col items-center fixed w-[260px] border-e border-solid border-dark-12 bg-light-100 min-h-screen py-[26px] px-[20px] z-10 left-[-260px] lg:left-0 duration-700">
    <a href="{{ route('dashboard.index') }}">
        <img src="{{ asset('assets/image/brand/brand-logo.svg') }}" alt="Brand Logo" class="w-[120px] mb-[24px]">
    </a>
    <div class="sidebar-menu flex flex-col w-full gap-[6px] pt-[16px] border-t border-solid border-dark-12">
        <a href="{{ route('dashboard.index') }}"
           class="menu-link group {{ Route::is('dashboard*') ? 'active' : '' }}">
            <i class="fa-solid fa-gauge"></i>
            Dashboard
        </a>
        <div class="menu-link group parent-menu {{ Route::is('student*') ? 'active' : '' }}">
            <div class="wrapper">
                <i class="fa-solid fa-circle-user"></i>
                User
            </div>
            <div class="child-menu">
                <a href="{{ route('student.index') }}" class="{{ Route::is('student*') ? 'active' : '' }}">Student</a>
            </div>
        </div>
        <form method="POST">
            <button type="submit" class="menu-link group flex lg:hidden">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </button>
        </form>
    </div>
</nav>

@push('child-script')
    <script>
        const buttonParent = document.querySelectorAll('.parent-menu')
        buttonParent.forEach(button => {
            button.addEventListener('click', function() {
                button.classList.toggle('active')
            })
        });
    </script>
@endpush
