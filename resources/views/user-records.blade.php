@extends('layouts.backend.app')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">
        User Records
    </h1>


    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show">

            {{ session('success') }}

            <button
                type="button"
                class="close"
                data-dismiss="alert"
            >
                <span>&times;</span>
            </button>

        </div>

    @endif


    {{-- ERROR MESSAGE --}}
    @if(session('error'))

        <div class="alert alert-danger alert-dismissible fade show">

            {{ session('error') }}

            <button
                type="button"
                class="close"
                data-dismiss="alert"
            >
                <span>&times;</span>
            </button>

        </div>

    @endif


    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">
                All Users
            </h6>

        </div>


        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead class="thead-light">

                        <tr>

                            <th>ID</th>

                            <th>Name</th>

                            <th>Email</th>

                            <th style="width: 190px;">
                                Role
                            </th>

                            <th>Joined</th>

                            @can('Edit Users')
                                <th style="width: 190px;">
                                    Action
                                </th>
                            @endcan

                        </tr>

                    </thead>


                    <tbody>

                        @foreach($users as $user)

                            <tr>


                                {{-- ID --}}
                                <td>
                                    {{ $user->id }}
                                </td>


                                {{-- NAME --}}
                                <td>

                                    <strong>
                                        {{ $user->name }}
                                    </strong>

                                </td>


                                {{-- EMAIL --}}
                                <td>
                                    {{ $user->email }}
                                </td>


                                {{-- ROLE --}}
                                <td>

                                    {{-- ONLY ADMIN GETS ROLE DROPDOWN --}}
                                    @if(auth()->user()->hasAnyRole(['Admin', 'admin']))

                                        <form
                                            action="{{ route('users.role.update', $user->id) }}"
                                            method="POST"
                                            class="role-form"
                                        >

                                            @csrf

                                            @method('PUT')


                                            <select
                                                name="role"
                                                class="form-control role-select"
                                            >

                                                @if($user->roles->isEmpty())

                                                    <option
                                                        value=""
                                                        selected
                                                        disabled
                                                    >
                                                        No Role
                                                    </option>

                                                @endif


                                                @foreach($roles as $role)

                                                    <option
                                                        value="{{ $role->name }}"
                                                        {{ $user->hasRole($role->name) ? 'selected' : '' }}
                                                    >

                                                        {{ ucfirst($role->name) }}

                                                    </option>

                                                @endforeach

                                            </select>

                                        </form>


                                    @else

                                        {{-- EVERYONE ELSE SEES ROLE AS TEXT --}}
                                        <span class="role-text">

                                            {{ ucfirst(
                                                $user->getRoleNames()->first()
                                                ?? 'No Role'
                                            ) }}

                                        </span>

                                    @endif

                                </td>


                                {{-- JOINED --}}
                                <td>

                                    {{ $user->created_at->format('d M Y') }}

                                </td>



                                {{-- ACTION --}}
                                @can('Edit Users')

                                    <td>

                                        <div class="action-buttons">


                                            {{-- EDIT BUTTON --}}
                                            <a
                                                href="{{ route('users.edit', $user->id) }}"
                                                class="btn btn-warning btn-sm"
                                            >

                                                <i class="fas fa-edit"></i>

                                                Edit

                                            </a>



                                            {{-- DELETE: ADMIN ONLY --}}
                                            @if(auth()->user()->hasAnyRole(['Admin', 'admin']))

                                                @can('Delete Users')

                                                    @if(auth()->id() !== $user->id)

                                                        <form
                                                            action="{{ route('users.destroy', $user->id) }}"
                                                            method="POST"
                                                            class="delete-user-form"
                                                        >

                                                            @csrf

                                                            @method('DELETE')


                                                            <button
                                                                type="submit"
                                                                class="btn btn-danger btn-sm"
                                                            >

                                                                <i class="fas fa-trash-alt"></i>

                                                                Delete

                                                            </button>

                                                        </form>

                                                    @endif

                                                @endcan

                                            @endif


                                        </div>

                                    </td>

                                @endcan


                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>


<style>

    .table td {
        vertical-align: middle;
    }


    /* ROLE DROPDOWN */

    .role-select {
        width: 100%;

        min-width: 150px;

        border-radius: 6px;

        color: #5a5c69;

        font-weight: 500;

        cursor: pointer;
    }


    .role-select:focus {
        border-color: #4e73df;

        box-shadow:
            0 0 0 0.2rem rgba(78, 115, 223, 0.15);
    }


    /* ROLE TEXT */

    .role-text {
        color: #5a5c69;

        font-weight: 600;
    }


    /* ACTION BUTTONS */

    .action-buttons {
        display: flex;

        align-items: center;

        gap: 8px;

        flex-wrap: wrap;
    }


    .delete-user-form {
        margin: 0;
    }

</style>


<script>

document.addEventListener('DOMContentLoaded', function () {


    /*
    |--------------------------------------------------------------------------
    | Role Dropdown
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('.role-select')
        .forEach(function (select) {

            select.addEventListener('change', function () {

                this.closest('.role-form').submit();

            });

        });



    /*
    |--------------------------------------------------------------------------
    | Delete Confirmation
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('.delete-user-form')
        .forEach(function (form) {

            form.addEventListener('submit', function (event) {

                const confirmed = confirm(
                    'Are you sure you want to delete this user?'
                );


                if (!confirmed) {
                    event.preventDefault();
                }

            });

        });


});

</script>

@endsection