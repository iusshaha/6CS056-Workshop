
<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/students" method="POST">
        @csrf

        <p>Name: <input type="text" name="name" value="{{ old('name') }}"></p>
        <p>Email: <input type="email" name="email" value="{{ old('email') }}"></p>
        <p>Phone: <input type="text" name="phone" value="{{ old('phone') }}"></p>
        <p>Address: <textarea name="address">{{ old('address') }}</textarea></p>
        <p>Date of Birth: <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}"></p>

        <button type="submit">Create Student</button>
    </form>

    <a href="/students">Back to Students</a>
</body>
</html>
