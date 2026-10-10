
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')

        <p>Name:
            <input type="text" name="name"
                   value="{{ old('name', $student->name) }}">
        </p>

        <p>Email:
            <input type="email" name="email"
                   value="{{ old('email', $student->email) }}">
        </p>

        <p>Phone:
            <input type="text" name="phone"
                   value="{{ old('phone', $student->phone) }}">
        </p>

        <p>Address:
            <textarea name="address">{{ old('address', $student->address) }}</textarea>
        </p>

        <p>Date of Birth:
            <input type="date" name="date_of_birth"
                   value="{{ old('date_of_birth', $student->date_of_birth) }}">
        </p>

        <button type="submit">Update Student</button>
    </form>

    <a href="/students">Back to Students</a>
</body>
</html>
