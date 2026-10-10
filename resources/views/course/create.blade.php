
<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>
    <h1>Create Course</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/courses" method="POST">
        @csrf

        <p>Name: <input type="text" name="name" value="{{ old('name') }}"></p>

        <p>Description:
            <textarea name="description">{{ old('description') }}</textarea>
        </p>

        <p>Duration in weeks:
            <input type="number" name="duration" value="{{ old('duration') }}">
        </p>

        <p>Fee:
            <input type="number" step="0.01" name="fee" value="{{ old('fee') }}">
        </p>

        <p>Difficulty:
            <select name="difficulty">
                <option value="Easy">Easy</option>
                <option value="Medium">Medium</option>
                <option value="Hard">Hard</option>
            </select>
        </p>

        <p>
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" name="is_active" value="1" checked>
            Active
        </p>

        <button type="submit">Create Course</button>
    </form>

    <a href="/courses">Back to Courses</a>
</body>
</html>
