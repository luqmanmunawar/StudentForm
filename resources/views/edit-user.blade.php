@extends('layouts.backend.app')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">
        Edit User
    </h1>


    <div class="row">

        <div class="col-lg-7">

            <div class="card shadow mb-4">

                <div class="card-header py-3">

                    <h6 class="m-0 font-weight-bold text-primary">

                        Edit {{ $user->name }}

                    </h6>

                </div>


                <div class="card-body">

                    <form
                        action="{{ route('users.update', $user->id) }}"
                        method="POST"
                    >

                        @csrf

                        @method('PUT')


                        {{-- NAME --}}
                        <div class="form-group">

                            <label>
                                Name
                            </label>


                            <input
                                type="text"
                                name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $user->name) }}"
                            >


                            @error('name')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>



                        {{-- EMAIL --}}
                        <div class="form-group">

                            <label>
                                Email
                            </label>


                            <input
                                type="email"
                                name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email', $user->email) }}"
                            >


                            @error('email')

                                <div class="invalid-feedback">

                                    {{ $message }}

                                </div>

                            @enderror

                        </div>



                        {{-- BUTTONS --}}
                        <button
                            type="submit"
                            class="btn btn-primary"
                        >

                            <i class="fas fa-save mr-1"></i>

                            Update User

                        </button>


                        <a
                            href="{{ route('user.records') }}"
                            class="btn btn-secondary ml-2"
                        >

                            Cancel

                        </a>


                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection