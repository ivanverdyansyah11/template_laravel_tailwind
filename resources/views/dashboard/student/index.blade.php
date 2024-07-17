@extends('template.main')

@section('content-dashboard')
    <div class="container mt-4 px-[1.5rem]">
        @if (session()->has('success'))
            <div class="alert alert-success w-full mb-3">
                {{ session('success') }}
            </div>
        @elseif(session()->has('failed'))
            <div class="alert alert-danger w-full mb-3">
                {{ session('failed') }}
            </div>
        @endif
        <div class="card-default">
            <div class="wrapper flex items-center justify-between gap-2">
                <form class="form w-full">
                    <div class="input-group w-full">
                        <input type="search" class="input w-full" id="search" placeholder="Search student.." autocomplete="off">
                    </div>
                </form>
                <a href="{{ route('student.create') }}" class="button-primary hidden md:inline-block">Add New Student</a>
            </div>
            <div class="wrapper-table mt-4">
                <table class="table w-full">
                    <thead>
                    <tr>
                        <th>Fullname</th>
                        <th>NIK</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th class="w-[200px]"></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Aditya Prayatna</td>
                            <td>1234567890</td>
                            <td>081234567890</td>
                            <td>Jl. Ahmad Yani</td>
                            <td class="flex justify-end gap-1 w-[200px]">
                                <a href="{{ route('student.show', 1) }}"
                                   class="wrapper-icon icon-detail flex items-center justify-center">
                                    <i class="fa-solid fa-eye w-[0.85rem]"></i>
                                </a>
                                <a href="{{ route('student.edit', 1) }}"
                                   class="wrapper-icon icon-edit flex items-center justify-center">
                                    <i class="fa-solid fa-pen-to-square w-[0.85rem]"></i>
                                </a>
                                <button type="button" class="wrapper-icon icon-delete flex items-center justify-center" data-modal-target="delete-modal" data-modal-toggle="delete-modal" data-id="{{ 1 }}">
                                    <i class="fa-solid fa-trash-can w-[0.85rem]"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Aditya Prayatna</td>
                            <td>1234567890</td>
                            <td>081234567890</td>
                            <td>Jl. Ahmad Yani</td>
                            <td class="flex justify-end gap-1 w-[200px]">
                                <a href="{{ route('student.show', 1) }}"
                                   class="wrapper-icon icon-detail flex items-center justify-center">
                                    <i class="fa-solid fa-eye w-[0.85rem]"></i>
                                </a>
                                <a href="{{ route('student.edit', 1) }}"
                                   class="wrapper-icon icon-edit flex items-center justify-center">
                                    <i class="fa-solid fa-pen-to-square w-[0.85rem]"></i>
                                </a>
                                <button type="button" class="wrapper-icon icon-delete flex items-center justify-center" data-modal-target="delete-modal" data-modal-toggle="delete-modal" data-id="{{ 1 }}">
                                    <i class="fa-solid fa-trash-can w-[0.85rem]"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('partial.student')
@endsection

@push('child-script')
    <script>
        $(document).on('click', '[data-modal-target="delete-modal"]', function() {
            let id = $(this).data('id');
            $('#buttonDeleteStudent').attr('action', '/student/' + id);
        });
    </script>
@endpush
