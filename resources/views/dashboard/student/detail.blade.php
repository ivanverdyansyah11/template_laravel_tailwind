@extends('template.main')

@section('content-dashboard')
    <div class="container mt-4 px-[1.5rem]">
        @if(session()->has('failed'))
            <div class="alert alert-danger w-full mb-3">
                {{ session('failed') }}
            </div>
        @endif
        <form class="form flex flex-col gap-3 w-full" enctype="multipart/form-data">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div class="input-group md:col-span-2">
                    <label for="profile_image">
                        Profile Image
                        <div class="wrapper flex items-end gap-2 mt-[8px]">
                            <img src="{{ asset('assets/image/profile/profile-not-found.svg') }}"
                                 alt="Not Found" width="100" class="img-preview">
                        </div>
                    </label>
                </div>
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" class="input" name="name" id="name" autocomplete="off" disabled value="aditya">
                </div>
                <div class="input-group">
                    <label for="fullname">Fullname</label>
                    <input type="text" class="input" name="fullname" id="fullname" autocomplete="off" disabled value="Aditya Prayatna">
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" class="input" name="email" id="email" autocomplete="off" disabled value="adityaprayatna@gmail.com">
                </div>
                <div class="input-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" class="input" name="phone_number" id="phone_number" autocomplete="off" disabled value="08123456789">
                </div>
                <div class="input-group md:col-span-2">
                    <label for="nik">NIK</label>
                    <input type="text" class="input" name="nik" id="nik" autocomplete="off" disabled value="1234567890">
                </div>
                <div class="input-group md:col-span-2">
                    <label for="address">Address</label>
                    <textarea class="input" name="address" id="address" disabled rows="4">Jl. Ahmad Yani</textarea>
                </div>
                <div class="button-group flex gap-2 md:col-span-2">
                    <a href="{{ route('student.index') }}" class="button-reverse">Back to Page</a>
                </div>
            </div>
        </form>
    </div>
@endsection
