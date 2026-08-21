<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Student CRUD</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

<div class="container py-5">

    <h1 class="mb-4">Student Management</h1>

    {{-- Success message --}}
    @if (session('Success'))
        <div class="alert alert-success">
            {{ session('Success') }}
        </div>
    @endif

    {{-- Validation errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Please fix the following errors:</strong>

            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Add student form --}}
    <div class="card mb-4">
        <div class="card-header">
            Add Student
        </div>

        <div class="card-body">

            <form
                action="{{ route('students.store') }}"
                method="POST"
            >
                @csrf

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label
                            for="name"
                            class="form-label"
                        >
                            Name
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="form-control"
                            value="{{ old('name') }}"
                            required
                        >
                    </div>

                    <div class="col-md-4 mb-3">
                        <label
                            for="city"
                            class="form-label"
                        >
                            City
                        </label>

                        <input
                            type="text"
                            id="city"
                            name="city"
                            class="form-control"
                            value="{{ old('city') }}"
                            required
                        >
                    </div>

                    <div class="col-md-4 mb-3">
                        <label
                            for="marks"
                            class="form-label"
                        >
                            Marks
                        </label>

                        <input
                            type="integer"
                            
                            name="marks"
                            class="form-control"
                            value="{{ old('marks') }}"
                           
                        >
                    </div>
                    <!-- @error('marks')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror -->

                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Add Student
                </button>

            </form>

        </div>
    </div>

    {{-- Students table --}}
    <div class="card">
        <div class="card-header">
            Student List
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-striped align-middle">

                    <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Marks</th>
                        <th width="180">Actions</th>
                    </tr>
                    </thead>

                    <tbody>

                    @forelse ($students as $student)

                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->city }}</td>
                            <td>{{ $student->marks }}</td>

                            <td>
                                <a
                                    href="{{ route('students.edit', $student) }}"
                                    class="btn btn-warning btn-sm"
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('students.destroy', $student) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete this student?')"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                    >
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td
                                colspan="5"
                                class="text-center"
                            >
                                No students found.
                            </td>
                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>

</body>
</html>