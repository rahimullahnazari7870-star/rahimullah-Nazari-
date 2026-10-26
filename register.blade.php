<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - IT Student Portal</title>
</head>
<body>
    <h1>Create an account</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <div>
            <label>Full name</label>
            <input name="name" type="text" value="{{ old('name') }}" required>
        </div>
        <div>
            <label>Email Address</label>
            <input name="email" type="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label>Password</label>
            <input name="password" type="password" required>
        </div>
        <div>
            <label>Confirm Password</label>
            <input name="password_confirmation" type="password" required>
        </div>
        <button type="submit">Register</button>
    </form>
    <a href="{{ route('login') }}">Already have an account?</a>
</body>
</html>
