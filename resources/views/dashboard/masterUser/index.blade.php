@extends('layouts.main')

@section('container')
    <div class="p-6 ">
        <div class="border border-gray-300 p-4 flex items-center justify-between">
            <div>
                <h1 class="font-semibold text-xl">Data User</h1>
            </div>
            <div>
                @include('dashboard.masterUser.partials.createUser')
            </div>
        </div>
        <div class="flex w-full overflow-x-auto p-4 border border-gray-300">
            <table class="table-zebra table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>agus.sugandi95@gmail.com</td>
                        <td>08814539925</td>
                        <td>Jl. Majalaya</td>
                        <td>
                            <div>
                                <button class="btn btn-error">Delete</button>
                                @include('dashboard.masterUser.partials.editUser')
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection