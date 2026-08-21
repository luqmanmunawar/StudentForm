@extends('layouts.backend.app')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">
        Roles & Permissions
    </h1>

    <div class="card shadow mb-4">
        <div class="card-body">

            @foreach($roles as $role)

                @php
                    $isAdmin = strtolower($role->name) === 'admin';
                @endphp

                <div class="role-section">

                    {{-- ROLE HEADER --}}
                    <div class="role-header">

                        <div>
                            <h5 class="role-name mb-1">
                                {{ ucfirst($role->name) }}
                            </h5>

                            <small class="text-muted">
                                Role Permissions
                            </small>
                        </div>

                        @if($isAdmin)

                            <label class="select-all-box">

                                <input
                                    type="checkbox"
                                    id="selectAllAdmin"
                                >

                                <span>Select All</span>

                            </label>

                        @endif

                    </div>


                    {{-- USER MANAGEMENT --}}
                    <div class="permission-row">

                        <div class="permission-category">
                            User Management
                        </div>

                        <div class="permission-grid">

                            @foreach([
                                'View Users',
                                'Create Users',
                                'Edit Users',
                                'Delete Users'
                            ] as $permission)

                                <label class="permission-item">

                                    <input
                                        type="checkbox"
                                        class="{{ $isAdmin ? 'admin-permission' : 'role-permission' }}"
                                    >

                                    <span>{{ $permission }}</span>

                                </label>

                            @endforeach

                        </div>

                    </div>


                    {{-- REPORTS --}}
                    <div class="permission-row">

                        <div class="permission-category">
                            Reports
                        </div>

                        <div class="permission-grid">

                            @foreach([
                                'View Report',
                                'Create Report',
                                'Download Report'
                            ] as $permission)

                                <label class="permission-item">

                                    <input
                                        type="checkbox"
                                        class="{{ $isAdmin ? 'admin-permission' : 'role-permission' }}"
                                    >

                                    <span>{{ $permission }}</span>

                                </label>

                            @endforeach

                        </div>

                    </div>


                    {{-- TIMETABLE --}}
                    <div class="permission-row">

                        <div class="permission-category">
                            Timetable
                        </div>

                        <div class="permission-grid">

                            @foreach([
                                'View Timetable',
                                'Update Timetable'
                            ] as $permission)

                                <label class="permission-item">

                                    <input
                                        type="checkbox"
                                        class="{{ $isAdmin ? 'admin-permission' : 'role-permission' }}"
                                    >

                                    <span>{{ $permission }}</span>

                                </label>

                            @endforeach

                        </div>

                    </div>


                    {{-- CLASS --}}
                    <div class="permission-row">

                        <div class="permission-category">
                            Class
                        </div>

                        <div class="permission-grid">

                            <label class="permission-item">

                                <input
                                    type="checkbox"
                                    class="{{ $isAdmin ? 'admin-permission' : 'role-permission' }}"
                                >

                                <span>Attend Class</span>

                            </label>

                        </div>

                    </div>


                    {{-- STUDENT MANAGEMENT --}}
                    <div class="permission-row">

                        <div class="permission-category">
                            Student Management
                        </div>

                        <div class="permission-grid">

                            <label class="permission-item">

                                <input
                                    type="checkbox"
                                    class="{{ $isAdmin ? 'admin-permission' : 'role-permission' }}"
                                >

                                <span>View Student List</span>

                            </label>

                        </div>

                    </div>

                </div>


                @if(!$loop->last)
                    <div class="role-divider"></div>
                @endif

            @endforeach

        </div>
    </div>

</div>


<style>

.role-section {
    width: 100%;
}

.role-header {
    display: flex;
    justify-content: space-between;
    align-items: center;

    padding: 20px 22px;

    background: #f8f9fc;

    border-radius: 8px;

    margin-bottom: 5px;
}

.role-name {
    color: #4e73df;
    font-size: 18px;
    font-weight: 700;
}

.permission-row {
    display: flex;
    align-items: flex-start;

    padding: 22px;

    border-bottom: 1px dashed #e3e6f0;
}

.permission-category {
    width: 210px;
    min-width: 210px;

    padding-top: 3px;

    font-size: 15px;
    font-weight: 700;

    color: #5a5c69;
}


/*
|--------------------------------------------------------------------------
| 3 fixed columns
|--------------------------------------------------------------------------
|
| This keeps permissions in sequence.
| Extra permissions automatically move below.
|
*/

.permission-grid {
    flex: 1;

    display: grid;

    grid-template-columns: repeat(3, 1fr);

    column-gap: 35px;
    row-gap: 20px;

    align-items: center;
}

.permission-item {
    display: flex;
    align-items: center;

    gap: 10px;

    margin: 0;

    font-size: 14px;
    font-weight: 500;

    color: #5a5c69;
}

.permission-item input[type="checkbox"],
.select-all-box input[type="checkbox"] {

    display: inline-block !important;

    position: static !important;

    visibility: visible !important;

    opacity: 1 !important;

    width: 20px !important;
    height: 20px !important;

    margin: 0 !important;

    flex-shrink: 0;

    accent-color: #4e73df;
}

.select-all-box {
    display: flex;
    align-items: center;

    gap: 9px;

    margin: 0;

    font-weight: 600;

    cursor: pointer;

    color: #5a5c69;
}

.role-divider {
    height: 1px;

    background: #dfe3ee;

    margin: 45px 0;
}


/* TABLET */

@media (max-width: 992px) {

    .permission-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}


/* MOBILE */

@media (max-width: 768px) {

    .permission-row {
        display: block;
    }

    .permission-category {
        width: 100%;
        min-width: 100%;

        margin-bottom: 18px;
    }

    .permission-grid {
        grid-template-columns: 1fr;
    }

}

</style>


<script>

document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | ALL CHECKBOXES START UNCHECKED
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('.role-section input[type="checkbox"]')
        .forEach(function (checkbox) {

            checkbox.checked = false;

        });


    /*
    |--------------------------------------------------------------------------
    | ADMIN SELECT ALL
    |--------------------------------------------------------------------------
    */

    const selectAll =
        document.getElementById('selectAllAdmin');


    if (!selectAll) {
        return;
    }


    const adminPermissions =
        document.querySelectorAll('.admin-permission');


    selectAll.addEventListener('change', function () {

        adminPermissions.forEach(function (checkbox) {

            checkbox.checked =
                selectAll.checked;

        });

    });

});

</script>

@endsection