@extends('layouts.main')
@section('title', $pageInfo['pageTitle'])
@section('container')
    @include('layouts.partials.breadcrumb')
    <!-- Penggunaan kondisi -->
        @if ($pageInfo['status'] == 'aktif')
        <p>Akun Anda aktif.</p>
        @elseif($pageInfo['status'] == 'nonaktif')
        <p>Akun Anda tidak aktif.</p>
        @else
        <p>Status akun tidak diketahui.</p>
        @endif
    <div class="px-6 max-h-[calc(100vh-140px)] overflow-y-scroll">
        <div class=" p-4 flex items-center justify-between">
            <div>
                <h1 class="font-semibold text-xl">Data User</h1>
            </div>
            <div>
                @include('dashboard.masterUser.partials.createUser')
            </div>
        </div>
        <div class="flex w-full overflow-x-auto p-4">
            <table class="table-zebra table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['phone'] }}</td>
                        <td>{{ $user['address'] }}</td>
                        <td>
                            <div>
                                <button class="btn btn-error">Delete</button>
                                @include('dashboard.masterUser.partials.editUser')
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection