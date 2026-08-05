<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Edit Student</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="card">

        <div class="card-header">
            Edit Student
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">

                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif

            <form
                action="{{ route('students.update', $student) }}"
                method="POST"
            >
                @csrf
                @method('PUT')

                <div class="mb-3">
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
                        value="{{ old('name', $student->name) }}"
                        required
                    >
                </div>

                <div class="mb-3">
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
                        value="{{ old('city', $student->city) }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label
                        for="marks"
                        class="form-label"
                    >
                        Marks
                    </label>

                    <input
                        type="number"
                        id="marks"
                        name="marks"
                        class="form-control"
                        value="{{ old('marks', $student->marks) }}"
                        min="0"
                        max="100"
                        required
                    >
                </div>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Update Student
                </button>

                <a
                    href="{{ route('students.index') }}"
                    class="btn btn-secondary"
                >
                    Cancel
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>