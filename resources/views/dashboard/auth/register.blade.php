@extends('template.main')

@section('content-auth')
    <div class="h-[86px] flex items-center justify-center border-b border-solid border-dark-12">
        <div class="container">
            <img src="{{ asset('assets/image/brand/brand-logo.svg') }}" alt="Brand Logo" class="h-[52px]">
        </div>
    </div>
    <div class="container w-full flex justify-center mt-12">
        <div class="flex flex-col items-center w-full md:w-[50%] lg:w-[35%] xl:w-[30%] 2xl:w-[25%]">
            @if (session()->has('success'))
                <div class="alert alert-success w-full mb-3">
                    {{ session('success') }}
                </div>
            @elseif(session()->has('failed'))
                <div class="alert alert-danger w-full mb-3">
                    {{ session('failed') }}
                </div>
            @endif
            <h2 class="w-full text-[2.25rem] mb-[2px] font-bold">Register 👋🏻</h2>
            <p class="w-full text-[0.875rem] mb-[32px] text-dark-62">Create your account to access all our features and services.</p>
            <form class="form flex flex-col gap-3 w-full">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" class="input" name="username" id="username"
                           placeholder="Enter your username.." autocomplete="off">
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" class="input" name="email" id="email"
                           placeholder="Enter your email.." autocomplete="off">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" class="input" name="password" id="password"
                           placeholder="Enter your password.." autocomplete="off">
                </div>
                <button type="submit" class="button-primary group">Create Account</button>
                <p class="link-redirect">Already have an account? <a href="{{route('auth.login')}}">Login Account</a></p>
            </form>
        </div>
    </div>
@endsection
