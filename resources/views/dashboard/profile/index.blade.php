@extends('template.main')

@section('content-dashboard')
    <div class="container mt-4 px-[1.5rem]">
        @if(session()->has('failed'))
            <div class="alert alert-danger w-full mb-3">
                {{ session('failed') }}
            </div>
        @endif
        <form class="form flex flex-col gap-3 w-full" enctype="multipart/form-data">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-3 md:gap-5">
                <div class="cols-span-1">
                    <div class="input-group w-full">
                        <label for="profile_image">
                            Profile Image
                            <div class="wrapper flex md:flex-col items-end md:items-start gap-2 mt-[8px]">
                                <img src="{{ asset('assets/image/profile/profile-not-found.svg') }}"
                                     alt="Not Found" width="100" class="img-preview w-[150px] h-[150px] md:w-full md:h-full aspect-square">
                                <input type="file" class="input-hide input-file" id="profile_image"
                                       name="profile_image">
                                <div class="button-file md:w-full">Choose Image</div>
                            </div>
                        </label>
                        @error('profile_image')
                            <p class="text-invalid">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3 w-full col-span-3">
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" class="input @error('name') input-invalid @enderror" name="name" id="name" autocomplete="off" required value="aditya">
                        @error('name')
                            <p class="text-invalid">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" class="input @error('fullname') input-invalid @enderror" name="fullname" id="fullname" autocomplete="off" required value="Aditya Prayatna">
                        @error('fullname')
                            <p class="text-invalid">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" class="input @error('email') input-invalid @enderror" name="email" id="email" autocomplete="off" required value="adityaprayatna@gmail.com">
                        @error('email')
                            <p class="text-invalid">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" class="input @error('password') input-invalid @enderror" name="password" id="password" placeholder="Enter your password..." autocomplete="off" required>
                        @error('password')
                            <p class="text-invalid">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="input @error('phone_number') input-invalid @enderror" name="phone_number" id="phone_number" autocomplete="off" required value="081234567890">
                        @error('phone_number')
                            <p class="text-invalid">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="input @error('nik') input-invalid @enderror" name="nik" id="nik" autocomplete="off" required value="1234567890">
                        @error('nik')
                            <p class="text-invalid">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-group md:col-span-2">
                        <label for="address">Address</label>
                        <textarea class="input @error('address') input-invalid @enderror" name="address" id="address" required rows="4">Jl. Ahmad Yani</textarea>
                        @error('address')
                            <p class="text-invalid">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="button-group flex gap-2 md:col-span-2">
                        <button type="submit" class="button-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('child-script')
    <script>
        const tagImage = document.querySelector('.img-preview');
        const inputImage = document.querySelector('.input-file');

        inputImage.addEventListener('change', function() {
            tagImage.src = URL.createObjectURL(inputImage.files[0]);
        });
    </script>
@endpush
